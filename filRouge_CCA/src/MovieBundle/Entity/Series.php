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
     * @ORM\Column(name="nomSerie", type="string", length=255)
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
     * @ORM\Column(name="noteMoyenneSerie", type="integer", nullable=true)
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
     * @var \Boolean
     *
     * @ORM\Column(name="validation", type="boolean", nullable=false)
     */
    private $validation;

    /**
     * @var string
     *
     * @ORM\Column(name="dateAjout", type="datetime")
     */
    private $dateAjout;

    /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="Saisons", mappedBy="series")
     */
    private $saisons;

    /**
    * @var string
    *
    * @ORM\OneToMany(targetEntity="Episodes", mappedBy="series")
    */
    private $episodes;

    /**
    * @var string
    *
    * @ORM\ManyToMany(targetEntity="Acteurs")
    */
    private $acteurs;

    /**
    * @var string
    *
    * @ORM\OneToMany(targetEntity="Commentaires", mappedBy="series")
    */
    private $commentaires;

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

    /**
     * Set validation
     *
     * @param \Boolean $validation
     *
     * @return Series
     */
    public function setValidation($validation)
    {
        $this->validation = $validation;

        return $this;
    }

    /**
     * Get validation
     *
     * @return \Boolean
     */
    public function getvalidation()
    {
        return $this->validation;
    }

    /**
     * Get dateAjout
     *
     * @return \DateTime
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
    }

    /**
     * Set dateAjout
     *
     * @param \DateTime $dateAjout
     *
     * @return Series
     */
    public function setDateAjout($dateAjout)
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }
    
}