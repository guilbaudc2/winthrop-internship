<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('roles', ChoiceType::class, array(
            'choices' => array('ROLE_USER' => 'ROLE_USER', 'ROLE_STUDENT' => 'ROLE_STUDENT', 'ROLE_HR_ADMIN' => 'ROLE_HR_ADMIN', 'ROLE_IO_ADMIN' => 'ROLE_IO_ADMIN', 'ROLE_FL_ADMIN' => 'ROLE_FL_ADMIN', 'ROLE_SUPER_ADMIN' => 'ROLE_SUPER_ADMIN'),
                'expanded' => true,
                'multiple' => true,
            )
        );
        // ->add('save', 'submit', array('label' => 'ui.button.save'));

    }

}