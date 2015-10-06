<?php

namespace FormerStudentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FormerStudentsBundle\Entity\Chapitre;

/**
 * SousChapitre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FormerStudentsBundle\Entity\SousChapitreRepository")
 */
class SousChapitre
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
     * @ORM\ManyToOne(targetEntity = "FormerStudentsBundle\Entity\Chapitre", cascade={"persist"})
     */
    private $chapitre;


    public function __construct()
    {
        $this->chapitre = new Chapitre();
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
     * @return SousChapitre
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
     * Set chapitre
     *
     * @param \stdClass $chapitre
     * @return SousChapitre
     */
    public function setChapitre(Chapitre $chapitre)
    {
        $this->chapitre = $chapitre;

        return $this;
    }

    /**
     * Get chapitre
     *
     * @return \stdClass 
     */
    public function getChapitre()
    {
        return $this->chapitre;
    }
}
