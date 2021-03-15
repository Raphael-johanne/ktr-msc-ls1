<?php

namespace App\Controller;

use App\Form\Type\LibraryType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class LibraryController extends AbstractController
{
    /**
     * @Route("/library/new", name="library_new")
     * @param Request             $request
     * @param TranslatorInterface $translator
     */
    public function new(Request $request, TranslatorInterface $translator): Response
    {
        $form = $this->createForm(LibraryType::class);

        return $this->render('card/new.html.twig', [
            'form'      => $form->createView(),
            'form_name' => $translator->trans('library.interface')
        ]);
    }
}
