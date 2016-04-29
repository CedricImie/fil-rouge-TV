<?php

namespace MovieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Scenaristes
 *
 * @ORM\Table(name="scenaristes")
 * @ORM\Entity(repositoryClass="MovieBundle\Repository\ScenaristesRepository")
 */
class Scenaristes
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
     * @ORM\Column(name="nomScenariste", type="string", length=255)
     */
    private $nomScenariste;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomScenariste", type="string", length=255)
     */
    private $prenomScenariste;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissanceScenariste", type="datetime")
     */
    private $dateNaissanceScenariste;

    /**
     * @var string
     *
     * @ORM\Column(name="bioScenariste", type="text", nullable=true)
     */
    private $bioScenariste;


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
     * Set nomScenariste
     *
     * @param string $nomScenariste
     *
     * @return Scenaristes
     */
    public function setNomScenariste($nomScenariste)
    {
        $this->nomScenariste = $nomScenariste;

        return $this;
    }

    /**
     * Get nomScenariste
     *
     * @return string
     */
    public function getNomScenariste()
    {
        return $this->nomScenariste;
    }

    /**
     * Set prenomScenariste
     *
     * @param string $prenomScenariste
     *
     * @return Scenaristes
     */
    public function setPrenomScenariste($prenomScenariste)
    {
        $this->prenomScenariste = $prenomScenariste;

        return $this;
    }

    /**
     * Get prenomScenariste
     *
     * @return string
     */
    public function getPrenomScenariste()
    {
        return $this->prenomScenariste;
    }

    /**
     * Set dateNaissanceScenariste
     *
     * @param \DateTime $dateNaissanceScenariste
     *
     * @return Scenaristes
     */
    public function setDateNaissanceScenariste($dateNaissanceScenariste)
    {
        $this->dateNaissanceScenariste = $dateNaissanceScenariste;

        return $this;
    }

    /**
     * Get dateNaissanceScenariste
     *
     * @return \DateTime
     */
    public function getDateNaissanceScenariste()
    {
        return $this->dateNaissanceScenariste;
    }

    /**
     * Set bioScenariste
     *
     * @param string $bioScenariste
     *
     * @return Scenaristes
     */
    public function setBioScenariste($bioScenariste)
    {
        $this->bioScenariste = $bioScenariste;

        return $this;
    }

    /**
     * Get bioScenariste
     *
     * @return string
     */
    public function getBioScenariste()
    {
        return $this->bioScenariste;
    }
}

