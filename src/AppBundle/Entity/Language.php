<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Language
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\LanguageRepository")
 */
class Language
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
    * @ORM\OneToMany(targetEntity="Demand", mappedBy="translatedFrom")
    */
    private $translatingFrom;  

    /**
    * @ORM\OneToMany(targetEntity="Connection", mappedBy="translatedTo")
    */
    private $connections; 
    /**
    * @ORM\OneToMany(targetEntity="Reference", mappedBy="language")
    */
    private $references;     
    

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
     * @return Language
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
        $this->translatingFrom = new \Doctrine\Common\Collections\ArrayCollection();
        $this->connections = new \Doctrine\Common\Collections\ArrayCollection();
        $this->references = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add translatingFrom
     *
     * @param \AppBundle\Entity\Demand $translatingFrom
     *
     * @return Language
     */
    public function addTranslatingFrom(\AppBundle\Entity\Demand $translatingFrom)
    {
        $this->translatingFrom[] = $translatingFrom;

        return $this;
    }

    /**
     * Remove translatingFrom
     *
     * @param \AppBundle\Entity\Demand $translatingFrom
     */
    public function removeTranslatingFrom(\AppBundle\Entity\Demand $translatingFrom)
    {
        $this->translatingFrom->removeElement($translatingFrom);
    }

    /**
     * Get translatingFrom
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTranslatingFrom()
    {
        return $this->translatingFrom;
    }

    /**
     * Add connection
     *
     * @param \AppBundle\Entity\Connection $connection
     *
     * @return Language
     */
    public function addConnection(\AppBundle\Entity\Connection $connection)
    {
        $this->connections[] = $connection;

        return $this;
    }

    /**
     * Remove connection
     *
     * @param \AppBundle\Entity\Connection $connection
     */
    public function removeConnection(\AppBundle\Entity\Connection $connection)
    {
        $this->connections->removeElement($connection);
    }

    /**
     * Get connections
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConnections()
    {
        return $this->connections;
    }

    /**
     * Add reference
     *
     * @param \AppBundle\Entity\Reference $reference
     *
     * @return Language
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
}
