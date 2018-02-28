<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SiteSupervisorFormType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('forProfit')->add('organizationName')->add('businessLicenseNum')->add('stateIssued')->add('directInternshipSupervisor')->add('supervisorsTitle')->add('physicalAddress')->add('availableForSiteVisit')->add('supervisorPhone')->add('supervisorEmail')->add('internshipProjectedStartDate')->add('internshipProjectedEndDate')->add('totalWeeks')->add('estimatedHours')->add('paid')->add('salary')->add('salaryOrStipend')->add('stipend')->add('task')->add('projects')->add('outcomes')->add('additionalComments')->add('student_form_one');
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
