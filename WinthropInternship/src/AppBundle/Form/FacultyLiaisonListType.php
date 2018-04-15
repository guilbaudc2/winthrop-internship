<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class FacultyLiaisonListType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')->add('username')->add('faculty_user', EntityType::class, array('class' => 'AppBundle:User',
        'query_builder' => function (EntityRepository $er) {
        return $er->createQueryBuilder('u')
            ->where('u.roles = \'a:1:{i:0;s:13:"ROLE_FL_ADMIN";}\'')
            ->orderBy('u.firstName', 'ASC');
    },
    'choice_label' => function ($fullName) {
        return $fullName->getFullName();
    }))->add('department', ChoiceType::class, array(
            'choices' => array("Accounting" => "Accounting",  "Athletic Training" => "Athletic Training", "Biology" => "Biology", "Chemistry" => "Chemistry", "Computer Science" => "Computer Science", "Counseling" => "Counseling", "Design" => "Design", "Educational Leadership" => "Educational Leadership", "English" =>	"English", "Environmental Science" => "Environmental Science", "Exercise Science" => "Exercise Science", "Fine Arts" =>	"Fine Arts", "General Internships"	=>	"General Internships", "Healthcare Management"	=>	"Healthcare Management", "Human Development and Family Studies"	=> "Human Development and Family Studies", "Human Nutrition" => "Human Nutrition", "Interdisciplinary Studies" => "Interdisciplinary Studies", "Marketing and Management" => "Marketing and Management", "Mass Communication" =>	"Mass Communication", "Modern Language"	=> "Modern Language", "Political Science"	=> "Political Science", "Psychology" => "Psychology", "Social Work" => "Social Work", "Sociology" => "Sociology", "Sports Management"	=> "Sports Management", "Teacher Education" => "Teacher Education", "Theatre"	=>	"Theatre", "Visual Arts"	=>	"Visual Arts"),
    ))->add('college', ChoiceType::class, array(
            'choices' => array("College of Arts and Sciences" => "College of Arts and Sciences", "College of Business Administration" => "College of Business Administration", "College of Education" => "College of Education", "College Visual and Performing Arts" => "College Visual and Performing Arts"),
    ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\FacultyLiaisonList'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_facultyliaisonlist';
    }


}
