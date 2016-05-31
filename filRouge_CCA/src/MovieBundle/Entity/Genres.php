<?php

namespace MovieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genres
 *
 * @ORM\Table(name="genres")
 * @ORM\Entity(repositoryClass="MovieBundle\Repository\GenresRepository")
 */
class Genres
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
     * @ORM\Column(name="nom_genre", type="string", length=255)
     */
    private $nomGenre;


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
     * Set nomGenre
     *
     * @param string $nomGenre
     *
     * @return Genres
     */
    public function setNomGenre($nomGenre)
    {
        $this->nomGenre = $nomGenre;

        return $this;
    }

    /**
     * Get nomGenre
     *
     * @return string
     */
    public function getNomGenre()
    {
        return $this->nomGenre;
    }
}

