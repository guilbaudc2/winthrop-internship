<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClassList
 *
 * @ORM\Table(name="class_list")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClassListRepository")
 */
class ClassList
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
     * @ORM\Column(name="coursePrefixNumber", type="string", length=7, unique=true)
     */
    private $coursePrefixNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="professor", type="string", length=255)
     */
    private $professor;


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
     * Set coursePrefixNumber
     *
     * @param string $coursePrefixNumber
     *
     * @return ClassList
     */
    public function setCoursePrefixNumber($coursePrefixNumber)
    {
        $this->coursePrefixNumber = $coursePrefixNumber;

        return $this;
    }

    /**
     * Get coursePrefixNumber
     *
     * @return string
     */
    public function getCoursePrefixNumber()
    {
        return $this->coursePrefixNumber;
    }

    /**
     * Set professor
     *
     * @param string $professor
     *
     * @return ClassList
     */
    public function setProfessor($professor)
    {
        $this->professor = $professor;

        return $this;
    }

    /**
     * Get professor
     *
     * @return string
     */
    public function getProfessor()
    {
        return $this->professor;
    }
    
    public function __toString() {
        return "{$this->coursePrefixNumber}";
    }
}

