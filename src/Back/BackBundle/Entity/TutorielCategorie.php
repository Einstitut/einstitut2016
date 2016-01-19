<?php

namespace Back\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TutorielCategorie
 *
 * @ORM\Table(name="tutoriel_categorie")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\TutorielCategorieRepository")
 */
class TutorielCategorie
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
     * @ORM\Column(name="LibelleTutoriel", type="string", length=255)
     */
    private $libelleTutoriel;
    /**
     * @ORM\OneToMany(targetEntity="Back\BackBundle\Entity\Tutoriel",mappedBy="tutorielCategorie")
     */
    private $tutoriel;


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
     * @return TutorielCategorie
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
}

