<?php

namespace App\Controller;

use App\Service\BitcoinService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(
        BitcoinService $bitcoinService
    ): Response
    {
        $coin = $bitcoinService->fetchAddressTx(12);

        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
            'coin' => $coin
        ]);
    }
}
