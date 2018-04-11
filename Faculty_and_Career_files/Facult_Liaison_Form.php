<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facult_Liaison_Form
 *
 * @ORM\Table(name="facult__liaison__form")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Facult_Liaison_FormRepository")
 */
class Facult_Liaison_Form
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
     * @ORM\Column(name="legal_name", type="string", length=255)
     */
    private $legalName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="approve_date", type="datetime")
     */
    private $approveDate;

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
     * @return Facult_Liaison_Form
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
     * @return Facult_Liaison_Form
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
     * Set approveDate
     *
     * @param \DateTime $approveDate
     *
     * @return Facult_Liaison_Form
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

    /**
     * Set approve
     *
     * @param boolean $approve
     *
     * @return Facult_Liaison_Form
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

