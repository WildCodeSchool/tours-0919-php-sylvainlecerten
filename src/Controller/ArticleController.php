<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Form\BlogType;
use App\Repository\BlogRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/article")
 */
class ArticleController extends AbstractController
{
    /**
    * @Route("/", name="app_article")
    */
    public function articles(BlogRepository $blogRepository): Response
    {
        return $this->render('blog/article.html.twig', [
            'blogs' => $blogRepository->findAll(),
        ]);
    }

    /**
     * @Route("/public/{id}", name="blog_show_public", methods={"GET"})
     */
    public function publicShow(Blog $blog): Response
    {
        return $this->render('blog/article_public.html.twig', [
            'blog' => $blog,
        ]);
    }
}
