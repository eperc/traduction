<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\DocumentRepository")
 */
class Document
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
     * @ORM\OneToMany(targetEntity="Deliverable", mappedBy="document")
     */
    private $deliverables;

    /**
     * @ORM\ManyToOne(targetEntity="Demand", inversedBy="documents")
     */
    private $demand;

    /**
     * @ORM\ManyToOne(targetEntity="Language", inversedBy="documents")
     */
    private $language;

    /**
     * @ORM\ManyToOne(targetEntity="Specialty", inversedBy="documents")
     */      
    private $specialty;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expired_at", type="datetime")
     */
    private $expiredAt;

    public function __construct()
    {
        $this->deliverables= new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set content
     *
     * @param string $content
     *
     * @return Document
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set expiredAt
     *
     * @param \DateTime $expiredAt
     *
     * @return Document
     */
    public function setExpiredAt($expiredAt)
    {
        $this->expiredAt = $expiredAt;

        return $this;
    }

    /**
     * Get expiredAt
     *
     * @return \DateTime
     */
    public function getExpiredAt()
    {
        return $this->expiredAt;
    }

    /**
     * Add deliverable
     *
     * @param \AppBundle\Entity\Deliverable $deliverable
     *
     * @return Document
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

    /**
     * Set demand
     *
     * @param \AppBundle\Entity\Demand $demand
     *
     * @return Document
     */
    public function setDemand(\AppBundle\Entity\Demand $demand = null)
    {
        $this->demand = $demand;

        return $this;
    }

    /**
     * Get demand
     *
     * @return \AppBundle\Entity\Demand
     */
    public function getDemand()
    {
        return $this->demand;
    }

    /**
     * Set language
     *
     * @param \AppBundle\Entity\Language $language
     *
     * @return Document
     */
    public function setLanguage(\AppBundle\Entity\Language $language = null)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return \AppBundle\Entity\Language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set specialty
     *
     * @param \AppBundle\Entity\Specialty $specialty
     *
     * @return Document
     */
    public function setSpecialty(\AppBundle\Entity\Specialty $specialty = null)
    {
        $this->specialty = $specialty;

        return $this;
    }

    /**
     * Get specialty
     *
     * @return \AppBundle\Entity\Specialty
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }
}
