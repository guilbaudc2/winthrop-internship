<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CareerConsultantForm
 *
 * @ORM\Table(name="career_consultant_form")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CareerConsultantFormRepository")
 */
class CareerConsultantForm
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
     * One StudentFormOne has One CareerConsultantForm.
     * @ORM\OneToOne(targetEntity="StudentFormOne", inversedBy="cc_form")
     * @ORM\JoinColumn(name="student_form_one_id", referencedColumnName="id")
     */
    private $student_form_one;
    
    /**
     * @var string
     *
     * @ORM\Column(name="legalName", type="string", length=255)
     */
    private $legalName;

    /**
     * @var bool
     *
     * @ORM\Column(name="approve", type="boolean")
     */
    private $approve;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="approveDate", type="datetime")
     */
    private $approveDate;

    public function __construct($student_form_one) {
        date_default_timezone_set('America/New_York');
        
        $this->student_form_one = $student_form_one;

    
        $this->approveDate = new \DateTime("now");
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
     * Get studentFormOne
     *
     * @return integer
     */
    public function getStudentFormOne()
    {
        return $this->student_form_one;
    }


    /**
     * Set legalName
     *
     * @param string $legalName
     *
     * @return CareerConsultantForm
     */
    public function setLegalName($legalName)
    {
        $this->legalName = $legalName;

        return $this;
    }

    /**
     * Get legalName
     *
     * @return string
     */
    public function getLegalName()
    {
        return $this->legalName;
    }

    /**
     * Set approve
     *
     * @param boolean $approve
     *
     * @return CareerConsultantForm
     */
    public function setApprove($approve)
    {
        $this->approve = $approve;

        return $this;
    }

    /**
     * Get approve
     *
     * @return bool
     */
    public function getApprove()
    {
        return $this->approve;
    }

    /**
     * Set approveDate
     *
     * @param \DateTime $approveDate
     *
     * @return CareerConsultantForm
     */
    public function setApproveDate($approveDate)
    {
        $this->approveDate = $approveDate;

        return $this;
    }

    /**
     * Get approveDate
     *
     * @return \DateTime
     */
    public function getApproveDate()
    {
        return $this->approveDate;
    }
}

