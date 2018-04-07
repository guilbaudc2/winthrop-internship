<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class StudentFormOneType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName')->add('lastName')->add('userName')->add('cWID')->add('emailAddress')->add('classEnrolled')->add('numCredits')->add('phoneNumber')->add('legallyAuthorized')->add('futureWorkAuthorization')->add('major')->add('minor')->add('facultyLiaison')->add('semesterEnrolled')->add('yearEnrolled', DateType::class, array('widget' => 'single_text'))->add('semesterGrad')->add('yearGrad', DateType::class, array('widget' => 'single_text'))->add('date', DateType::class, array('widget' => 'single_text'))->add('siteSuperName')->add('siteSuperEmail');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\StudentFormOne'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_studentformone';
    }


}
