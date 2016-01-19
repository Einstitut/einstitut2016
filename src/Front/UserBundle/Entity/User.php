<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 11/01/2016
 * Time: 21:07
 */

namespace Front\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\OneToMany(targetEntity="Back\BackBundle\Entity\Evaluation",mappedBy="user")
     * @ORM\JoinColumn(nullable=false)
     */
    private $evaluation;
    /**
     * @ORM\ManyToOne(targetEntity="Back\BackBundle\Entity\Forum",inversedBy="user")
     */
    private $forum;
    /**
     * @ORM\OneToMany(targetEntity="Back\BackBundle\Entity\InscriptionTutoriel",mappedBy="user")
     * @ORM\JoinColumn(nullable=false)
     */
    private $inscriptionTuto;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}