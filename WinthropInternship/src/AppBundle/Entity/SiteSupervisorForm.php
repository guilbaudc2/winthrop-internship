<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SiteSupervisorForm
 *
 * @ORM\Table(name="site_supervisor_form")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SiteSupervisorFormRepository")
 */
class SiteSupervisorForm
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
     * One SiteSupervisorForm has One StudentFormOne.
     * @ORM\OneToOne(targetEntity="StudentFormOne", inversedBy="site_supervisor_form")
     * @ORM\JoinColumn(name="student_form_one_id", referencedColumnName="id")
     */
    private $student_form_one;

    /**
     * @var bool
     *
     * @ORM\Column(name="forProfit", type="boolean")
     */
    private $forProfit;

    /**
     * @var string
     *
     * @ORM\Column(name="organizationName", type="string", length=255)
     */
    private $organizationName;

    /**
     * @var string
     *
     * @ORM\Column(name="businessLicenseNum", type="string", length=255)
     */
    private $businessLicenseNum;

    /**
     * @var string
     *
     * @ORM\Column(name="stateIssued", type="string", length=2)
     */
    private $stateIssued;

    /**
     * @var string
     *
     * @ORM\Column(name="directInternshipSupervisor", type="string", length=255)
     */
    private $directInternshipSupervisor;

    /**
     * @var string
     *
     * @ORM\Column(name="supervisorsTitle", type="string", length=255)
     */
    private $supervisorsTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="physicalAddress", type="string", length=255)
     */
    private $physicalAddress;

    /**
     * @var bool
     *
     * @ORM\Column(name="availableForSiteVisit", type="boolean")
     */
    private $availableForSiteVisit;

    /**
     * @var string
     *
     * @ORM\Column(name="supervisorPhone", type="string", length=255)
     */
    private $supervisorPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="supervisorEmail", type="string", length=255)
     */
    private $supervisorEmail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="internshipProjectedStartDate", type="date")
     */
    private $internshipProjectedStartDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="internshipProjectedEndDate", type="date")
     */
    private $internshipProjectedEndDate;

    /**
     * @var int
     *
     * @ORM\Column(name="totalWeeks", type="integer")
     */
    private $totalWeeks;

    /**
     * @var int
     *
     * @ORM\Column(name="estimatedHours", type="integer")
     */
    private $estimatedHours;

    /**
     * @var bool
     *
     * @ORM\Column(name="paid", type="boolean")
     */
    private $paid;

    /**
     * @var string
     *
     * @ORM\Column(name="salary", type="decimal", precision=7, scale=2)
     */
    private $salary;

    /**
     * @var array
     *
     * @ORM\Column(name="salaryOrStipend", type="boolean")
     */
    private $salaryOrStipend;

    /**
     * @var int
     *
     * @ORM\Column(name="stipend", type="integer")
     */
    private $stipend;

    /**
     * @var string
     *
     * @ORM\Column(name="task", type="text")
     */
    private $task;

    /**
     * @var string
     *
     * @ORM\Column(name="projects", type="text")
     */
    private $projects;

    /**
     * @var string
     *
     * @ORM\Column(name="outcomes", type="text")
     */
    private $outcomes;

    /**
     * @var string
     *
     * @ORM\Column(name="additionalComments", type="text", nullable=true)
     */
    private $additionalComments;
    
    /**
     * @var string
     *
     * @ORM\Column(name="digitalSignature", type="string", length=255)
     */
    private $digitalSignature;
    
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="submitDate", type="datetime", nullable=true)
     */
    private $submitDate;
    


    public function __construct($student_form_one) {
        date_default_timezone_set('America/New_York');
        
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
    
    
    // /**
    //  * Set studentFormOne
    //  *
    //  * @param integer $student_form_one
    //  *
    //  * @return SiteSupervisorForm
    //  */
    // public function setStudentFormOne($student_form_one)
    // {
    //     $this->student_form_one = $student_form_one;
    
    //     return $this;
    // }

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
     * Set forProfit
     *
     * @param boolean $forProfit
     *
     * @return SiteSupervisorForm
     */
    public function setForProfit($forProfit)
    {
        $this->forProfit = $forProfit;
    
        return $this;
    }

    /**
     * Get forProfit
     *
     * @return boolean
     */
    public function getForProfit()
    {
        return $this->forProfit;
    }

    /**
     * Set organizationName
     *
     * @param string $organizationName
     *
     * @return SiteSupervisorForm
     */
    public function setOrganizationName($organizationName)
    {
        $this->organizationName = $organizationName;
    
        return $this;
    }

    /**
     * Get organizationName
     *
     * @return string
     */
    public function getOrganizationName()
    {
        return $this->organizationName;
    }

    /**
     * Set businessLicenseNum
     *
     * @param string $businessLicenseNum
     *
     * @return SiteSupervisorForm
     */
    public function setBusinessLicenseNum($businessLicenseNum)
    {
        $this->businessLicenseNum = $businessLicenseNum;
    
        return $this;
    }

    /**
     * Get businessLicenseNum
     *
     * @return string
     */
    public function getBusinessLicenseNum()
    {
        return $this->businessLicenseNum;
    }

    /**
     * Set stateIssued
     *
     * @param string $stateIssued
     *
     * @return SiteSupervisorForm
     */
    public function setStateIssued($stateIssued)
    {
        $this->stateIssued = $stateIssued;
    
        return $this;
    }

    /**
     * Get stateIssued
     *
     * @return string
     */
    public function getStateIssued()
    {
        return $this->stateIssued;
    }

    /**
     * Set directInternshipSupervisor
     *
     * @param string $directInternshipSupervisor
     *
     * @return SiteSupervisorForm
     */
    public function setDirectInternshipSupervisor($directInternshipSupervisor)
    {
        $this->directInternshipSupervisor = $directInternshipSupervisor;
    
        return $this;
    }

    /**
     * Get directInternshipSupervisor
     *
     * @return string
     */
    public function getDirectInternshipSupervisor()
    {
        return $this->directInternshipSupervisor;
    }

    /**
     * Set supervisorsTitle
     *
     * @param string $supervisorsTitle
     *
     * @return SiteSupervisorForm
     */
    public function setSupervisorsTitle($supervisorsTitle)
    {
        $this->supervisorsTitle = $supervisorsTitle;
    
        return $this;
    }

    /**
     * Get supervisorsTitle
     *
     * @return string
     */
    public function getSupervisorsTitle()
    {
        return $this->supervisorsTitle;
    }

    /**
     * Set physicalAddress
     *
     * @param string $physicalAddress
     *
     * @return SiteSupervisorForm
     */
    public function setPhysicalAddress($physicalAddress)
    {
        $this->physicalAddress = $physicalAddress;
    
        return $this;
    }

    /**
     * Get physicalAddress
     *
     * @return string
     */
    public function getPhysicalAddress()
    {
        return $this->physicalAddress;
    }

    /**
     * Set availableForSiteVisit
     *
     * @param boolean $availableForSiteVisit
     *
     * @return SiteSupervisorForm
     */
    public function setAvailableForSiteVisit($availableForSiteVisit)
    {
        $this->availableForSiteVisit = $availableForSiteVisit;
    
        return $this;
    }

    /**
     * Get availableForSiteVisit
     *
     * @return boolean
     */
    public function getAvailableForSiteVisit()
    {
        return $this->availableForSiteVisit;
    }

    /**
     * Set supervisorPhone
     *
     * @param string $supervisorPhone
     *
     * @return SiteSupervisorForm
     */
    public function setSupervisorPhone($supervisorPhone)
    {
        $this->supervisorPhone = $supervisorPhone;
    
        return $this;
    }

    /**
     * Get supervisorPhone
     *
     * @return string
     */
    public function getSupervisorPhone()
    {
        return $this->supervisorPhone;
    }

    /**
     * Set supervisorEmail
     *
     * @param string $supervisorEmail
     *
     * @return SiteSupervisorForm
     */
    public function setSupervisorEmail($supervisorEmail)
    {
        $this->supervisorEmail = $supervisorEmail;
    
        return $this;
    }

    /**
     * Get supervisorEmail
     *
     * @return string
     */
    public function getSupervisorEmail()
    {
        return $this->supervisorEmail;
    }

    /**
     * Set internshipProjectedStartDate
     *
     * @param \DateTime $internshipProjectedStartDate
     *
     * @return SiteSupervisorForm
     */
    public function setInternshipProjectedStartDate($internshipProjectedStartDate)
    {
        $this->internshipProjectedStartDate = $internshipProjectedStartDate;
    
        return $this;
    }

    /**
     * Get internshipProjectedStartDate
     *
     * @return \DateTime
     */
    public function getInternshipProjectedStartDate()
    {
        return $this->internshipProjectedStartDate;
    }

    /**
     * Set internshipProjectedEndDate
     *
     * @param \DateTime $internshipProjectedEndDate
     *
     * @return SiteSupervisorForm
     */
    public function setInternshipProjectedEndDate($internshipProjectedEndDate)
    {
        $this->internshipProjectedEndDate = $internshipProjectedEndDate;
    
        return $this;
    }

    /**
     * Get internshipProjectedEndDate
     *
     * @return \DateTime
     */
    public function getInternshipProjectedEndDate()
    {
        return $this->internshipProjectedEndDate;
    }

    /**
     * Set totalWeeks
     *
     * @param integer $totalWeeks
     *
     * @return SiteSupervisorForm
     */
    public function setTotalWeeks($totalWeeks)
    {
        $this->totalWeeks = $totalWeeks;
    
        return $this;
    }

    /**
     * Get totalWeeks
     *
     * @return integer
     */
    public function getTotalWeeks()
    {
        return $this->totalWeeks;
    }

    /**
     * Set estimatedHours
     *
     * @param integer $estimatedHours
     *
     * @return SiteSupervisorForm
     */
    public function setEstimatedHours($estimatedHours)
    {
        $this->estimatedHours = $estimatedHours;
    
        return $this;
    }

    /**
     * Get estimatedHours
     *
     * @return integer
     */
    public function getEstimatedHours()
    {
        return $this->estimatedHours;
    }

    /**
     * Set paid
     *
     * @param boolean $paid
     *
     * @return SiteSupervisorForm
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;
    
        return $this;
    }

    /**
     * Get paid
     *
     * @return boolean
     */
    public function getPaid()
    {
        return $this->paid;
    }

    /**
     * Set salary
     *
     * @param string $salary
     *
     * @return SiteSupervisorForm
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    
        return $this;
    }

    /**
     * Get salary
     *
     * @return string
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set salaryOrStipend
     *
     * @param array $salaryOrStipend
     *
     * @return SiteSupervisorForm
     */
    public function setSalaryOrStipend($salaryOrStipend)
    {
        $this->salaryOrStipend = $salaryOrStipend;
    
        return $this;
    }

    /**
     * Get salaryOrStipend
     *
     * @return array
     */
    public function getSalaryOrStipend()
    {
        return $this->salaryOrStipend;
    }

    /**
     * Set stipend
     *
     * @param integer $stipend
     *
     * @return SiteSupervisorForm
     */
    public function setStipend($stipend)
    {
        $this->stipend = $stipend;
    
        return $this;
    }

    /**
     * Get stipend
     *
     * @return integer
     */
    public function getStipend()
    {
        return $this->stipend;
    }

    /**
     * Set task
     *
     * @param string $task
     *
     * @return SiteSupervisorForm
     */
    public function setTask($task)
    {
        $this->task = $task;
    
        return $this;
    }

    /**
     * Get task
     *
     * @return string
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * Set projects
     *
     * @param string $projects
     *
     * @return SiteSupervisorForm
     */
    public function setProjects($projects)
    {
        $this->projects = $projects;
    
        return $this;
    }

    /**
     * Get projects
     *
     * @return string
     */
    public function getProjects()
    {
        return $this->projects;
    }

    /**
     * Set outcomes
     *
     * @param string $outcomes
     *
     * @return SiteSupervisorForm
     */
    public function setOutcomes($outcomes)
    {
        $this->outcomes = $outcomes;
    
        return $this;
    }

    /**
     * Get outcomes
     *
     * @return string
     */
    public function getOutcomes()
    {
        return $this->outcomes;
    }

    /**
     * Set additionalComments
     *
     * @param string $additionalComments
     *
     * @return SiteSupervisorForm
     */
    public function setAdditionalComments($additionalComments)
    {
        $this->additionalComments = $additionalComments;
    
        return $this;
    }

    /**
     * Get additionalComments
     *
     * @return string
     */
    public function getAdditionalComments()
    {
        return $this->additionalComments;
    }
    
    /**
     * Set digitalSignature
     *
     * @param string $digitalSignature
     *
     * @return SiteSupervisorForm
     */
    public function setDigitalSignature($digitalSignature)
    {
        $this->digitalSignature = $digitalSignature;
    
        return $this;
    }

    /**
     * Get digitalSignature
     *
     * @return string
     */
    public function getDigitalSignature()
    {
        return $this->digitalSignature;
    }
    
    /**
     * Get submitDate
     *
     * @return \DateTime
     */
    public function getSubmitDate()
    {
        return $this->submitDate->format('Y-m-d H:i:s');
    }
}

