<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movie
 */
class Movie
{
    /**
     * @var integer
     */
    private $movieId;

    /**
     * @var string
     */
    private $movieTitle;

    /**
     * @var \DataBundle\Entity\Director
     */
    private $movieDirector;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $actor;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $genre;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actor = new \Doctrine\Common\Collections\ArrayCollection();
        $this->genre = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get movieId
     *
     * @return integer 
     */
    public function getMovieId()
    {
        return $this->movieId;
    }

    /**
     * Set movieTitle
     *
     * @param string $movieTitle
     * @return Movie
     */
    public function setMovieTitle($movieTitle)
    {
        $this->movieTitle = $movieTitle;

        return $this;
    }

    /**
     * Get movieTitle
     *
     * @return string 
     */
    public function getMovieTitle()
    {
        return $this->movieTitle;
    }

    /**
     * Set movieDirector
     *
     * @param \DataBundle\Entity\Director $movieDirector
     * @return Movie
     */
    public function setMovieDirector(\DataBundle\Entity\Director $movieDirector = null)
    {
        $this->movieDirector = $movieDirector;

        return $this;
    }

    /**
     * Get movieDirector
     *
     * @return \DataBundle\Entity\Director 
     */
    public function getMovieDirector()
    {
        return $this->movieDirector;
    }

    /**
     * Add actor
     *
     * @param \DataBundle\Entity\Actor $actor
     * @return Movie
     */
    public function addActor(\DataBundle\Entity\Actor $actor)
    {
        $this->actor[] = $actor;

        return $this;
    }

    /**
     * Remove actor
     *
     * @param \DataBundle\Entity\Actor $actor
     */
    public function removeActor(\DataBundle\Entity\Actor $actor)
    {
        $this->actor->removeElement($actor);
    }

    /**
     * Get actor
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Add genre
     *
     * @param \DataBundle\Entity\Genre $genre
     * @return Movie
     */
    public function addGenre(\DataBundle\Entity\Genre $genre)
    {
        $this->genre[] = $genre;

        return $this;
    }

    /**
     * Remove genre
     *
     * @param \DataBundle\Entity\Genre $genre
     */
    public function removeGenre(\DataBundle\Entity\Genre $genre)
    {
        $this->genre->removeElement($genre);
    }

    /**
     * Get genre
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGenre()
    {
        return $this->genre;
    }
}
