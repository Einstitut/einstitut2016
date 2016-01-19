<?php

namespace Back\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tutoriel
 *
 * @ORM\Table(name="tutoriel")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\TutorielRepository")
 */
class Tutoriel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleTutoriel", type="string", length=255)
     */
    private $libelleTutoriel;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="Url", type="string", length=255)
     */
    private $url;
    /**
     * @ORM\OneToMany(targetEntity="Back\BackBundle\Entity\InscriptionTutoriel",mappedBy="tutoriel")
     */
    private $inscriptionTuto;
    /**
     * @ORM\ManyToOne(targetEntity="Back\BackBundle\Entity\TutorielCategorie",inversedBy="tutoriel")
     */
    private $tutorielCategorie;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelleTutoriel
     *
     * @param string $libelleTutoriel
     *
     * @return Tutoriel
     */
    public function setLibelleTutoriel($libelleTutoriel)
    {
        $this->libelleTutoriel = $libelleTutoriel;

        return $this;
    }

    /**
     * Get libelleTutoriel
     *
     * @return string
     */
    public function getLibelleTutoriel()
    {
        return $this->libelleTutoriel;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Tutoriel
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Tutoriel
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}

