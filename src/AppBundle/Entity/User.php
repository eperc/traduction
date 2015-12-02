<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    ### Client
    /**
    * @ORM\OneToMany(targetEntity="Demand", mappedBy="client")
    */
    protected $demands;
    ###  

    ### Translator
    /**
    * @ORM\OneToMany(targetEntity="Translation", mappedBy="translator")
    */
    protected $translations;

    /**
    * @ORM\OneToMany(targetEntity="Improvement", mappedBy="translator")
    */
    protected $improvements;

    /**
    * @ORM\OneToMany(targetEntity="CertificateFile", mappedBy="translator")
    */
    protected $certificateFiles;    

    /**
     * @ORM\ManyToMany(targetEntity="Specialty", inversedBy="translators")
     * @ORM\JoinTable(name="translators_specialties")
     */
    protected $specialties;    
    ###

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100, nullable=true)
     */
    protected $type;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    protected $name;
    
    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=100, nullable=true)
     */
    protected $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    protected $address; 

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    protected $city;

    /**
     * @var string
     *
     * @ORM\Column(name="postal_code", type="string", length=255, nullable=true)
     */
    protected $postalCode;             

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="born_at", type="date", nullable=true)
     */
    protected $bornAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    protected $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=100)
     */
    protected $state;    

    public function __construct()
    {
        parent::__construct();
        $this->state= "inactive";
        $this->demands= new \Doctrine\Common\Collections\ArrayCollection();
        $this->translations= new \Doctrine\Common\Collections\ArrayCollection();
        $this->improvements= new \Doctrine\Common\Collections\ArrayCollection();
        $this->specialties= new \Doctrine\Common\Collections\ArrayCollection();
        $this->certificateFiles= new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return User
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
     * Set surname
     *
     * @param string $surname
     *
     * @return User
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set bornAt
     *
     * @param \DateTime $bornAt
     *
     * @return User
     */
    public function setBornAt($bornAt)
    {
        $this->bornAt = $bornAt;

        return $this;
    }

    /**
     * Get bornAt
     *
     * @return \DateTime
     */
    public function getBornAt()
    {
        return $this->bornAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return User
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set admin
     *
     * @param \AppBundle\Entity\Admin $admin
     *
     * @return User
     */
    public function setAdmin(\AppBundle\Entity\Admin $admin = null)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return \AppBundle\Entity\Admin
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set client
     *
     * @param \AppBundle\Entity\Client $client
     *
     * @return User
     */
    public function setClient(\AppBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \AppBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set translator
     *
     * @param \AppBundle\Entity\Translator $translator
     *
     * @return User
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

    /**
     * Set type
     *
     * @param string $type
     *
     * @return User
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     *
     * @return User
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return User
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
     * Add demand
     *
     * @param \AppBundle\Entity\Demand $demand
     *
     * @return User
     */
    public function addDemand(\AppBundle\Entity\Demand $demand)
    {
        $this->demands[] = $demand;

        return $this;
    }

    /**
     * Remove demand
     *
     * @param \AppBundle\Entity\Demand $demand
     */
    public function removeDemand(\AppBundle\Entity\Demand $demand)
    {
        $this->demands->removeElement($demand);
    }

    /**
     * Get demands
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDemands()
    {
        return $this->demands;
    }

    /**
     * Add translation
     *
     * @param \AppBundle\Entity\Translation $translation
     *
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
}
