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
}
