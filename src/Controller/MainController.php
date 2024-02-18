<?php

namespace App\Controller;

use App\Service\TransactionService;
use App\Type\Payload;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(
    ): Response
    {
        return $this->render('pages/index.html.twig');
    }

    #[Route('/post', name: 'post', methods: ['POST'])]
    public function post(
        Request $request,
        TransactionService $bitcoinService
    ): JsonResponse {
        try {
            $content = $request->getContent();
            $payload = Payload::from(json_decode($content));
            $payload->validate();
        } catch (Exception $e) {
            return $this->json(['error'=> $e->getMessage()], Response::HTTP_BAD_REQUEST);
        }

        try {
            $result = $bitcoinService->getAddressTransactions($payload)->to();
            
            return $this->json($result);
        } catch (Exception $e) {
            return $this->json(['error'=> $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
