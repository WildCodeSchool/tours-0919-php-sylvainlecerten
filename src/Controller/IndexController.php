<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Content;
use App\Entity\Message;
use App\Repository\ContentRepository;
use App\Repository\MessageRepository;
use App\Form\MessageType;

class IndexController extends AbstractController
{
    /**
    * @Route("/", name="app_index")
    */
    public function index(ContentRepository $contentRepository, Request $request) :Response
    {
        $whoAmIContents = $contentRepository->findBy(
            ['category' => 'whoami'],
            ['ordering' => 'ASC']
        );
        $presentationContents = $contentRepository->findBy(
            ['category' => 'presentation'],
            ['ordering' => 'ASC']
        );

        $message=new Message();
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($message);
            $entityManager->flush();

            return $this->redirectToRoute('app_index');
        }

        return $this->render('index/index.html.twig', [
            'whoAmIContents' => $whoAmIContents,
            'presentationContents' => $presentationContents,
            'form' => $form->createView(),
        ]);
    }
}
