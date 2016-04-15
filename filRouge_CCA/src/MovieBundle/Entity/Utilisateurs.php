<?php

namespace MovieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateurs
 *
 * @ORM\Table(name="utilisateurs")
 * @ORM\Entity(repositoryClass="MovieBundle\Repository\UtilisateursRepository")
 */
class Utilisateurs
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
     * @ORM\Column(name="pseudoUtilisateur", type="string", length=255, unique=true)
     */
    private $pseudoUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomUtilisateur", type="string", length=255)
     */
    private $prenomUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="nomUtilisateur", type="string", length=255)
     */
    private $nomUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseEmailUtilisateur", type="string", length=255, unique=true)
     */
    private $adresseEmailUtilisateur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissanceUtilisateur", type="datetime", nullable=true)
     */
    private $dateNaissanceUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="photoProfilUtilisateur", type="string", length=255, nullable=true)
     */
    private $photoProfilUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="motDePasseUtilisateur", type="string", length=255)
     */
    private $motDePasseUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="sexeUtilisateur", type="string", length=1)
     */
    private $sexeUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="facebookUtilisateur", type="string", length=255, nullable=true)
     */
    private $facebookUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="twitterUtilisateur", type="string", length=255, nullable=true)
     */
    private $twitterUtilisateur;


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
     * Set pseudoUtilisateur
     *
     * @param string $pseudoUtilisateur
     *
     * @return Utilisateurs
     */
    public function setPseudoUtilisateur($pseudoUtilisateur)
    {
        $this->pseudoUtilisateur = $pseudoUtilisateur;

        return $this;
    }

    /**
     * Get pseudoUtilisateur
     *
     * @return string
     */
    public function getPseudoUtilisateur()
    {
        return $this->pseudoUtilisateur;
    }

    /**
     * Set prenomUtilisateur
     *
     * @param string $prenomUtilisateur
     *
     * @return Utilisateurs
     */
    public function setPrenomUtilisateur($prenomUtilisateur)
    {
        $this->prenomUtilisateur = $prenomUtilisateur;

        return $this;
    }

    /**
     * Get prenomUtilisateur
     *
     * @return string
     */
    public function getPrenomUtilisateur()
    {
        return $this->prenomUtilisateur;
    }

    /**
     * Set nomUtilisateur
     *
     * @param string $nomUtilisateur
     *
     * @return Utilisateurs
     */
    public function setNomUtilisateur($nomUtilisateur)
    {
        $this->nomUtilisateur = $nomUtilisateur;

        return $this;
    }

    /**
     * Get nomUtilisateur
     *
     * @return string
     */
    public function getNomUtilisateur()
    {
        return $this->nomUtilisateur;
    }

    /**
     * Set adresseEmailUtilisateur
     *
     * @param string $adresseEmailUtilisateur
     *
     * @return Utilisateurs
     */
    public function setAdresseEmailUtilisateur($adresseEmailUtilisateur)
    {
        $this->adresseEmailUtilisateur = $adresseEmailUtilisateur;

        return $this;
    }

    /**
     * Get adresseEmailUtilisateur
     *
     * @return string
     */
    public function getAdresseEmailUtilisateur()
    {
        return $this->adresseEmailUtilisateur;
    }

    /**
     * Set dateNaissanceUtilisateur
     *
     * @param \DateTime $dateNaissanceUtilisateur
     *
     * @return Utilisateurs
     */
    public function setDateNaissanceUtilisateur($dateNaissanceUtilisateur)
    {
        $this->dateNaissanceUtilisateur = $dateNaissanceUtilisateur;

        return $this;
    }

    /**
     * Get dateNaissanceUtilisateur
     *
     * @return \DateTime
     */
    public function getDateNaissanceUtilisateur()
    {
        return $this->dateNaissanceUtilisateur;
    }

    /**
     * Set photoProfilUtilisateur
     *
     * @param string $photoProfilUtilisateur
     *
     * @return Utilisateurs
     */
    public function setPhotoProfilUtilisateur($photoProfilUtilisateur)
    {
        $this->photoProfilUtilisateur = $photoProfilUtilisateur;

        return $this;
    }

    /**
     * Get photoProfilUtilisateur
     *
     * @return string
     */
    public function getPhotoProfilUtilisateur()
    {
        return $this->photoProfilUtilisateur;
    }

    /**
     * Set motDePasseUtilisateur
     *
     * @param string $motDePasseUtilisateur
     *
     * @return Utilisateurs
     */
    public function setMotDePasseUtilisateur($motDePasseUtilisateur)
    {
        $this->motDePasseUtilisateur = $motDePasseUtilisateur;

        return $this;
    }

    /**
     * Get motDePasseUtilisateur
     *
     * @return string
     */
    public function getMotDePasseUtilisateur()
    {
        return $this->motDePasseUtilisateur;
    }

    /**
     * Set sexeUtilisateur
     *
     * @param string $sexeUtilisateur
     *
     * @return Utilisateurs
     */
    public function setSexeUtilisateur($sexeUtilisateur)
    {
        $this->sexeUtilisateur = $sexeUtilisateur;

        return $this;
    }

    /**
     * Get sexeUtilisateur
     *
     * @return string
     */
    public function getSexeUtilisateur()
    {
        return $this->sexeUtilisateur;
    }

    /**
     * Set facebookUtilisateur
     *
     * @param string $facebookUtilisateur
     *
     * @return Utilisateurs
     */
    public function setFacebookUtilisateur($facebookUtilisateur)
    {
        $this->facebookUtilisateur = $facebookUtilisateur;

        return $this;
    }

    /**
     * Get facebookUtilisateur
     *
     * @return string
     */
    public function getFacebookUtilisateur()
    {
        return $this->facebookUtilisateur;
    }

    /**
     * Set twitterUtilisateur
     *
     * @param string $twitterUtilisateur
     *
     * @return Utilisateurs
     */
    public function setTwitterUtilisateur($twitterUtilisateur)
    {
        $this->twitterUtilisateur = $twitterUtilisateur;

        return $this;
    }

    /**
     * Get twitterUtilisateur
     *
     * @return string
     */
    public function getTwitterUtilisateur()
    {
        return $this->twitterUtilisateur;
    }
}

