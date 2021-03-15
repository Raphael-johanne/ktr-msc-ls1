<?php

namespace App\Controller;

use App\Entity\Profile;
use App\Form\Type\ProfileType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Doctrine\ORM\NoResultException;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile/edit", name="profile_edit")
     * @param Request             $request
     * @param TranslatorInterface $translator
     */
    public function new(Request $request, TranslatorInterface $translator): Response
    {
        $em                 = $this->getDoctrine()->getManager();
        $profileRepository  = $em->getRepository('App:Profile');

        if ($id = $request->query->get('id')) {
            $profile = $profileRepository->find($id);

            if (is_null($profile)) {
                throw new NoResultException('The resource does not exist');
            }
        } else {
            $profile = new Profile();
        }
       
        $form = $this->createForm(ProfileType::class, $profile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $profile    = $form->getData();

            $em->persist($profile);
            $em->flush();

            return $this->redirectToRoute('profile_edit', ['id' => $profile->getId()]);
        }

        return $this->render('card/edit.html.twig', [
            'form'      => $form->createView(),
            'form_name' => $translator->trans('profile.interface')
        ]);
    }
}
