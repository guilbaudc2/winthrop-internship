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
     * @var string
     *
     * @ORM\Column(name="textbox1", type="blob")
     */
    private $textbox1;


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
     * Set textbox1
     *
     * @param string $textbox1
     *
     * @return StudentFormTwo
     */
    public function setTextbox1($textbox1)
    {
        $this->textbox1 = $textbox1;

        return $this;
    }

    /**
     * Get textbox1
     *
     * @return string
     */
    public function getTextbox1()
    {
        return $this->textbox1;
    }
}

