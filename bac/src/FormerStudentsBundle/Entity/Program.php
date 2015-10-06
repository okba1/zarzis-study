<?php

namespace FormerStudentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FormerStudentsBundle\Entity\Partie;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Program
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FormerStudentsBundle\Entity\ProgramRepository")
 */
class Program
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
     * @ORM\Column(name="annee", type="string", length=255)
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="section", type="string", length=255)
     */
    private $section;

    /**
     * @var string
     *
     * @ORM\Column(name="matiere", type="string", length=255)
     */
    private $matiere;

    /**
    * @ORM\OneToMany(targetEntity = "FormerStudentsBundle\Entity\Partie", mappedBy="program", cascade={"persist"})
    *  
    */
    private $parties;

    public function __construct()
    {
        $this->parties = new ArrayCollection();
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
     * Set annee
     *
     * @param string $annee
     * @return Program
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return string 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set section
     *
     * @param string $section
     * @return Program
     */
    public function setSection($section)
    {
        $this->section = $section;

        return $this;
    }

    /**
     * Get section
     *
     * @return string 
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Set matiere
     *
     * @param string $matiere
     * @return Program
     */
    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;

        return $this;
    }

    /**
     * Get matiere
     *
     * @return string 
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    public function addPartie(Partie $partie)
    {
        $this->parties->add($partie);

        return $this;
    }

    /**
     * Get matiere
     *
     * @return string 
     */
    public function getParties()
    {
        return $this->parties;
    }




}
