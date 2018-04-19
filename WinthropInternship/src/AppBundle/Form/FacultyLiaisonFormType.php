<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class FacultyLiaisonFormType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('internshipLearningAgreement', CheckboxType::class, array(
            'label' => 'Does student need a completed Internship Learning Agreement?',
            'required' => false
        ))->add('midPointEvaluation', CheckboxType::class, array(
            'label' => 'Does student need to complete a Midpoint Evaluation?',
            'required' => false
        ))->add('siteVisit', CheckboxType::class, array(
            'label' => 'Does Internship Site Require a Site Visit?',
            'required' => false
        ))->add('finalReport', CheckboxType::class, array(
            'label' => 'Does student need to complete a Final Report?',
            'required' => false
        ))->add('finalEvaluation', CheckboxType::class, array(
            'label' => 'Does student need to complete a Final Evaluation?',
            'required' => false
        ))->add('internshipIndustry', ChoiceType::class, array(
            'choices' => array("Accounting/Auditing" => "Accounting/Auditing",  "Arboreta and Botanical or Zoological Gardens" => "Arboreta and Botanical or Zoological Gardens", "Architecture/Construction/Interior Design" => "Architecture/Construction/Interior Design", "Arts Organizations" => "Arts Organizations", "City and County Government" => "City and County Government", "Colleges, Universities and Professional Schools" => "Colleges, Universities and Professional Schools", "Commercial Sports" => "Commercial Sports", "Community Health Awareness Organizations" => "Community Health Awareness Organizations", "Correctional Institutions & Police Protection" =>	"Correctional Institutions & Police Protection", "Early Childhood" => "Early Childhood", "Elementary & Secondary School" =>	"Elementary & Secondary School", "Entertainment Venues"	=>	"Entertainment Venues", "Finance/Financial Institutions/Insurance"	=>	"Finance/Financial Institutions/Insurance", "General Economic Programs"	=>	"General Economic Programs", "Healthcare (medical practices, hospitals)"	=> "Healthcare (medical practices, hospitals)", "Hospitality" => "Hospitality", "Junior College and Technical Institutes" => "Junior College and Technical Institutes", "Legal Services" => "Legal Services", "Marketing Communications" =>	"Marketing Communications", "Manufacturing"	=> "Manufacturing", "Media"	=> "Media", "Membership Organizations" => "Membership Organizations", "Mental Health" => "Mental Health", "Military" => "Military", "Museums and Art Galleries"	=> "Museums and Art Galleries", "Park & Recreation Service (parks, golf courses, YMCA, YWCA)" => "Park & Recreation Service (parks, golf courses, YMCA, YWCA)", "Photography (stand-alone)"	=>	"Photography (stand-alone)", "Political Organizations"	=>	"Political Organizations", "Residential Care"	=>	"Residential Care", "State and Federal Government" => "State and Federal Government", "Theatrical Producers and Dance" => "Theatrical Producers and Dance", "Veteran Services" => "Veteran Services", "Wellness & Fitness" => "Wellness & Fitness", "Workforce Development" => "Workforce Development", "Other" => "Other"),
    ))->add('additionalComments', TextareaType::class, array(
            'label' => 'Additional Comments regarding Internship:',
            'required' => false
        ))->add('legalName', TextType::class, array(
            'label' => 'Digital Signature',
        ))->add('approve');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\FacultyLiaisonForm'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_facultyliaisonform';
    }


}
