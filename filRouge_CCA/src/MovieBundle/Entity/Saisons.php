<?php

namespace MovieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saisons
 *
 * @ORM\Table(name="saisons")
 * @ORM\Entity(repositoryClass="MovieBundle\Repository\SaisonsRepository")
 */
class Saisons
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
     * @ORM\Column(name="nomSaison", type="string", length=255)
     */
    private $nomSaison;

    /**
     * @var int
     *
     * @ORM\Column(name="nbEpisodeSaison", type="integer")
     */
    private $nbEpisodeSaison;

    /**
     * @var int
     *
     * @ORM\Column(name="dureeSaison", type="integer")
     */
    private $dureeSaison;

    /**
     * @var int
     *
     * @ORM\Column(name="noteMoyenneSaison", type="integer")
     */
    private $noteMoyenneSaison;

    /**
     * @var string
     *
     * @ORM\Column(name="castingSaison", type="text")
     */
    private $castingSaison;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="diffusionSaison", type="datetime")
     */
    private $diffusionSaison;

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
     * Set nomSaison
     *
     * @param string $nomSaison
     *
     * @return Saisons
     */
    public function setNomSaison($nomSaison)
    {
        $this->nomSaison = $nomSaison;

        return $this;
    }

    /**
     * Get nomSaison
     *
     * @return string
     */
    public function getNomSaison()
    {
        return $this->nomSaison;
    }

    /**
     * Set nbEpisodeSaison
     *
     * @param integer $nbEpisodeSaison
     *
     * @return Saisons
     */
    public function setNbEpisodeSaison($nbEpisodeSaison)
    {
        $this->nbEpisodeSaison = $nbEpisodeSaison;

        return $this;
    }

    /**
     * Get nbEpisodeSaison
     *
     * @return int
     */
    public function getNbEpisodeSaison()
    {
        return $this->nbEpisodeSaison;
    }

    /**
     * Set dureeSaison
     *
     * @param integer $dureeSaison
     *
     * @return Saisons
     */
    public function setDureeSaison($dureeSaison)
    {
        $this->dureeSaison = $dureeSaison;

        return $this;
    }

    /**
     * Get dureeSaison
     *
     * @return int
     */
    public function getDureeSaison()
    {
        return $this->dureeSaison;
    }

    /**
     * Set noteMoyenneSaison
     *
     * @param integer $noteMoyenneSaison
     *
     * @return Saisons
     */
    public function setNoteMoyenneSaison($noteMoyenneSaison)
    {
        $this->noteMoyenneSaison = $noteMoyenneSaison;

        return $this;
    }

    /**
     * Get noteMoyenneSaison
     *
     * @return int
     */
    public function getNoteMoyenneSaison()
    {
        return $this->noteMoyenneSaison;
    }

    /**
     * Set castingSaison
     *
     * @param string $castingSaison
     *
     * @return Saisons
     */
    public function setCastingSaison($castingSaison)
    {
        $this->castingSaison = $castingSaison;

        return $this;
    }

    /**
     * Get castingSaison
     *
     * @return string
     */
    public function getCastingSaison()
    {
        return $this->castingSaison;
    }

    /**
     * Set diffusionSaison
     *
     * @param \DateTime $diffusionSaison
     *
     * @return Saisons
     */
    public function setDiffusionSaison($diffusionSaison)
    {
        $this->diffusionSaison = $diffusionSaison;

        return $this;
    }

    /**
     * Get diffusionSaison
     *
     * @return \DateTime
     */
    public function getDiffusionSaison()
    {
        return $this->diffusionSaison;
    }
}

