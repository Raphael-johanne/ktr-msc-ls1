<?php

namespace App\Controller;

use App\Entity\Library;
use App\Form\Type\LibraryType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class LibraryController extends AbstractController
{
    /**
     * @Route("/library/add", name="library_add")
     * @param Request             $request
     * @param TranslatorInterface $translator
     */
    public function new(Request $request, TranslatorInterface $translator): Response
    {
        $user       = $this->getUser();
        $em         = $this->getDoctrine()->getManager();
        $library    = new Library();

        $form = $this->createForm(LibraryType::class, $library);
        $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {
            $library    = $form->getData();

            $user->addLibrary($library);

            $em->persist($library);
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', $translator->trans('success.library'));

            return $this->redirectToRoute('library_add');
        }

        return $this->render('card/edit.html.twig', [
            'form'      => $form->createView(),
            'form_name' => $translator->trans('library.interface')
        ]);
    }
}
