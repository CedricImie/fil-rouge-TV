<?php

namespace MovieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moderateurs
 *
 * @ORM\Table(name="moderateurs")
 * @ORM\Entity(repositoryClass="MovieBundle\Repository\ModerateursRepository")
 */
class Moderateurs
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebutModerateur", type="datetime")
     */
    private $dateDebutModerateur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFinModerateur", type="datetime")
     */
    private $dateFinModerateur;


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
     * Set dateDebutModerateur
     *
     * @param \DateTime $dateDebutModerateur
     *
     * @return Moderateurs
     */
    public function setDateDebutModerateur($dateDebutModerateur)
    {
        $this->dateDebutModerateur = $dateDebutModerateur;

        return $this;
    }

    /**
     * Get dateDebutModerateur
     *
     * @return \DateTime
     */
    public function getDateDebutModerateur()
    {
        return $this->dateDebutModerateur;
    }

    /**
     * Set dateFinModerateur
     *
     * @param \DateTime $dateFinModerateur
     *
     * @return Moderateurs
     */
    public function setDateFinModerateur($dateFinModerateur)
    {
        $this->dateFinModerateur = $dateFinModerateur;

        return $this;
    }

    /**
     * Get dateFinModerateur
     *
     * @return \DateTime
     */
    public function getDateFinModerateur()
    {
        return $this->dateFinModerateur;
    }
}

