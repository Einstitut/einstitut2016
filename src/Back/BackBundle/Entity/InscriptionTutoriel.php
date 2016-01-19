<?php

namespace Back\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InscriptionTutoriel
 *
 * @ORM\Table(name="inscription_tutoriel")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\InscriptionTutorielRepository")
 */
class InscriptionTutoriel
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Front\UserBundle\Entity\User",inversedBy="inscriptionTuto")
     */
    private $user;
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Back\BackBundle\Entity\Tutoriel",inversedBy="inscriptionTuto")
     */
    private $tutoriel;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="datetime")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="datetime")
     */
    private $dateFin;





    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return InscriptionTutoriel
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return InscriptionTutoriel
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }
}

