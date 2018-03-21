<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName')->add('lastName');
    }

    public function getParent()
    {
        // return 'fos_user_registration';
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }
    
    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    public function getFirstName()
    {
        return 'app_user_registration';
    }
    
    public function getLastName()
    {
        return 'app_user_registration';
    }
}