<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Doctrine\ORM\EntityRepository;

class StudentFormOneType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName', TextType::class, array(
            'label' => 'First Name',
        ))->add('lastName', TextType::class, array(
            'label' => 'Last Name',
        ))->add('userName', TextType::class, array(
            'label' => 'Winthrop Username',
        ))->add('cWID', TextType::class, array(
            'label' => 'CWID/Winthrop ID Number/W-Number (Input "W")',
            'attr' => array('maxlength' => 9),
        ))->add('emailAddress', EmailType::class, array(
            'label' => 'Winthrop Email Address',
        ))->add('classEnrolled', EntityType::class, array('class' => 'AppBundle:ClassList',
        'query_builder' => function (EntityRepository $er) {
        return $er->createQueryBuilder('cl')
            ->orderBy('cl.coursePrefixNumber', 'ASC');
    },'label' => 'Select Internship Course',
))->add('numCredits', NumberType::class, array(
            'label' => 'Number of Credits for Internship Course',
        ))->add('phoneNumber', TextType::class, array(
            'label' => 'Phone Number (Digits Only, Include Area Code)',
            'attr' => array('maxlength' => 10),
        ))->add('workAuthorization', ChoiceType::class, array(
    'choices'  => array(
        'US Citizen' => true,
        'Permanent Resident' => true,        
        'H-1 Visa' => false,
        'Restricted' => false,
        'None' => false),        
    'label' => 'Work Authorization',
))->add('major')->add('minor')->add('facultyLiaison', EntityType::class, array('class' => 'AppBundle:FacultyLiaisonList',
        'query_builder' => function (EntityRepository $er) {
        return $er->createQueryBuilder('fll')
            ->orderBy('fll.name', 'ASC');
    }, 'label' => 'Select Faculty Liaison of Internship Course',
))->add('semesterEnrolled', ChoiceType::class, array(
    'choices'  => array(
        'Fall' => 'Fall',
        'Spring' => 'Spring',        
        'Summer' => 'Summer',    
    ),
    'label' => 'Semester Enrolled in Internship Course',
))->add('yearEnrolled', DateType::class, array('widget' => 'single_text',
'label' => 'Year Enrolled (Select First Day of Classes for Semester Enrolled in Internship)'))->add('semesterGrad', ChoiceType::class, array(
    'choices'  => array(
        'Fall' => 'Fall',
        'Spring' => 'Spring',        
        'Summer' => 'Summer',    
    ),
    'label' => 'Semester Graduating',
))->add('yearGrad', DateType::class, array('widget' => 'single_text',
'label' => 'Date of Graduation (If unknown, use last day of month of graduation semester - Ex: 05/31/2018 for SPR2018 Graduates)'))->add('siteSuperName', TextType::class, array(
            'label' => 'Internship Site Supervisor Name',
        ))->add('siteSuperEmail', EmailType::class, array(
            'label' => 'Internship Site Supervisor Email Address',
        ));
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

// ->add('isAttending', ChoiceType::class, array(
//     'choices'  => array(
//         'Maybe' => null,
//         'Yes' => true,
//         'No' => false,
//     ),
// ));
}
