<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Translation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\TranslationRepository")
 */
class Translation
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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="translations")
     */
    private $translator;

    /**
     * @ORM\OneToOne(targetEntity="Version")
     */
    private $version;

    /**
     * @ORM\OneToOne(targetEntity="Improvement", mappedBy="translation")
     */
    private $improvement;

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
     * @return Translation
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
     * @return Translation
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
     * @return Translation
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
     * Set improvement
     *
     * @param \AppBundle\Entity\Improvement $improvement
     *
     * @return Translation
     */
    public function setImprovement(\AppBundle\Entity\Improvement $improvement = null)
    {
        $this->improvement = $improvement;

        return $this;
    }

    /**
     * Get improvement
     *
     * @return \AppBundle\Entity\Improvement
     */
    public function getImprovement()
    {
        return $this->improvement;
    }
}
