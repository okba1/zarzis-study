<?php

namespace FormerStudentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FormerStudentsBundle\Entity\Partie;

/**
 * Chapitre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FormerStudentsBundle\Entity\ChapitreRepository")
 */
class Chapitre
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
     * *@ORM\ManyToOne(targetEntity = "FormerStudentsBundle\Entity\Partie", inversedBy="chapitres", cascade={"persist"})
     */
    private $partie;

    public function __construct()
    {
        $this->partie = new Partie();
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
     * @return Chapitre
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
     * @return Chapitre
     */
    public function setPartie(Partie $partie)
    {
        $this->partie = $partie;

        return $this;
    }

    /**
     * Get partie
     *
     */
    public function getPartie()
    {
        return $this->partie;
    }
}
