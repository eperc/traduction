<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * CertificateFile
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\CertificateFileRepository")
 */
class CertificateFile
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
     * @ORM\ManyToOne(targetEntity="Certificate", inversedBy="certificateFiles")
     */
    private $certificate;   

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="certificateFiles")
     */
    private $translator;    

    /**
     * @Vich\UploadableField(mapping="certificate_file", fileNameProperty="certName")
     *
     * @var File
     *
     */
    private $certFile;

    /**
     * @var string
     *
     * @ORM\Column(name="cert_name", type="string", length=255)
     */
    private $certName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;


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
     * Set certFile
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $cert
     *
     */
    public function setCertFile(File $cert = null)
    {
        $this->certFile = $cert;

        if($cert){
            $this->updatedAt = new \DateTime('now');
        }
    }

    /**
     * Get certFile
     *
     * @return File
     */
    public function getCertFile()
    {
        return $this->certFile;
    }

    /**
     * Set certName
     *
     * @param string $certName
     *
     */
    public function setCertName($certName)
    {
        $this->certName = $certName;
    }

    /**
     * Get certName
     *
     * @return string
     */
    public function getCertName()
    {
        return $this->certName;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return CertificateFile
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set certificate
     *
     * @param \AppBundle\Entity\Certificate $certificate
     *
     * @return CertificateFile
     */
    public function setCertificate(\AppBundle\Entity\Certificate $certificate = null)
    {
        $this->certificate = $certificate;

        return $this;
    }

    /**
     * Get certificate
     *
     * @return \AppBundle\Entity\Certificate
     */
    public function getCertificate()
    {
        return $this->certificate;
    }

    /**
     * Set translator
     *
     * @param \AppBundle\Entity\Translator $translator
     *
     * @return CertificateFile
     */
    public function setTranslator(\AppBundle\Entity\Translator $translator = null)
    {
        $this->translator = $translator;

        return $this;
    }

    /**
     * Get translator
     *
     * @return \AppBundle\Entity\Translator
     */
    public function getTranslator()
    {
        return $this->translator;
    }
}
