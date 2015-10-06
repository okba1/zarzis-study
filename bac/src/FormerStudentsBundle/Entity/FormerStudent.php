<?php

namespace FormerStudentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * FormerStudent
 *
 *@ORM\Table
 *@ORM\Entity(repositoryClass="FormerStudentsBundle\Entity\FormerStudentRepository")
 */
class FormerStudent extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255)
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="civility", type="string", length=255)
     */
    private $civility;

    /**
     * @var string
     *
     * @ORM\Column(name="studySector", type="string", length=255)
     */
    private $studySector;


    /**
     * @var int
     *
     * @ORM\Column(name="graduationYear", type="integer")
     */
    private $graduationYear;

    /**
     *@ORM\OneToOne(targetEntity = "FormerStudentsBundle\Entity\University", cascade={"persist"})
     */
    private $university;



    public function __construct()
    {
        $this->university = new University();
        parent::__construct();
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

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return FormerStudent
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
     * @return FormerStudent
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

    public function getCivility()
    {
        return $this->civility;
    }

    public function setCivility($civility)
    {
        $this->civility = $civility;
        return $this;
    }

    public function getStudySector(){
        return $this->studySector;
    }

    public function setStudySector($studySector){
        $this->studySector = $studySector;
        return $this;
    }

    /**
     * Set graduationYear
     *
     * @param string $graduationYear
     * @return FormerStudent
     */
    public function setGraduationYear($graduationYear)
    {
        $this->graduationYear = $graduationYear;

        return $this;
    }

    /**
     * Get graduationYear
     *
     * @return string 
     */
    public function getGraduationYear()
    {
        return $this->graduationYear;
    }

    /**
     * Add university
     *
     * @param string $university
     * @return FormerStudent
     */
    public function setUniversity(University $university)
    {
        $this->university = $university;
    }


     /* Get universities
     *
     * @return string 
     */
    public function getUniversity()
    {
        return $this->university;
    }
}
