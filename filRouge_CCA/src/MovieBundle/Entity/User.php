<?php
// src/MovieBundle/Bundle/Entity/User.php
// used by FOSUserBundle

namespace MovieBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

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
     * @ORM\OneToMany(targetEntity="Activites", mappedBy="users")
     */
    private $activites;

    /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="Commentaires", mappedBy="users")
     */
    private $commentaires;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

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