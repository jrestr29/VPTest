<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genre
 */
class Genre
{
    /**
     * @var integer
     */
    private $genreId;

    /**
     * @var string
     */
    private $genreName;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $movie;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->movie = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get genreId
     *
     * @return integer 
     */
    public function getGenreId()
    {
        return $this->genreId;
    }

    /**
     * Set genreName
     *
     * @param string $genreName
     * @return Genre
     */
    public function setGenreName($genreName)
    {
        $this->genreName = $genreName;

        return $this;
    }

    /**
     * Get genreName
     *
     * @return string 
     */
    public function getGenreName()
    {
        return $this->genreName;
    }

    /**
     * Add movie
     *
     * @param \DataBundle\Entity\Movie $movie
     * @return Genre
     */
    public function addMovie(\DataBundle\Entity\Movie $movie)
    {
        $this->movie[] = $movie;

        return $this;
    }

    /**
     * Remove movie
     *
     * @param \DataBundle\Entity\Movie $movie
     */
    public function removeMovie(\DataBundle\Entity\Movie $movie)
    {
        $this->movie->removeElement($movie);
    }

    /**
     * Get movie
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMovie()
    {
        return $this->movie;
    }
}
