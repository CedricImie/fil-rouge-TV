<?php

namespace MovieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Realisateurs
 *
 * @ORM\Table(name="realisateurs")
 * @ORM\Entity(repositoryClass="MovieBundle\Repository\RealisateursRepository")
 */
class Realisateurs
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
     * @ORM\Column(name="nomRealisateur", type="string", length=255)
     */
    private $nomRealisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomRealisateur", type="string", length=255)
     */
    private $prenomRealisateur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissanceRealisateur", type="datetime")
     */
    private $dateNaissanceRealisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="bioRealisateur", type="text", nullable=true)
     */
    private $bioRealisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="serieRealisateur", type="string", length=255, nullable=true)
     */
    private $serieRealisateur;


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
     * Set nomRealisateur
     *
     * @param string $nomRealisateur
     *
     * @return Realisateurs
     */
    public function setNomRealisateur($nomRealisateur)
    {
        $this->nomRealisateur = $nomRealisateur;

        return $this;
    }

    /**
     * Get nomRealisateur
     *
     * @return string
     */
    public function getNomRealisateur()
    {
        return $this->nomRealisateur;
    }

    /**
     * Set prenomRealisateur
     *
     * @param string $prenomRealisateur
     *
     * @return Realisateurs
     */
    public function setPrenomRealisateur($prenomRealisateur)
    {
        $this->prenomRealisateur = $prenomRealisateur;

        return $this;
    }

    /**
     * Get prenomRealisateur
     *
     * @return string
     */
    public function getPrenomRealisateur()
    {
        return $this->prenomRealisateur;
    }

    /**
     * Set dateNaissanceRealisateur
     *
     * @param \DateTime $dateNaissanceRealisateur
     *
     * @return Realisateurs
     */
    public function setDateNaissanceRealisateur($dateNaissanceRealisateur)
    {
        $this->dateNaissanceRealisateur = $dateNaissanceRealisateur;

        return $this;
    }

    /**
     * Get dateNaissanceRealisateur
     *
     * @return \DateTime
     */
    public function getDateNaissanceRealisateur()
    {
        return $this->dateNaissanceRealisateur;
    }

    /**
     * Set bioRealisateur
     *
     * @param string $bioRealisateur
     *
     * @return Realisateurs
     */
    public function setBioRealisateur($bioRealisateur)
    {
        $this->bioRealisateur = $bioRealisateur;

        return $this;
    }

    /**
     * Get bioRealisateur
     *
     * @return string
     */
    public function getBioRealisateur()
    {
        return $this->bioRealisateur;
    }

    /**
     * Set serieRealisateur
     *
     * @param string $serieRealisateur
     *
     * @return Realisateurs
     */
    public function setSerieRealisateur($serieRealisateur)
    {
        $this->serieRealisateur = $serieRealisateur;

        return $this;
    }

    /**
     * Get serieRealisateur
     *
     * @return string
     */
    public function getSerieRealisateur()
    {
        return $this->serieRealisateur;
    }
}

