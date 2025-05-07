<?php

namespace App\Controller;

use App\Form\AddressFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test/form', name: 'test_form')]
    public function index(Request $request): Response
    {
        $form = $this->createForm(AddressFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->addFlash('success', 'Formulaire soumis avec succès !');
        }

        return $this->render('test/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
