<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Content;
use App\Repository\ContentRepository;
use App\Repository\MessageRepository;
use App\Form\MessageType;

class IndexController extends AbstractController
{
    /**
    * @Route("/", name="app_index")
    */
    public function index(ContentRepository $contentRepository) :Response
    {
        $whoAmIContents = $contentRepository->findBy(
            ['category' => 'whoami'],
            ['ordering' => 'ASC']
        );
        $presentationContents = $contentRepository->findBy(
            ['category' => 'presentation'],
            ['ordering' => 'ASC']
        );

        $form = $this->createForm(
            MessageType::class,
            null,
            ['method' => Request::METHOD_GET]
        );

        return $this->render('index/index.html.twig', [
            'whoAmIContents' => $whoAmIContents,
            'presentationContents' => $presentationContents,
            'form' => $form->createView(),
        ]);
    }
}
