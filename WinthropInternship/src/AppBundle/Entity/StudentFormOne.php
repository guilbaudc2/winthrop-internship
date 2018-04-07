<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use chriskacerguis\Randomstring\Randomstring;

/**
 * StudentFormOne
 *
 * @ORM\Table(name="student_form_one")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StudentFormOneRepository")
 */
class StudentFormOne
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
     * One StudentFormOne has One SiteSupervisorForm.
     * @ORM\OneToOne(targetEntity="SiteSupervisorForm", mappedBy="student_form_one")
     */
    private $site_supervisor_form;
    
    /**
     * One StudentFormOne has One StudentFormTwo.
     * @ORM\OneToOne(targetEntity="StudentFormTwo", mappedBy="student_form_one")
     */
    private $student_form_two;
    
    /**
     * One StudentFormOne has One HRForm.
     * @ORM\OneToOne(targetEntity="HRForm", mappedBy="student_form_one")
     */
    private $hr_form;
    
    /**
     * One StudentFormOne has One Internationl Office Form.
     * @ORM\OneToOne(targetEntity="InternationalOfficeForm", mappedBy="student_form_one")
     */
    private $io_form;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=100)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=100)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="userName", type="string", length=50)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="CWID", type="string", length=9)
     */
    private $cWID;

    /**
     * @var string
     *
     * @ORM\Column(name="emailAddress", type="string", length=150)
     */
    private $emailAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="classEnrolled", type="string", length=10)
     */
    private $classEnrolled;

    /**
     * @var int
     *
     * @ORM\Column(name="numCredits", type="smallint")
     */
    private $numCredits;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneNumber", type="string", length=10)
     */
    private $phoneNumber;

    /**
     * @var bool
     *
     * @ORM\Column(name="legallyAuthorized", type="boolean")
     */
    private $legallyAuthorized;

    /**
     * @var bool
     *
     * @ORM\Column(name="futureWorkAuthorization", type="boolean")
     */
    private $futureWorkAuthorization;

    /**
     * @var string
     *
     * @ORM\Column(name="major", type="string", length=75)
     */
    private $major;

    /**
     * @var string
     *
     * @ORM\Column(name="minor", type="string", length=75, nullable=true)
     */
    private $minor;

    /**
     * @var string
     *
     * @ORM\Column(name="facultyLiaison", type="string", length=150)
     */
    private $facultyLiaison;

    /**
     * @var string
     *
     * @ORM\Column(name="semesterEnrolled", type="string", length=10)
     */
    private $semesterEnrolled;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="yearEnrolled", type="date")
     */
    private $yearEnrolled;

    /**
     * @var string
     *
     * @ORM\Column(name="semesterGrad", type="string", length=10)
     */
    private $semesterGrad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="yearGrad", type="date")
     */
    private $yearGrad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="siteSuperName", type="string", length=150)
     */
    private $siteSuperName;

    /**
     * @var string
     *
     * @ORM\Column(name="siteSuperEmail", type="string", length=150)
     */
    private $siteSuperEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="siteSuperAccessCode", type="string", length=75, unique=true)
     */
    private $siteSuperAccessCode;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="submitDate", type="datetime", nullable=true)
     */
    private $submitDate;
    
    
    public function __construct() {
        
        $random = new \chriskacerguis\Randomstring\Randomstring();
        
        $this->siteSuperAccessCode = $random->generate(15, true);
        
        $this->submitDate = new \DateTime("now");
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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return StudentFormOne
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return StudentFormOne
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set userName
     *
     * @param string $userName
     *
     * @return StudentFormOne
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set cWID
     *
     * @param string $cWID
     *
     * @return StudentFormOne
     */
    public function setCWID($cWID)
    {
        $this->cWID = $cWID;

        return $this;
    }

    /**
     * Get cWID
     *
     * @return string
     */
    public function getCWID()
    {
        return $this->cWID;
    }

    /**
     * Set emailAddress
     *
     * @param string $emailAddress
     *
     * @return StudentFormOne
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Set classEnrolled
     *
     * @param string $classEnrolled
     *
     * @return StudentFormOne
     */
    public function setClassEnrolled($classEnrolled)
    {
        $this->classEnrolled = $classEnrolled;

        return $this;
    }

    /**
     * Get classEnrolled
     *
     * @return string
     */
    public function getClassEnrolled()
    {
        return $this->classEnrolled;
    }

    /**
     * Set numCredits
     *
     * @param integer $numCredits
     *
     * @return StudentFormOne
     */
    public function setNumCredits($numCredits)
    {
        $this->numCredits = $numCredits;

        return $this;
    }

    /**
     * Get numCredits
     *
     * @return int
     */
    public function getNumCredits()
    {
        return $this->numCredits;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return StudentFormOne
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set legallyAuthorized
     *
     * @param boolean $legallyAuthorized
     *
     * @return StudentFormOne
     */
    public function setLegallyAuthorized($legallyAuthorized)
    {
        $this->legallyAuthorized = $legallyAuthorized;

        return $this;
    }

    /**
     * Get legallyAuthorized
     *
     * @return bool
     */
    public function getLegallyAuthorized()
    {
        return $this->legallyAuthorized;
    }

    /**
     * Set futureWorkAuthorization
     *
     * @param boolean $futureWorkAuthorization
     *
     * @return StudentFormOne
     */
    public function setFutureWorkAuthorization($futureWorkAuthorization)
    {
        $this->futureWorkAuthorization = $futureWorkAuthorization;

        return $this;
    }

    /**
     * Get futureWorkAuthorization
     *
     * @return bool
     */
    public function getFutureWorkAuthorization()
    {
        return $this->futureWorkAuthorization;
    }

    /**
     * Set major
     *
     * @param string $major
     *
     * @return StudentFormOne
     */
    public function setMajor($major)
    {
        $this->major = $major;

        return $this;
    }

    /**
     * Get major
     *
     * @return string
     */
    public function getMajor()
    {
        return $this->major;
    }

    /**
     * Set minor
     *
     * @param string $minor
     *
     * @return StudentFormOne
     */
    public function setMinor($minor)
    {
        $this->minor = $minor;

        return $this;
    }

    /**
     * Get minor
     *
     * @return string
     */
    public function getMinor()
    {
        return $this->minor;
    }

    /**
     * Set facultyLiaison
     *
     * @param string $facultyLiaison
     *
     * @return StudentFormOne
     */
    public function setFacultyLiaison($facultyLiaison)
    {
        $this->facultyLiaison = $facultyLiaison;

        return $this;
    }

    /**
     * Get facultyLiaison
     *
     * @return string
     */
    public function getFacultyLiaison()
    {
        return $this->facultyLiaison;
    }

    /**
     * Set semesterEnrolled
     *
     * @param string $semesterEnrolled
     *
     * @return StudentFormOne
     */
    public function setSemesterEnrolled($semesterEnrolled)
    {
        $this->semesterEnrolled = $semesterEnrolled;

        return $this;
    }

    /**
     * Get semesterEnrolled
     *
     * @return string
     */
    public function getSemesterEnrolled()
    {
        return $this->semesterEnrolled;
    }

    /**
     * Set yearEnrolled
     *
     * @param \DateTime $yearEnrolled
     *
     * @return StudentFormOne
     */
    public function setYearEnrolled($yearEnrolled)
    {
        $this->yearEnrolled = $yearEnrolled;

        return $this;
    }

    /**
     * Get yearEnrolled
     *
     * @return \DateTime
     */
    public function getYearEnrolled()
    {
        return $this->yearEnrolled;
    }

    /**
     * Set semesterGrad
     *
     * @param string $semesterGrad
     *
     * @return StudentFormOne
     */
    public function setSemesterGrad($semesterGrad)
    {
        $this->semesterGrad = $semesterGrad;

        return $this;
    }

    /**
     * Get semesterGrad
     *
     * @return string
     */
    public function getSemesterGrad()
    {
        return $this->semesterGrad;
    }

    /**
     * Set yearGrad
     *
     * @param \DateTime $yearGrad
     *
     * @return StudentFormOne
     */
    public function setYearGrad($yearGrad)
    {
        $this->yearGrad = $yearGrad;

        return $this;
    }

    /**
     * Get yearGrad
     *
     * @return \DateTime
     */
    public function getYearGrad()
    {
        return $this->yearGrad;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return StudentFormOne
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set siteSuperName
     *
     * @param string $siteSuperName
     *
     * @return StudentFormOne
     */
    public function setSiteSuperName($siteSuperName)
    {
        $this->siteSuperName = $siteSuperName;

        return $this;
    }

    /**
     * Get siteSuperName
     *
     * @return string
     */
    public function getSiteSuperName()
    {
        return $this->siteSuperName;
    }

    /**
     * Set siteSuperEmail
     *
     * @param string $siteSuperEmail
     *
     * @return StudentFormOne
     */
    public function setSiteSuperEmail($siteSuperEmail)
    {
        $this->siteSuperEmail = $siteSuperEmail;

        return $this;
    }

    /**
     * Get siteSuperEmail
     *
     * @return string
     */
    public function getSiteSuperEmail()
    {
        return $this->siteSuperEmail;
    }

    // public function setSiteSuperAccessCode($siteSuperAccessCode)
    // {
    //     $this->siteSuperAccessCode = $siteSuperAccessCode;

    //     return $this;
    // }

    /**
     * Get siteSuperAccessCode
     *
     * @return string
     */
    public function getSiteSuperAccessCode()
    {
        return $this->siteSuperAccessCode;
    }
    
    public function __toString() {
        return "{$this->id}";
    }
}

