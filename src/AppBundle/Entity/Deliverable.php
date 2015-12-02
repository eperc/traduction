<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deliverable
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\DeliverableRepository")
 */
class Deliverable
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
     * @ORM\ManyToOne(targetEntity="Document", inversedBy="deliverables")
     */
    private $document;

    /**
     * @ORM\ManyToOne(targetEntity="Language", inversedBy="deliverables")
     */
    private $langue;

    /**
     * @ORM\ManyToOne(targetEntity="Level", inversedBy="deliverables")
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=100)
     */
    private $state;

    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="integer")
     */
    private $price;


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
     * Set state
     *
     * @param string $state
     *
     * @return Deliverable
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
     * Set price
     *
     * @param integer $price
     *
     * @return Deliverable
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set document
     *
     * @param \AppBundle\Entity\Document $document
     *
     * @return Deliverable
     */
    public function setDocument(\AppBundle\Entity\Document $document = null)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document
     *
     * @return \AppBundle\Entity\Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set langue
     *
     * @param \AppBundle\Entity\Language $langue
     *
     * @return Deliverable
     */
    public function setLangue(\AppBundle\Entity\Language $langue = null)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue
     *
     * @return \AppBundle\Entity\Language
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * Set level
     *
     * @param \AppBundle\Entity\Level $level
     *
     * @return Deliverable
     */
    public function setLevel(\AppBundle\Entity\Level $level = null)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return \AppBundle\Entity\Level
     */
    public function getLevel()
    {
        return $this->level;
    }
}
