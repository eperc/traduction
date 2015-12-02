<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Improvement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ImprovementRepository")
 */
class Improvement
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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="improvements")
     */
    private $translator;

    /**
     * @ORM\OneToOne(targetEntity="Version")
     */
    private $version;

    /**
     * @ORM\OneToOne(targetEntity="Translation", inversedBy="improvement")
     */
    private $translation;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=100)
     */
    private $state;

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
     * @return Improvement
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
     * Set translator
     *
     * @param \AppBundle\Entity\User $translator
     *
     * @return Improvement
     */
    public function setTranslator(\AppBundle\Entity\User $translator = null)
    {
        $this->translator = $translator;

        return $this;
    }

    /**
     * Get translator
     *
     * @return \AppBundle\Entity\User
     */
    public function getTranslator()
    {
        return $this->translator;
    }

    /**
     * Set version
     *
     * @param \AppBundle\Entity\Version $version
     *
     * @return Improvement
     */
    public function setVersion(\AppBundle\Entity\Version $version = null)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return \AppBundle\Entity\Version
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set translation
     *
     * @param \AppBundle\Entity\Translation $translation
     *
     * @return Improvement
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
}
