<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class FacultyLiaisonFormType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('internshipLearningAgreement')->add('midPointEvaluation')->add('siteVisit')->add('finalReport')->add('finalEvaluation')->add('internshipIndustry', ChoiceType::class, array(
            'choices' => array("Accounting/Auditing" => "Accounting/Auditing",  "Arboreta and Botanical or Zoological Gardens" => "Arboreta and Botanical or Zoological Gardens", "Architecture/Construction/Interior Design" => "Architecture/Construction/Interior Design", "Arts Organizations" => "Arts Organizations", "City and County Government" => "City and County Government", "Colleges, Universities and Professional Schools" => "Colleges, Universities and Professional Schools", "Commercial Sports" => "Commercial Sports", "Community Health Awareness Organizations" => "Community Health Awareness Organizations", "Correctional Institutions & Police Protection" =>	"Correctional Institutions & Police Protection", "Early Childhood" => "Early Childhood", "Elementary & Secondary School" =>	"Elementary & Secondary School", "Entertainment Venues"	=>	"Entertainment Venues", "Finance/Financial Institutions/Insurance"	=>	"Finance/Financial Institutions/Insurance", "General Economic Programs"	=>	"General Economic Programs", "Healthcare (medical practices, hospitals)"	=> "Healthcare (medical practices, hospitals)", "Hospitality" => "Hospitality", "Junior College and Technical Institutes" => "Junior College and Technical Institutes", "Legal Services" => "Legal Services", "Marketing Communications" =>	"Marketing Communications", "Manufacturing"	=> "Manufacturing", "Media"	=> "Media", "Membership Organizations" => "Membership Organizations", "Mental Health" => "Mental Health", "Military" => "Military", "Museums and Art Galleries"	=> "Museums and Art Galleries", "Park & Recreation Service (parks, golf courses, YMCA, YWCA)" => "Park & Recreation Service (parks, golf courses, YMCA, YWCA)", "Photography (stand-alone)"	=>	"Photography (stand-alone)", "Political Organizations"	=>	"Political Organizations", "Residential Care"	=>	"Residential Care", "State and Federal Government" => "State and Federal Government", "Theatrical Producers and Dance" => "Theatrical Producers and Dance", "Veteran Services" => "Veteran Services", "Wellness & Fitness" => "Wellness & Fitness", "Workforce Development" => "Workforce Development", "Other" => "Other"),
    ))->add('legalName')->add('approve');
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
