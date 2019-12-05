<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use App\Entity\Presentation;
use App\Repository\PresentationRepository;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use App\Form\PresType;


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
    * @Route("/admin", name="app_administration")
    */    
    public function addParagraph(Request $request)
    {
        $presentation = new Presentation();
        $form = $this->createForm(PresType::class, $presentation);
        $form->handleRequest($request);
     
        if ($form->isSubmitted() && $form->isValid()) {
         $emm = $this->getDoctrine()->getManager();
         $emm->persist($presentation);
         $emm->flush();
         
         return $this->redirectToRoute('/presentation');
        }
     
        return $this->render('form.html.twig', [
         'paragraph' => $presentation,
         'form' => $form->createView(),
        ]);
     
    }
}
