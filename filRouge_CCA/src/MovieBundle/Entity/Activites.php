<?php

namespace MovieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activites
 *
 * @ORM\Table(name="activites")
 * @ORM\Entity(repositoryClass="MovieBundle\Repository\ActivitesRepository")
 */
class Activites
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
     * @ORM\Column(name="dateActivite", type="datetime")
     */
    private $dateActivite;


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
     * Set dateActivite
     *
     * @param \DateTime $dateActivite
     *
     * @return Activites
     */
    public function setDateActivite($dateActivite)
    {
        $this->dateActivite = $dateActivite;

        return $this;
    }

    /**
     * Get dateActivite
     *
     * @return \DateTime
     */
    public function getDateActivite()
    {
        return $this->dateActivite;
    }
}

