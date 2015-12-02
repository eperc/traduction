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
    * @ORM\OneToMany(targetEntity="Document", mappedBy="specialty")
    */
    private $documents;    

    /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="specialties")
     */
    private $translators;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    public function __construct()
    {
        $this->documents= new \Doctrine\Common\Collections\ArrayCollection();
        $this->translators= new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Add document
     *
     * @param \AppBundle\Entity\Document $document
     *
     * @return Specialty
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
}
