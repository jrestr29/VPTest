<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actor
 */
class Actor
{
    /**
     * @var integer
     */
    private $actorId;

    /**
     * @var string
     */
    private $actorFirstName;

    /**
     * @var string
     */
    private $actorLastName;

    /**
     * @var \DataBundle\Entity\Country
     */
    private $actorCountry;

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
     * Get actorId
     *
     * @return integer 
     */
    public function getActorId()
    {
        return $this->actorId;
    }

    /**
     * Set actorFirstName
     *
     * @param string $actorFirstName
     * @return Actor
     */
    public function setActorFirstName($actorFirstName)
    {
        $this->actorFirstName = $actorFirstName;

        return $this;
    }

    /**
     * Get actorFirstName
     *
     * @return string 
     */
    public function getActorFirstName()
    {
        return $this->actorFirstName;
    }

    /**
     * Set actorLastName
     *
     * @param string $actorLastName
     * @return Actor
     */
    public function setActorLastName($actorLastName)
    {
        $this->actorLastName = $actorLastName;

        return $this;
    }

    /**
     * Get actorLastName
     *
     * @return string 
     */
    public function getActorLastName()
    {
        return $this->actorLastName;
    }

    /**
     * Set actorCountry
     *
     * @param \DataBundle\Entity\Country $actorCountry
     * @return Actor
     */
    public function setActorCountry(\DataBundle\Entity\Country $actorCountry = null)
    {
        $this->actorCountry = $actorCountry;

        return $this;
    }

    /**
     * Get actorCountry
     *
     * @return \DataBundle\Entity\Country 
     */
    public function getActorCountry()
    {
        return $this->actorCountry;
    }

    /**
     * Add movie
     *
     * @param \DataBundle\Entity\Movie $movie
     * @return Actor
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
    /**
     * @var \DataBundle\Entity\User
     */
    private $actorOwner;


    /**
     * Set actorOwner
     *
     * @param \DataBundle\Entity\User $actorOwner
     * @return Actor
     */
    public function setActorOwner(\DataBundle\Entity\User $actorOwner = null)
    {
        $this->actorOwner = $actorOwner;

        return $this;
    }

    /**
     * Get actorOwner
     *
     * @return \DataBundle\Entity\User 
     */
    public function getActorOwner()
    {
        return $this->actorOwner;
    }
}
