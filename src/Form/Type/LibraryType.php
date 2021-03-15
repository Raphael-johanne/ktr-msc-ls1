<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class LibraryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
                'name', TextType::class, 
                [
                    'required' => false
                ]
            )
            ->add('company_name', TextType::class, 
                [
                    'required' => false
                ]
            )
            ->add('email_address', EmailType::class, 
                [
                    'required' => true
                ]
            )
            ->add('telephone_number', TelType::class, 
                [
                    'required' => false
                ]
            )
            ->add('save', SubmitType::class);
    }
}
