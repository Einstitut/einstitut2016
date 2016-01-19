<?php

namespace Back\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalleVirtuel
 *
 * @ORM\Table(name="salle_virtuel")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\SalleVirtuelRepository")
 */
class SalleVirtuel
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
     * @ORM\Column(name="libelleSalle", type="string", length=255)
     */
    private $libelleSalle;


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
     * Set libelleSalle
     *
     * @param string $libelleSalle
     *
     * @return SalleVirtuel
     */
    public function setLibelleSalle($libelleSalle)
    {
        $this->libelleSalle = $libelleSalle;

        return $this;
    }

    /**
     * Get libelleSalle
     *
     * @return string
     */
    public function getLibelleSalle()
    {
        return $this->libelleSalle;
    }
}

