<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ArticleController extends AbstractController
{
    #[Route('/article/{id}', name: 'article_show')]
    public function show(ArticleRepository $articleRepository, int $id): Response
    {
        $article = $articleRepository->find($id);
        return $this->render('article/show.html.twig', [
            'article' => $article,
        ]);
    }
}
