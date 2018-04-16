<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StudentFormTwo
 *
 * @ORM\Table(name="student_form_two")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StudentFormTwoRepository")
 */
class StudentFormTwo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * One StudentFormTwo has One StudentFormOne.
     * @ORM\OneToOne(targetEntity="StudentFormOne", inversedBy="student_form_two")
     * @ORM\JoinColumn(name="student_form_one_id", referencedColumnName="id")
     */
    private $student_form_one;

    /**
     * @var string
     *
     * @ORM\Column(name="educationalExperience", type="text")
     */
    private $educationalExperience;

    /**
     * @var string
     *
     * @ORM\Column(name="goals", type="text")
     */
    private $goals;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="submitDate", type="datetime", options={"default": "CURRENT_TIMESTAMP"}, nullable=true)
     */
    private $submitDate;


    public function __construct($student_form_one) {
        
        $this->student_form_one = $student_form_one;    
        $this->submitDate = new \DateTime("now");
    }



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    

    /**
     * Get studentFormOne
     *
     * @return integer
     */
    public function getStudentFormOne()
    {
        return $this->student_form_one;
    }

    /**
     * Set educationalExperience
     *
     * @param string $educationalExperience
     *
     * @return StudentFormTwo
     */
    public function setEducationalExperience($educationalExperience)
    {
        $this->educationalExperience = $educationalExperience;

        return $this;
    }

    /**
     * Get educationalExperience
     *
     * @return string
     */
    public function getEducationalExperience()
    {
        return $this->educationalExperience;
    }

    /**
     * Set goals
     *
     * @param string $goals
     *
     * @return StudentFormTwo
     */
    public function setGoals($goals)
    {
        $this->goals = $goals;

        return $this;
    }

    /**
     * Get goals
     *
     * @return string
     */
    public function getGoals()
    {
        return $this->goals;
    }
    
    /**
     * Get submitDate
     *
     * @return \DateTime
     */
    public function getSubmitDate()
    {
        return $this->submitDate;
    }
}

