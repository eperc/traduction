<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demand
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\DemandRepository")
 */
class Demand
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
     * @ORM\OneToMany(targetEntity="Document", mappedBy="demand")
     */
    private $documents;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="demands")
     */
    private $client;          

    /**
     * @ORM\ManyToOne(targetEntity="Specialty", inversedBy="demands")
     */
    private $specialty;       

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=100)
     */
    private $state;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_improved", type="boolean")
     */
    private $isImproved;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finished_at", type="datetime")
     */
    private $finishedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expired_at", type="datetime")
     */
    private $expiredAt;

    public function __construct()
    {
        $this->documents= new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Demand
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
     * Set state
     *
     * @param string $state
     *
     * @return Demand
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Demand
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set finishedAt
     *
     * @param \DateTime $finishedAt
     *
     * @return Demand
     */
    public function setFinishedAt($finishedAt)
    {
        $this->finishedAt = $finishedAt;

        return $this;
    }

    /**
     * Get finishedAt
     *
     * @return \DateTime
     */
    public function getFinishedAt()
    {
        return $this->finishedAt;
    }

    /**
     * Set expiredAt
     *
     * @param \DateTime $expiredAt
     *
     * @return Demand
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
     * Set isRead
     *
     * @param bool $isImproved
     *
     * @return Demand
     */
    public function setIsImproved(boolean $isImproved)
    {
        $this->isImproved = $isImproved;

        return $this;
    }

    /**
     * Get isImproved
     *
     * @return bool
     */
    public function getIsImproved()
    {
        return $this->isImproved;
    }
 
    /**
     * Set client
     *
     * @param \AppBundle\Entity\Client $client
     *
     * @return Demand
     */
    public function setClient(\AppBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \AppBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set specialty
     *
     * @param \AppBundle\Entity\Specialty $specialty
     *
     * @return Demand
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

    /**
     * Add document
     *
     * @param \AppBundle\Entity\Document $document
     *
     * @return Demand
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
