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
     * @ORM\OneToMany(targetEntity="Document", mappedBy="language")
     */
    private $documents;

    /**
     * @ORM\OneToMany(targetEntity="Deliverable", mappedBy="language")
     */   
    private $deliverables;

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
        $this->documents= new \Doctrine\Common\Collections\ArrayCollection();
        $this->deliverables= new \Doctrine\Common\Collections\ArrayCollection();
        $this->connections = new \Doctrine\Common\Collections\ArrayCollection();
        $this->references = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Add document
     *
     * @param \AppBundle\Entity\Document $document
     *
     * @return Language
     */
    public function addDocument(\AppBundle\Entity\Document $document)
    {
        $this->documents[] = $document;

        return $this;
    }

    /**
     * Remove document
     *
     * @param \AppBundle\Entity\Document $document
     */
    public function removeDocument(\AppBundle\Entity\Document $document)
    {
        $this->documents->removeElement($document);
    }

    /**
     * Get documents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Add deliverable
     *
     * @param \AppBundle\Entity\Deliverable $deliverable
     *
     * @return Language
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
