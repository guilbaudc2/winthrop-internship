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
     * @var int
     *
     * @ORM\Column(name="student_form_one_id", type="integer", nullable=true, unique=true)
     */
    private $studentFormOneId;

    /**
     * @var string
     *
     * @ORM\Column(name="legalName", type="string", length=255)
     */
    private $legalName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateApproved", type="datetime")
     */
    private $dateApproved;

    /**
     * @var bool
     *
     * @ORM\Column(name="approve", type="boolean")
     */
    private $approve;


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
     * Set studentFormOneId
     *
     * @param integer $studentFormOneId
     *
     * @return CareerConsultantForm
     */
    public function setStudentFormOneId($studentFormOneId)
    {
        $this->studentFormOneId = $studentFormOneId;

        return $this;
    }

    /**
     * Get studentFormOneId
     *
     * @return int
     */
    public function getStudentFormOneId()
    {
        return $this->studentFormOneId;
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
     * Set dateApproved
     *
     * @param \DateTime $dateApproved
     *
     * @return CareerConsultantForm
     */
    public function setDateApproved($dateApproved)
    {
        $this->dateApproved = $dateApproved;

        return $this;
    }

    /**
     * Get dateApproved
     *
     * @return \DateTime
     */
    public function getDateApproved()
    {
        return $this->dateApproved;
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
}

