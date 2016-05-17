<?php

namespace MovieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrateurs
 *
 * @ORM\Table(name="administrateurs")
 * @ORM\Entity(repositoryClass="MovieBundle\Repository\AdministrateursRepository")
 */
class Administrateurs
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
    * @ORM\OneToMany(targetEntity="Moderateurs", mappedBy="administrateurs")
    */
    private $moderateurs;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

