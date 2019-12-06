<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Presentation;
use App\Repository\PresentationRepository;
use App\Form\PresentationType;

class PresentationController extends AbstractController
{
    /**
    * @Route("/presentation", name="app_presentation")
    */
    public function index(PresentationRepository $presRepository) :Response
    {
        $presentations = $presRepository->findAll();

        if (!$presentations) {
            throw $this->createNotFoundException('Aucune information n\'est disponible.');
        }
        return $this->render('presentation.html.twig', [
                'presentations' => $presentations
        ]);
    }
    /**
    * @Route("/new", name="presentation_new")
    */
    public function newPresentation(Request $request): Response
    {
        $presentation = new Presentation();
        $presentationForm = $this->createForm(PresentationType::class, $presentation);
        $presentationForm->handleRequest($request);

        if ($presentationForm->isSubmitted() && $presentationForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($presentation);
            $em->flush();
            
            return $this->redirectToRoute('app_presentation');
        }

        return $this->render('form.html.twig', [
            'presentation' => $presentation,
            'form' => $presentationForm->createView(),
        ]);
    }
}
