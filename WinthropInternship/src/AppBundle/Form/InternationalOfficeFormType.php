<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class InternationalOfficeFormType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('approve', ChoiceType::class, array(
    'choices'  => array(
        'Yes' => true,
        'Yes with Restrictions' => true,        
        'No' => false,
        'Not Applicable' => true,
    ),
))->add('additionalComments', TextareaType::class, array(
            'label' => 'Additional Comments:',
            'required' => false
        ))->add('digitalSignature', TextType::class, array(
            'label' => 'Digital Signature',
        ));
        // ->add('student_form_one');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\InternationalOfficeForm'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_internationalofficeform';
    }


}
