<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Translator
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\TranslatorRepository")
 */
class Translator
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
    * @ORM\OneToMany(targetEntity="Translation", mappedBy="translator")
    */
    private $translations;

    /**
    * @ORM\OneToMany(targetEntity="Improvement", mappedBy="translator")
    */
    private $improvements;

    /**
    * @ORM\OneToMany(targetEntity="CertificateFile", mappedBy="translator")
    */
    private $certificateFiles;    

    /**
     * @ORM\ManyToMany(targetEntity="Specialty", inversedBy="translators")
     * @ORM\JoinTable(name="translators_specialties")
     */
    private $specialties;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;

    /**
     * @var decimal
     *
     * @ORM\Column(name="penalty", type="decimal", scale=2)
     */
    private $penalty;    

    /**
    * @ORM\OneToOne(targetEntity="User", mappedBy="translator")
    **/
    private $user;

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
     * Set status
     *
     * @param integer $status
     *
     * @return Translator
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->translations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->improvements = new \Doctrine\Common\Collections\ArrayCollection();
        $this->certificateFiles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->specialties = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set penalty
     *
     * @param string $penalty
     *
     * @return Translator
     */
    public function setPenalty($penalty)
    {
        $this->penalty = $penalty;

        return $this;
    }

    /**
     * Get penalty
     *
     * @return string
     */
    public function getPenalty()
    {
        return $this->penalty;
    }

    /**
     * Add translation
     *
     * @param \AppBundle\Entity\Translation $translation
     *
     * @return Translator
     */
    public function addTranslation(\AppBundle\Entity\Translation $translation)
    {
        $this->translations[] = $translation;

        return $this;
    }

    /**
     * Remove translation
     *
     * @param \AppBundle\Entity\Translation $translation
     */
    public function removeTranslation(\AppBundle\Entity\Translation $translation)
    {
        $this->translations->removeElement($translation);
    }

    /**
     * Get translations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * Add improvement
     *
     * @param \AppBundle\Entity\Improvement $improvement
     *
     * @return Translator
     */
    public function addImprovement(\AppBundle\Entity\Improvement $improvement)
    {
        $this->improvements[] = $improvement;

        return $this;
    }

    /**
     * Remove improvement
     *
     * @param \AppBundle\Entity\Improvement $improvement
     */
    public function removeImprovement(\AppBundle\Entity\Improvement $improvement)
    {
        $this->improvements->removeElement($improvement);
    }

    /**
     * Get improvements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImprovements()
    {
        return $this->improvements;
    }

    /**
     * Add certificateFile
     *
     * @param \AppBundle\Entity\CertificateFile $certificateFile
     *
     * @return Translator
     */
    public function addCertificateFile(\AppBundle\Entity\CertificateFile $certificateFile)
    {
        $this->certificateFiles[] = $certificateFile;

        return $this;
    }

    /**
     * Remove certificateFile
     *
     * @param \AppBundle\Entity\CertificateFile $certificateFile
     */
    public function removeCertificateFile(\AppBundle\Entity\CertificateFile $certificateFile)
    {
        $this->certificateFiles->removeElement($certificateFile);
    }

    /**
     * Get certificateFiles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCertificateFiles()
    {
        return $this->certificateFiles;
    }

    /**
     * Add specialty
     *
     * @param \AppBundle\Entity\Specialty $specialty
     *
     * @return Translator
     */
    public function addSpecialty(\AppBundle\Entity\Specialty $specialty)
    {
        $this->specialties[] = $specialty;

        return $this;
    }

    /**
     * Remove specialty
     *
     * @param \AppBundle\Entity\Specialty $specialty
     */
    public function removeSpecialty(\AppBundle\Entity\Specialty $specialty)
    {
        $this->specialties->removeElement($specialty);
    }

    /**
     * Get specialties
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSpecialties()
    {
        return $this->specialties;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Translator
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
