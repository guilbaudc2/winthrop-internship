<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HRForm
 *
 * @ORM\Table(name="h_r_form")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HRFormRepository")
 */
class HRForm
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
     * One StudentFormOne has One HRForm.
     * @ORM\OneToOne(targetEntity="StudentFormOne", inversedBy="hr_form")
     * @ORM\JoinColumn(name="student_form_one_id", referencedColumnName="id")
     */
    private $student_form_one;

    /**
     * @var bool
     *
     * @ORM\Column(name="completedTitleIX", type="boolean")
     */
    private $completedTitleIX;

    public function __construct($student_form_one) {
        
        $this->student_form_one = $student_form_one;
        $this->completedTitleIX = true;
    
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set completedTitleIX
     *
     * @param boolean $completedTitleIX
     *
     * @return HRForm
     */
    public function setCompletedTitleIX($completedTitleIX)
    {
        $this->completedTitleIX = $completedTitleIX;

        return $this;
    }

    /**
     * Get completedTitleIX
     *
     * @return bool
     */
    public function getCompletedTitleIX()
    {
        return $this->completedTitleIX;
    }
}

