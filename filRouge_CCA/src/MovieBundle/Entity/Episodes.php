<?php

namespace MovieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Episodes
 *
 * @ORM\Table(name="episodes")
 * @ORM\Entity(repositoryClass="MovieBundle\Repository\EpisodesRepository")
 */
class Episodes
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
     * @ORM\Column(name="nomEpisode", type="string", length=255)
     */
    private $nomEpisode;

    /**
     * @var string
     *
     * @ORM\Column(name="resumeEpisode", type="text", nullable=true)
     */
    private $resumeEpisode;

    /**
     * @var int
     *
     * @ORM\Column(name="dureeEpisode", type="integer")
     */
    private $dureeEpisode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEpisode", type="datetime")
     */
    private $dateEpisode;

    /**
     * @var int
     *
     * @ORM\Column(name="noteMoyenneEpisode", type="integer")
     */
    private $noteMoyenneEpisode;

    /**
     * @var string
     *
     * @ORM\Column(name="classificationEpisode", type="string", length=255, nullable=true)
     */
    private $classificationEpisode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="diffusionEpisode", type="datetime")
     */
    private $diffusionEpisode;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Series", inversedBy="episodes")
     */
    private $series;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Saisons", inversedBy="episodes")
     */
    private $saisons;

    /**
    * @var string
    *
    * @ORM\ManyToMany(targetEntity="Acteurs")
    */
    private $acteurs;

    /**
    * @var string
    *
    * @ORM\ManyToMany(targetEntity="Realisateurs")
    */
    private $realisateurs;

    /**
    * @var string
    *
    * @ORM\ManyToMany(targetEntity="Scenaristes")
    */
    private $scenaristes;

    /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="Activites", mappedBy="episodes")
     */
    private $activites;

    /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="Commentaires", mappedBy="episodes")
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
     * Set nomEpisode
     *
     * @param string $nomEpisode
     *
     * @return Episodes
     */
    public function setNomEpisode($nomEpisode)
    {
        $this->nomEpisode = $nomEpisode;

        return $this;
    }

    /**
     * Get nomEpisode
     *
     * @return string
     */
    public function getNomEpisode()
    {
        return $this->nomEpisode;
    }

    /**
     * Set resumeEpisode
     *
     * @param string $resumeEpisode
     *
     * @return Episodes
     */
    public function setResumeEpisode($resumeEpisode)
    {
        $this->resumeEpisode = $resumeEpisode;

        return $this;
    }

    /**
     * Get resumeEpisode
     *
     * @return string
     */
    public function getResumeEpisode()
    {
        return $this->resumeEpisode;
    }

    /**
     * Set dureeEpisode
     *
     * @param integer $dureeEpisode
     *
     * @return Episodes
     */
    public function setDureeEpisode($dureeEpisode)
    {
        $this->dureeEpisode = $dureeEpisode;

        return $this;
    }

    /**
     * Get dureeEpisode
     *
     * @return int
     */
    public function getDureeEpisode()
    {
        return $this->dureeEpisode;
    }

    /**
     * Set dateEpisode
     *
     * @param \DateTime $dateEpisode
     *
     * @return Episodes
     */
    public function setDateEpisode($dateEpisode)
    {
        $this->dateEpisode = $dateEpisode;

        return $this;
    }

    /**
     * Get dateEpisode
     *
     * @return \DateTime
     */
    public function getDateEpisode()
    {
        return $this->dateEpisode;
    }

    /**
     * Set noteMoyenneEpisode
     *
     * @param integer $noteMoyenneEpisode
     *
     * @return Episodes
     */
    public function setNoteMoyenneEpisode($noteMoyenneEpisode)
    {
        $this->noteMoyenneEpisode = $noteMoyenneEpisode;

        return $this;
    }

    /**
     * Get noteMoyenneEpisode
     *
     * @return int
     */
    public function getNoteMoyenneEpisode()
    {
        return $this->noteMoyenneEpisode;
    }

    /**
     * Set classificationEpisode
     *
     * @param string $classificationEpisode
     *
     * @return Episodes
     */
    public function setClassificationEpisode($classificationEpisode)
    {
        $this->classificationEpisode = $classificationEpisode;

        return $this;
    }

    /**
     * Get classificationEpisode
     *
     * @return string
     */
    public function getClassificationEpisode()
    {
        return $this->classificationEpisode;
    }

    /**
     * Set diffusionEpisode
     *
     * @param \DateTime $diffusionEpisode
     *
     * @return Episodes
     */
    public function setDiffusionEpisode($diffusionEpisode)
    {
        $this->diffusionEpisode = $diffusionEpisode;

        return $this;
    }

    /**
     * Get diffusionEpisode
     *
     * @return \DateTime
     */
    public function getDiffusionEpisode()
    {
        return $this->diffusionEpisode;
    }
}

