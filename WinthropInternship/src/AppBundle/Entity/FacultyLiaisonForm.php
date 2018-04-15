<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacultyLiaisonForm
 *
 * @ORM\Table(name="faculty_liaison_form")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FacultyLiaisonFormRepository")
 */
class FacultyLiaisonForm
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
     * One StudentFormOne has One FacultyLiaisonForm.
     * @ORM\OneToOne(targetEntity="StudentFormOne", inversedBy="fl_form")
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
     * @ORM\Column(name="internshipLearningAgreement", type="boolean")
     */
    private $internshipLearningAgreement;

    /**
     * @var bool
     *
     * @ORM\Column(name="midPointEvaluation", type="boolean")
     */
    private $midPointEvaluation;

    /**
     * @var bool
     *
     * @ORM\Column(name="siteVisit", type="boolean")
     */
    private $siteVisit;

    /**
     * @var bool
     *
     * @ORM\Column(name="finalReport", type="boolean")
     */
    private $finalReport;

    /**
     * @var bool
     *
     * @ORM\Column(name="finalEvaluation", type="boolean")
     */
    private $finalEvaluation;
    
    /**
     * @var string
     *
     * @ORM\Column(name="internshipIndustry", type="string", length=255)
     */
    private $internshipIndustry;

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
     * @return FacultyLiaisonForm
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
     * Set internshipLearningAgreement
     *
     * @param boolean $internshipLearningAgreement
     *
     * @return FacultyLiaisonForm
     */
    public function setInternshipLearningAgreement($internshipLearningAgreement)
    {
        $this->internshipLearningAgreement = $internshipLearningAgreement;

        return $this;
    }

    /**
     * Get internshipLearningAgreement
     *
     * @return bool
     */
    public function getInternshipLearningAgreement()
    {
        return $this->internshipLearningAgreement;
    }

    /**
     * Set midPointEvaluation
     *
     * @param boolean $midPointEvaluation
     *
     * @return FacultyLiaisonForm
     */
    public function setMidPointEvaluation($midPointEvaluation)
    {
        $this->midPointEvaluation = $midPointEvaluation;

        return $this;
    }

    /**
     * Get midPointEvaluation
     *
     * @return bool
     */
    public function getMidPointEvaluation()
    {
        return $this->midPointEvaluation;
    }

    /**
     * Set siteVisit
     *
     * @param boolean $siteVisit
     *
     * @return FacultyLiaisonForm
     */
    public function setSiteVisit($siteVisit)
    {
        $this->siteVisit = $siteVisit;

        return $this;
    }

    /**
     * Get siteVisit
     *
     * @return bool
     */
    public function getSiteVisit()
    {
        return $this->siteVisit;
    }

    /**
     * Set finalReport
     *
     * @param boolean $finalReport
     *
     * @return FacultyLiaisonForm
     */
    public function setFinalReport($finalReport)
    {
        $this->finalReport = $finalReport;

        return $this;
    }

    /**
     * Get finalReport
     *
     * @return bool
     */
    public function getFinalReport()
    {
        return $this->finalReport;
    }

    /**
     * Set finalEvaluation
     *
     * @param boolean $finalEvaluation
     *
     * @return FacultyLiaisonForm
     */
    public function setFinalEvaluation($finalEvaluation)
    {
        $this->finalEvaluation = $finalEvaluation;

        return $this;
    }

    /**
     * Get finalEvaluation
     *
     * @return bool
     */
    public function getFinalEvaluation()
    {
        return $this->finalEvaluation;
    }
    
    /**
     * Set internshipIndustry
     *
     * @param string $internshipIndustry
     *
     * @return FacultyLiaisonForm
     */
    public function setInternshipIndustry($internshipIndustry)
    {
        $this->internshipIndustry = $internshipIndustry;

        return $this;
    }
    
    /**
     * Get internshipIndustry
     *
     * @return string
     */
    public function getInternshipIndustry()
    {
        return $this->internshipIndustry;
    }
    

    /**
     * Set approve
     *
     * @param boolean $approve
     *
     * @return FacultyLiaisonForm
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
     * @return FacultyLiaisonForm
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

