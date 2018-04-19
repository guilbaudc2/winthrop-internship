<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class SiteSupervisorFormType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('forProfit')->add('organizationName', TextType::class, array(
            'label' => 'Organization Name',
        ))->add('businessLicenseNum', TextType::class, array(
            'label' => 'Business License Number or FEIN #',
        ))->add('stateIssued')->add('directInternshipSupervisor', TextType::class, array(
            'label' => 'Direct Internship Supervisor\'s Name',
        ))->add('supervisorsTitle', TextType::class, array(
            'label' => 'Supervisor\'s Title',
        ))->add('physicalAddress', TextType::class, array(
            'label' => 'Physical Address',
        ))->add('availableForSiteVisit')->add('supervisorPhone', TextType::class, array(
            'label' => 'Supervisor\'s Phone Number',
        ))->add('supervisorEmail', EmailType::class, array(
            'label' => 'Supervisor\'s Email Addressr',
        ))->add('internshipProjectedStartDate', DateType::class, array('widget' => 'single_text'))->add('internshipProjectedEndDate', DateType::class, array('widget' => 'single_text'))->add('totalWeeks')->add('estimatedHours')->add('paid')->add('salaryOrStipend', ChoiceType::class, array('choices' => array("Salary" => "Salary",  "Stipend" => "Stipend", "Not Applicable" => "Not Applicable"),        
    'label' => 'Select Salary or Stipend (If not paid, Select \'Not Applicable\')',
))->add('salary', NumberType::class, array(
            'scale' => 2,
            'label' => 'Salary Amount',
        ))->add('stipend', NumberType::class, array(
            'scale' => 2,
            'label' => 'Stipend Amount',
        ))->add('task', TextareaType::class, array(
            'label' => 'Intern Tasks/Role:',
        ))->add('projects', TextareaType::class, array(
            'label' => 'Specific Projects Intern will work on/assist with:',
        ))->add('outcomes', TextareaType::class, array(
            'label' => 'Learning Outcomes for Intern:',
        ))->add('additionalComments', TextareaType::class, array(
            'label' => 'Additional Comments regarding Internship:',
            'required' => false
        ))->add('digitalSignature', TextType::class, array(
            'label' => 'Digital Signature',
        ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\SiteSupervisorForm'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_sitesupervisorform';
    }


}
