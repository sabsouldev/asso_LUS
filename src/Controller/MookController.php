<?php

namespace App\Controller;

use App\Repository\MookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MookController extends AbstractController
{
    #[Route('/mook', name: 'mook_index')]
    public function index(MookRepository $mookRepository): Response
    {
        $mooks = $mookRepository->findAll();
        return $this->render('mook/index.html.twig', [
            'mooks' => $mooks,
        ]);
    }
}
