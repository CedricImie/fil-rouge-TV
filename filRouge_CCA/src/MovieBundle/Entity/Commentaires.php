<?php

namespace MovieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaires
 *
 * @ORM\Table(name="commentaires")
 * @ORM\Entity(repositoryClass="MovieBundle\Repository\CommentairesRepository")
 */
class Commentaires
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
     * @ORM\Column(name="titreCommentaire", type="string", length=255)
     */
    private $titreCommentaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCommentaire", type="datetime")
     */
    private $dateCommentaire;

    /**
     * @var int
     *
     * @ORM\Column(name="noteMoyenneCommentaire", type="integer")
     */
    private $noteMoyenneCommentaire;


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
     * Set titreCommentaire
     *
     * @param string $titreCommentaire
     *
     * @return Commentaires
     */
    public function setTitreCommentaire($titreCommentaire)
    {
        $this->titreCommentaire = $titreCommentaire;

        return $this;
    }

    /**
     * Get titreCommentaire
     *
     * @return string
     */
    public function getTitreCommentaire()
    {
        return $this->titreCommentaire;
    }

    /**
     * Set dateCommentaire
     *
     * @param string $dateCommentaire
     *
     * @return Commentaires
     */
    public function setDateCommentaire($dateCommentaire)
    {
        $this->dateCommentaire = $dateCommentaire;

        return $this;
    }

    /**
     * Get dateCommentaire
     *
     * @return string
     */
    public function getDateCommentaire()
    {
        return $this->dateCommentaire;
    }

    /**
     * Set noteMoyenneCommentaire
     *
     * @param integer $noteMoyenneCommentaire
     *
     * @return Commentaires
     */
    public function setNoteMoyenneCommentaire($noteMoyenneCommentaire)
    {
        $this->noteMoyenneCommentaire = $noteMoyenneCommentaire;

        return $this;
    }

    /**
     * Get noteMoyenneCommentaire
     *
     * @return int
     */
    public function getNoteMoyenneCommentaire()
    {
        return $this->noteMoyenneCommentaire;
    }
}

