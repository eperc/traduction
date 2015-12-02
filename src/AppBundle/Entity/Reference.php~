<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reference
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ReferenceRepository")
 */
class Reference
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
     * @ORM\ManyToOne(targetEntity="Language", inversedBy="references")
     */
    private $language;       

    /**
     * @ORM\ManyToOne(targetEntity="Level", inversedBy="references")
     */
    private $level;

    /**
     * @ORM\ManyToMany(targetEntity="Certificate", mappedBy="references")
     */
    private $certificates;    

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
     * Constructor
     */
    public function __construct()
    {
        $this->certificates = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set language
     *
     * @param \AppBundle\Entity\Language $language
     *
     * @return Reference
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
     * Set level
     *
     * @param \AppBundle\Entity\Level $level
     *
     * @return Reference
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

    /**
     * Add certificate
     *
     * @param \AppBundle\Entity\Certificate $certificate
     *
     * @return Reference
     */
    public function addCertificate(\AppBundle\Entity\Certificate $certificate)
    {
        $this->certificates[] = $certificate;

        return $this;
    }

    /**
     * Remove certificate
     *
     * @param \AppBundle\Entity\Certificate $certificate
     */
    public function removeCertificate(\AppBundle\Entity\Certificate $certificate)
    {
        $this->certificates->removeElement($certificate);
    }

    /**
     * Get certificates
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCertificates()
    {
        return $this->certificates;
    }
}
