<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacultyLiaisonList
 *
 * @ORM\Table(name="faculty_liaison_list")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FacultyLiaisonListRepository")
 */
class FacultyLiaisonList
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
     * One FacultyLiaisonList has One Fos_User.
     * @ORM\OneToOne(targetEntity="User", inversedBy="facultyListObject")
     * @ORM\JoinColumn(name="fos_user_id", referencedColumnName="id")
     */
    private $faculty_user;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, unique=true)
     */
    private $username;
    
    /**
     * @var string
     *
     * @ORM\Column(name="department", type="string", length=255)
     */
    private $department;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="college", type="string", length=255)
     */
    private $college;


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
     * Set fosUser
     *
     * @param integer $faculty_user
     *
     * @return fosUser
     */
    public function setFacultyUser($faculty_user)
    {
        $this->faculty_user = $faculty_user;
        return $this;
    }

    /**
     * Get studentFormOne
     *
     * @return integer
     */
    public function getFacultyUser()
    {
        return $this->faculty_user;
    }
    

    /**
     * Set name
     *
     * @param string $name
     *
     * @return FacultyLiaisonList
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return FacultyLiaisonList
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
    
    /**
     * Set department
     *
     * @param string $department
     *
     * @return FacultyLiaisonList
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }    
    

    /**
     * Set college
     *
     * @param string $college
     *
     * @return FacultyLiaisonList
     */
    public function setCollege($college)
    {
        $this->college = $college;

        return $this;
    }

    /**
     * Get college
     *
     * @return string
     */
    public function getCollege()
    {
        return $this->college;
    }

    public function __toString() {
        return $this->name;
    }

}

