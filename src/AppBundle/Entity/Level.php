<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Level
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\LevelRepository")
 */
class Level
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
     * @ORM\OneToMany(targetEntity="Deliverable", mappedBy="level")
     */   
    private $deliverables;

    /**
    * @ORM\OneToMany(targetEntity="Reference", mappedBy="level")
    */
    private $references;    

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->deliverables= new \Doctrine\Common\Collections\ArrayCollection();
        $this->references = new \Doctrine\Common\Collections\ArrayCollection();
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
     *
     * @return Level
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
     * Add reference
     *
     * @param \AppBundle\Entity\Reference $reference
     *
     * @return Level
     */
    public function addReference(\AppBundle\Entity\Reference $reference)
    {
        $this->references[] = $reference;

        return $this;
    }

    /**
     * Remove reference
     *
     * @param \AppBundle\Entity\Reference $reference
     */
    public function removeReference(\AppBundle\Entity\Reference $reference)
    {
        $this->references->removeElement($reference);
    }

    /**
     * Get references
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * Add deliverable
     *
     * @param \AppBundle\Entity\Deliverable $deliverable
     *
     * @return Level
     */
    public function addDeliverable(\AppBundle\Entity\Deliverable $deliverable)
    {
        $this->deliverables[] = $deliverable;

        return $this;
    }

    /**
     * Remove deliverable
     *
     * @param \AppBundle\Entity\Deliverable $deliverable
     */
    public function removeDeliverable(\AppBundle\Entity\Deliverable $deliverable)
    {
        $this->deliverables->removeElement($deliverable);
    }

    /**
     * Get deliverables
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDeliverables()
    {
        return $this->deliverables;
    }
}
