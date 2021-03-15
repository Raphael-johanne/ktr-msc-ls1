<?php

namespace App\Controller;

use App\Entity\Profile;
use App\Form\Type\ProfileType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile/edit", name="profile_edit")
     * @param Request             $request
     * @param TranslatorInterface $translator
     */
    public function new(Request $request, TranslatorInterface $translator): Response
    {
        $user   = $this->getUser();
        $em     = $this->getDoctrine()->getManager();

        if (!is_null($user->getProfile())) {
            $profile = $user->getProfile();
        } else {
            $profile = new Profile();
        }
       
        $form = $this->createForm(ProfileType::class, $profile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $profile    = $form->getData();
            $user->setProfile($profile);

            $em->persist($profile);
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('profile_edit');
        }

        return $this->render('card/edit.html.twig', [
            'form'      => $form->createView(),
            'form_name' => $translator->trans('profile.interface')
        ]);
    }
}
