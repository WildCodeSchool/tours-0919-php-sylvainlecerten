<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Content;
use App\Entity\Service;
use App\Repository\ServiceRepository;
use App\Repository\ContentRepository;
use App\Repository\MessageRepository;
use App\Form\MessageType;

class IndexController extends AbstractController
{
    /**
    * @Route("/", name="app_index")
    */
  
    public function index(ContentRepository $contentRepository, ServiceRepository $serviceRepository) :Response
    {
        $whoAmIContents = $contentRepository->findBy(
            ['category' => 'whoami'],
            ['ordering' => 'ASC']
        );
        $presentationContents = $contentRepository->findBy(
            ['category' => 'presentation'],
            ['ordering' => 'ASC']
        );
        // Formulaire de contact
        $message=new Message();
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($message);
            $entityManager->flush();

            return $this->redirectToRoute('contact-form-response');
        }

        $services = $serviceRepository->findAll();

        return $this->render('index/index.html.twig', [
            'whoAmIContents' => $whoAmIContents,
            'presentationContents' => $presentationContents,
            'services' => $services
            'form' => $form->createView(),
        ]);
    }
    //page de redirection suite à validation du formulaire de contact
    /**
    * @Route("/sent", name="contact-form-response")
    */
    public function contactSent()
    {
        return $this->render('index/contact_sent.html.twig');
    }
}
