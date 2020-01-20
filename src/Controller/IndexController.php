<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Message;
use App\Entity\Newsletter;
use App\Form\NewsletterType;
use App\Repository\ServiceRepository;
use App\Repository\ContentRepository;
use App\Form\MessageType;

class IndexController extends AbstractController
{
    /**
    * @Route("/", name="app_index")
    */
    public function index(
        ContentRepository $contentRepository,
        ServiceRepository $serviceRepository,
        Request $request
    ):Response {
        $whoAmIContents = $contentRepository->findBy(
            [
                'category' => 'whoami',
                'language' => $request->getLocale()
            ],
            ['ordering' => 'ASC']
        );

        $presentationContents = $contentRepository->findBy(
            [
                'category' => 'presentation',
                'language' => $request->getLocale()
            ],
            ['ordering' => 'ASC']
        );
        
        $services = $serviceRepository->findBy(
            ['language' => $request->getLocale()],
            ['ordering' => 'ASC']
        );
        
        // Contact Form
        $message=new Message();
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($message);
            $entityManager->flush();

            return $this->redirectToRoute('contact-form-response');
        }

        // Newsletter form
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
            'services' => $services,
        ]);
    }
    // redirection page when you submit contact-form
    /**
    * @Route("/sent", name="contact-form-response")
    */
    public function contactSent()
    {
        return $this->render('index/contact_sent.html.twig');
    }

    //predirection when subscribe to newsletter
    /**
    * @Route("/submitted", name="newsletter-form-response")
    */
    public function newsletterSent()
    {
        return $this->render('index/newsletter_ok.html.twig');
    }

    //predirection when subscribe to newsletter
    /**
    * @Route("/mention", name="app_mention")
    */
    public function legalMention()
    {
        return $this->render('mention.html.twig');
    }
}
