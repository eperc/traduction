<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Connection
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ConnectionRepository")
 */
class Connection
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
     * @ORM\OneToOne(targetEntity="Translation", mappedBy="connection")
     */
    private $translation;

    /**
     * @ORM\ManyToOne(targetEntity="Demand", inversedBy="connections")
     */
    private $demand;

    /**
     * @ORM\ManyToOne(targetEntity="Language", inversedBy="connections")
     * @ORM\JoinColumn(name="language_id", referencedColumnName="id")
     */
    private $translatedTo;


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
     * Set translation
     *
     * @param \AppBundle\Entity\Translation $translation
     *
     * @return Connection
     */
    public function setTranslation(\AppBundle\Entity\Translation $translation = null)
    {
        $this->translation = $translation;

        return $this;
    }

    /**
     * Get translation
     *
     * @return \AppBundle\Entity\Translation
     */
    public function getTranslation()
    {
        return $this->translation;
    }

    /**
     * Set demand
     *
     * @param \AppBundle\Entity\Demand $demand
     *
     * @return Connection
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
     * Set translatedTo
     *
     * @param \AppBundle\Entity\Language $translatedTo
     *
     * @return Connection
     */
    public function setTranslatedTo(\AppBundle\Entity\Language $translatedTo = null)
    {
        $this->translatedTo = $translatedTo;

        return $this;
    }

    /**
     * Get translatedTo
     *
     * @return \AppBundle\Entity\Language
     */
    public function getTranslatedTo()
    {
        return $this->translatedTo;
    }
}
