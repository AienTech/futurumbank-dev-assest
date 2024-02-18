<?php

namespace App\Repository;

use App\Entity\Address;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Address>
 *
 * @method Address|null find($id, $lockMode = null, $lockVersion = null)
 * @method Address|null findOneBy(array $criteria, array $orderBy = null)
 * @method Address[]    findAll()
 * @method Address[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AddressRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Address::class);
    }

    public function findOrCreateOne(Address $address) {
        if ($this->exists($address->getAddress())) {
            return $this->findByHash($address->getAddress());
        }

        $this->getEntityManager()->persist($address);
        $this->getEntityManager()->flush();
        return $this->findByHash($address->getAddress());
    }

    public function exists(string $address) {
        $qb = $this->createQueryBuilder("address");

        $result = $qb->select(
            "COUNT(address.id) as count",
        )->where(
            $qb->expr()->eq("address.address", ":address")
        )->setParameter("address", $address)
        ->getQuery()
        ->getSingleResult();

        return $result['count'] !== 0;
    }

    public function findByHash(string $hash) {
        $qb = $this->createQueryBuilder("address");

        $result = $qb->select(
            "address",
        )->where(
            $qb->expr()->eq("address.address", ":address")
        )->setParameter("address", $hash)
        ->getQuery()
        ->getSingleResult();

        return $result;
    }

    public function remove(Address $address) {
        $this->getEntityManager()->remove($address);
    }
}
