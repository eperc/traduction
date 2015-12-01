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
}
