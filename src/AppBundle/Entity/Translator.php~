<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Translator
 *
 * @ORM\Table(name="translator")
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
    protected $id;

    /**
    * @ORM\OneToMany(targetEntity="Translation", mappedBy="translator")
    */
    #protected $translations;

    /**
    * @ORM\OneToMany(targetEntity="Improvement", mappedBy="translator")
    */
    #protected $improvements;

    /**
    * @ORM\OneToMany(targetEntity="CertificateFile", mappedBy="translator")
    */
    #protected $certificateFiles;    

    /**
     * @ORM\ManyToMany(targetEntity="Specialty", inversedBy="translators")
     * @ORM\JoinTable(name="translators_specialties")
     */
    #protected $specialties;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    protected $status;

    /**
     * @var decimal
     *
     * @ORM\Column(name="penalty", type="decimal", scale=2, nullable=true)
     */
    protected $penalty;    

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        #$this->translations = new \Doctrine\Common\Collections\ArrayCollection();
        #$this->improvements = new \Doctrine\Common\Collections\ArrayCollection();
        #$this->certificateFiles = new \Doctrine\Common\Collections\ArrayCollection();
        #$this->specialties = new \Doctrine\Common\Collections\ArrayCollection();
        $this->addRole('ROLE_TRANSLATOR');
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
}
