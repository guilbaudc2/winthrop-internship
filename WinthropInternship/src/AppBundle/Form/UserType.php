<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add("firstName")->add("lastName")->add("username")->add("email", EmailType::class)->add("password", PasswordType::class)->add('roles', ChoiceType::class, array(
            'choices' => array('ROLE_STUDENT' => 'ROLE_STUDENT', 'ROLE_HR_ADMIN' => 'ROLE_HR_ADMIN', 'ROLE_IO_ADMIN' => 'ROLE_IO_ADMIN', 'ROLE_FL_ADMIN' => 'ROLE_FL_ADMIN', 'ROLE_SUPER_ADMIN' => 'ROLE_SUPER_ADMIN'),
                'expanded' => true,
                'multiple' => true,
            )
        )->add('enabled', ChoiceType::class, array(
            'choices' => array('Enabled' => true, 'Disabled' => false),
        ));
        // ->add('save', 'submit', array('label' => 'ui.button.save'));

    }

}