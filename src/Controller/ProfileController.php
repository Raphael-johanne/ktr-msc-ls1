<?php

namespace App\Controller;

use App\Form\Type\ProfileType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile/new", name="profile_new")
     * @param Request             $request
     * @param TranslatorInterface $translator
     */
    public function new(Request $request, TranslatorInterface $translator): Response
    {
        $form = $this->createForm(ProfileType::class);

        return $this->render('profile/new.html.twig', [
            'form'      => $form->createView(),
            'form_name' => $translator->trans('profile.interface')
        ]);
    }
}
