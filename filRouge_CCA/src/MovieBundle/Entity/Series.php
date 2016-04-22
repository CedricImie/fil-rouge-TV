<?php

namespace MovieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Series
 *
 * @ORM\Table(name="series")
 * @ORM\Entity(repositoryClass="MovieBundle\Repository\SeriesRepository")
 */
class Series
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
     * @ORM\Column(name="nomSerie", type="string", length=255, unique=true)
     */
    private $nomSerie;

    /**
     * @var string
     *
     * @ORM\Column(name="posterSerie", type="string", length=255, nullable=true)
     */
    private $posterSerie;

    /**
     * @var string
     *
     * @ORM\Column(name="resumeSerie", type="text", nullable=true)
     */
    private $resumeSerie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreationSerie", type="datetime", nullable=true)
     */
    private $dateCreationSerie;

    /**
     * @var int
     *
     * @ORM\Column(name="noteMoyenneSerie", type="integer")
     */
    private $noteMoyenneSerie;

    /**
     * @var int
     *
     * @ORM\Column(name="nbAbonneSerie", type="integer", nullable=true)
     */
    private $nbAbonneSerie;

    /**
     * @var string
     *
     * @ORM\Column(name="castingSerie", type="text", nullable=true)
     */
    private $castingSerie;

    /**
     * @var string
     *
     * @ORM\Column(name="genreSerie", type="string", length=255)
     */
    private $genreSerie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="diffusionSerie", type="datetime", nullable=true)
     */
    private $diffusionSerie;

    /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="Saisons", MappedBy="series")
     */
    private $series;

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
     * Set nomSerie
     *
     * @param string $nomSerie
     *
     * @return Series
     */
    public function setNomSerie($nomSerie)
    {
        $this->nomSerie = $nomSerie;

        return $this;
    }

    /**
     * Get nomSerie
     *
     * @return string
     */
    public function getNomSerie()
    {
        return $this->nomSerie;
    }

    /**
     * Set posterSerie
     *
     * @param string $posterSerie
     *
     * @return Series
     */
    public function setPosterSerie($posterSerie)
    {
        $this->posterSerie = $posterSerie;

        return $this;
    }

    /**
     * Get posterSerie
     *
     * @return string
     */
    public function getPosterSerie()
    {
        return $this->posterSerie;
    }

    /**
     * Set resumeSerie
     *
     * @param string $resumeSerie
     *
     * @return Series
     */
    public function setResumeSerie($resumeSerie)
    {
        $this->resumeSerie = $resumeSerie;

        return $this;
    }

    /**
     * Get resumeSerie
     *
     * @return string
     */
    public function getResumeSerie()
    {
        return $this->resumeSerie;
    }

    /**
     * Set dateCreationSerie
     *
     * @param \DateTime $dateCreationSerie
     *
     * @return Series
     */
    public function setDateCreationSerie($dateCreationSerie)
    {
        $this->dateCreationSerie = $dateCreationSerie;

        return $this;
    }

    /**
     * Get dateCreationSerie
     *
     * @return \DateTime
     */
    public function getDateCreationSerie()
    {
        return $this->dateCreationSerie;
    }

    /**
     * Set noteMoyenneSerie
     *
     * @param integer $noteMoyenneSerie
     *
     * @return Series
     */
    public function setNoteMoyenneSerie($noteMoyenneSerie)
    {
        $this->noteMoyenneSerie = $noteMoyenneSerie;

        return $this;
    }

    /**
     * Get noteMoyenneSerie
     *
     * @return int
     */
    public function getNoteMoyenneSerie()
    {
        return $this->noteMoyenneSerie;
    }

    /**
     * Set nbAbonneSerie
     *
     * @param integer $nbAbonneSerie
     *
     * @return Series
     */
    public function setNbAbonneSerie($nbAbonneSerie)
    {
        $this->nbAbonneSerie = $nbAbonneSerie;

        return $this;
    }

    /**
     * Get nbAbonneSerie
     *
     * @return int
     */
    public function getNbAbonneSerie()
    {
        return $this->nbAbonneSerie;
    }

    /**
     * Set castingSerie
     *
     * @param string $castingSerie
     *
     * @return Series
     */
    public function setCastingSerie($castingSerie)
    {
        $this->castingSerie = $castingSerie;

        return $this;
    }

    /**
     * Get castingSerie
     *
     * @return string
     */
    public function getCastingSerie()
    {
        return $this->castingSerie;
    }

    /**
     * Set genreSerie
     *
     * @param string $genreSerie
     *
     * @return Series
     */
    public function setGenreSerie($genreSerie)
    {
        $this->genreSerie = $genreSerie;

        return $this;
    }

    /**
     * Get genreSerie
     *
     * @return string
     */
    public function getGenreSerie()
    {
        return $this->genreSerie;
    }

    /**
     * Set diffusionSerie
     *
     * @param \DateTime $diffusionSerie
     *
     * @return Series
     */
    public function setDiffusionSerie($diffusionSerie)
    {
        $this->diffusionSerie = $diffusionSerie;

        return $this;
    }

    /**
     * Get diffusionSerie
     *
     * @return \DateTime
     */
    public function getDiffusionSerie()
    {
        return $this->diffusionSerie;
    }
}

