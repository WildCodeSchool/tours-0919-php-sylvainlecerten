<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Content;
use App\Entity\Message;
use App\Entity\Newsletter;
use App\Repository\ContentRepository;
use App\Repository\MessageRepository;
use App\Form\MessageType;
use App\Form\NewsletterType;

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

        // Formulaire newsletter
        $newsletter=new Newsletter();
        $formNews = $this->createForm(NewsletterType::class, $newsletter);
        $formNews->handleRequest($request);

        if ($formNews->isSubmitted() && $formNews->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($newsletter);
            $entityManager->flush();

            return $this->redirectToRoute('newsletter-form-response');
        }

        return $this->render('index/index.html.twig', [
            'whoAmIContents' => $whoAmIContents,
            'presentationContents' => $presentationContents,
            'form' => $form->createView(),
            'formNews' => $formNews->createView(),
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

    //page de redirection suite à abonnement à la newsletter
    /**
    * @Route("/submitted", name="newsletter-form-response")
    */
    public function newsletterSent()
    {
        return $this->render('index/newsletter_ok.html.twig');
    }
}
