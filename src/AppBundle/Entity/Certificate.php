<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Certificate
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Certificate
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
    * @ORM\OneToMany(targetEntity="CertificateFile", mappedBy="certificate")
    */
    private $certificateFiles; 

    /**
     * @ORM\ManyToMany(targetEntity="Reference", inversedBy="certificates")
     * @ORM\JoinTable(name="certificates_references")
     */
    private $references;     

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


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
     * @return Certificate
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
     * Constructor
     */
    public function __construct()
    {
        $this->certificateFiles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->references = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add certificateFile
     *
     * @param \AppBundle\Entity\CertificateFile $certificateFile
     *
     * @return Certificate
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
     * Add reference
     *
     * @param \AppBundle\Entity\Reference $reference
     *
     * @return Certificate
     */
    public function addReference(\AppBundle\Entity\Reference $reference)
    {
        $this->references[] = $reference;

        return $this;
    }

    /**
     * Remove reference
     *
     * @param \AppBundle\Entity\Reference $reference
     */
    public function removeReference(\AppBundle\Entity\Reference $reference)
    {
        $this->references->removeElement($reference);
    }

    /**
     * Get references
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReferences()
    {
        return $this->references;
    }
}
