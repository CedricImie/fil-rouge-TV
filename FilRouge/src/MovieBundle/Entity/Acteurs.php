<?php

namespace MovieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acteurs
 *
 * @ORM\Table(name="acteurs")
 * @ORM\Entity(repositoryClass="MovieBundle\Repository\ActeursRepository")
 */
class Acteurs
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
     * @ORM\Column(name="nomActeur", type="string", length=255)
     */
    private $nomActeur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomActeur", type="string", length=255)
     */
    private $prenomActeur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissanceActeur", type="datetime")
     */
    private $dateNaissanceActeur;

    /**
     * @var string
     *
     * @ORM\Column(name="bioActeur", type="text")
     */
    private $bioActeur;

    /**
     * @var string
     *
     * @ORM\Column(name="serieActeur", type="string", length=255, nullable=true)
     */
    private $serieActeur;


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
     * Set nomActeur
     *
     * @param string $nomActeur
     *
     * @return Acteurs
     */
    public function setNomActeur($nomActeur)
    {
        $this->nomActeur = $nomActeur;

        return $this;
    }

    /**
     * Get nomActeur
     *
     * @return string
     */
    public function getNomActeur()
    {
        return $this->nomActeur;
    }

    /**
     * Set prenomActeur
     *
     * @param string $prenomActeur
     *
     * @return Acteurs
     */
    public function setPrenomActeur($prenomActeur)
    {
        $this->prenomActeur = $prenomActeur;

        return $this;
    }

    /**
     * Get prenomActeur
     *
     * @return string
     */
    public function getPrenomActeur()
    {
        return $this->prenomActeur;
    }

    /**
     * Set dateNaissanceActeur
     *
     * @param \DateTime $dateNaissanceActeur
     *
     * @return Acteurs
     */
    public function setDateNaissanceActeur($dateNaissanceActeur)
    {
        $this->dateNaissanceActeur = $dateNaissanceActeur;

        return $this;
    }

    /**
     * Get dateNaissanceActeur
     *
     * @return \DateTime
     */
    public function getDateNaissanceActeur()
    {
        return $this->dateNaissanceActeur;
    }

    /**
     * Set bioActeur
     *
     * @param string $bioActeur
     *
     * @return Acteurs
     */
    public function setBioActeur($bioActeur)
    {
        $this->bioActeur = $bioActeur;

        return $this;
    }

    /**
     * Get bioActeur
     *
     * @return string
     */
    public function getBioActeur()
    {
        return $this->bioActeur;
    }

    /**
     * Set serieActeur
     *
     * @param string $serieActeur
     *
     * @return Acteurs
     */
    public function setSerieActeur($serieActeur)
    {
        $this->serieActeur = $serieActeur;

        return $this;
    }

    /**
     * Get serieActeur
     *
     * @return string
     */
    public function getSerieActeur()
    {
        return $this->serieActeur;
    }
}

