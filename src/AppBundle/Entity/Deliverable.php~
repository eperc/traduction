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
}

