<?php

namespace FormerStudentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FormerStudentsBundle\Entity\Program;
use FormerStudentsBundle\Entity\Chapitre;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Partie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FormerStudentsBundle\Entity\PartieRepository")
 */
class Partie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * 
     *
     * @ORM\ManyToOne(targetEntity = "FormerStudentsBundle\Entity\Program", inversedBy="parties", cascade={"persist"})
     */
    private $program;

    /**
    * @ORM\OneToMany(targetEntity = "FormerStudentsBundle\Entity\Chapitre", mappedBy = "partie", cascade = {"persist"})
    */
    private $chapitres;

    public function __construct()
    {
        $this->program = new Program();
        $this->chapitres = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Partie
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
     * Set program
     *
     * @param \stdClass $program
     * @return Partie
     */
    public function setProgram(Program $program)
    {
        $this->program = $program;

        return $this;
    }

    /**
     * Get program
     *
     * @return \stdClass 
     */
    public function getProgram()
    {
        return $this->program;
    }

    public function addChapitre(Chapitre $chapitre){
        $this->chapitres->add($chapitre);
        return $this;
    }

    public function getChapitres(){
        return $this->chapitres;
    }
}
