<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Presentation;
use App\Repository\PresentationRepository;

Class PresentationController extends AbstractController
{
    /**
    * @Route("/presentation", name="app_presentation")
    */
    public function index() :Response
    {
        $presentation = $presentationRepository->findAll();

        if (!$presentation){
            throw $this->createNotFoundException('Aucune information n\'est disponible.');
        }
        return $this->render('presentation.html.twig', [
                'presentation' => $presentation
        ]);
    }

}