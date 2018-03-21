<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InternationalOfficeForm
 *
 * @ORM\Table(name="international_office_form")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InternationalOfficeFormRepository")
 */
class InternationalOfficeForm
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
     * One StudentFormOne has One International Office Form.
     * @ORM\OneToOne(targetEntity="StudentFormOne", inversedBy="student_form_one_form")
     * @ORM\JoinColumn(name="student_form_one_id", referencedColumnName="id")
     */
    private $student_form_one;

    /**
     * @var bool
     *
     * @ORM\Column(name="approve", type="boolean")
     */
    private $approve;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="approveDate", type="datetime", nullable=true)
     */
    private $approveDate;

    /**
     * @var string
     *
     * @ORM\Column(name="digitalSignature", type="string", length=255)
     */
    private $digitalSignature;


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
     * Set approve
     *
     * @param boolean $approve
     *
     * @return InternationalOfficeForm
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
     * @return InternationalOfficeForm
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
     * Set digitalSignature
     *
     * @param string $digitalSignature
     *
     * @return InternationalOfficeForm
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
}

