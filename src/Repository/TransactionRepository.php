<?php

namespace App\Repository;

use App\Entity\Address;
use App\Entity\Transaction;
use App\Type\Payload;
use DateTime;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NoResultException;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Transaction>
 *
 * @method Transaction|null find($id, $lockMode = null, $lockVersion = null)
 * @method Transaction|null findOneBy(array $criteria, array $orderBy = null)
 * @method Transaction[]    findAll()
 * @method Transaction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TransactionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Transaction::class);
    }

    /**
     * @param Transaction[] $txs
     */
    public function batchCreateTx(array $txs) {
        $batchSize = 20;
        
        $em = $this->getEntityManager();

        for ($i = 0; $i < count($txs); $i++) {
            $em->persist($txs[$i]);

            if (($i % $batchSize) === 0) {
                $em->flush();
            }
        }

        $em->flush();
        $em->clear();
    }

    public function getTransactionsWithPayload(Payload $payload) {
        $qb = $this->createQueryBuilder('tx');

        try {
            $result = $qb->select(
                'COUNT(tx.id) as count',
                'AVG(tx.value) as average'
            )
                ->innerJoin(
                    Address::class,
                    'address',
                    Join::WITH,
                    $qb->expr()->eq('tx.address', 'address')
                )
                ->where(
                    $qb->expr()->andX(
                        $qb->expr()->eq('address.address',':address'),
                        $qb->expr()->gte('tx.confirmed', ':start'),
                        $qb->expr()->lte('tx.confirmed', ':end'),
                        $qb->expr()->gte('tx.value', ':threshold')
                    )
                )
                ->setParameter('address', $payload->getAddress())
                ->setParameter('start', $payload->getTimeframeFrom())
                ->setParameter('end', $payload->getTimeframeTo())
                ->setParameter('threshold', $payload->getThreshold())
                ->groupBy('address.id')
                ->getQuery()
                ->getSingleResult();
    
             return $result;
        } catch (NoResultException $e) {
            return [
                'count' => 0,
                'average' => 0
            ];
        }
    }
}
