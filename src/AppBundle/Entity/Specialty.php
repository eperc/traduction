<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Specialty
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\SpecialtyRepository")
 */
class Specialty
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
    * @ORM\OneToMany(targetEntity="Demand", mappedBy="specialty")
    */
    private $demands;    

    /**
     * @ORM\ManyToMany(targetEntity="Translator", mappedBy="specialties")
     */
    private $translators;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;


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
     *
     * @return Specialty
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
     * Constructor
     */
    public function __construct()
    {
        $this->demands = new \Doctrine\Common\Collections\ArrayCollection();
        $this->translators = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add demand
     *
     * @param \AppBundle\Entity\Demand $demand
     *
     * @return Specialty
     */
    public function addDemand(\AppBundle\Entity\Demand $demand)
    {
        $this->demands[] = $demand;

        return $this;
    }

    /**
     * Remove demand
     *
     * @param \AppBundle\Entity\Demand $demand
     */
    public function removeDemand(\AppBundle\Entity\Demand $demand)
    {
        $this->demands->removeElement($demand);
    }

    /**
     * Get demands
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDemands()
    {
        return $this->demands;
    }

    /**
     * Add translator
     *
     * @param \AppBundle\Entity\Translator $translator
     *
     * @return Specialty
     */
    public function addTranslator(\AppBundle\Entity\Translator $translator)
    {
        $this->translators[] = $translator;

        return $this;
    }

    /**
     * Remove translator
     *
     * @param \AppBundle\Entity\Translator $translator
     */
    public function removeTranslator(\AppBundle\Entity\Translator $translator)
    {
        $this->translators->removeElement($translator);
    }

    /**
     * Get translators
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTranslators()
    {
        return $this->translators;
    }
}
