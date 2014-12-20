<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Director
 */
class Director
{
    /**
     * @var integer
     */
    private $directorId;

    /**
     * @var string
     */
    private $directorFirstName;

    /**
     * @var string
     */
    private $directorLastName;

    /**
     * @var \DataBundle\Entity\Country
     */
    private $directorCountry;


    /**
     * Get directorId
     *
     * @return integer 
     */
    public function getDirectorId()
    {
        return $this->directorId;
    }

    /**
     * Set directorFirstName
     *
     * @param string $directorFirstName
     * @return Director
     */
    public function setDirectorFirstName($directorFirstName)
    {
        $this->directorFirstName = $directorFirstName;

        return $this;
    }

    /**
     * Get directorFirstName
     *
     * @return string 
     */
    public function getDirectorFirstName()
    {
        return $this->directorFirstName;
    }

    /**
     * Set directorLastName
     *
     * @param string $directorLastName
     * @return Director
     */
    public function setDirectorLastName($directorLastName)
    {
        $this->directorLastName = $directorLastName;

        return $this;
    }

    /**
     * Get directorLastName
     *
     * @return string 
     */
    public function getDirectorLastName()
    {
        return $this->directorLastName;
    }

    /**
     * Set directorCountry
     *
     * @param \DataBundle\Entity\Country $directorCountry
     * @return Director
     */
    public function setDirectorCountry(\DataBundle\Entity\Country $directorCountry = null)
    {
        $this->directorCountry = $directorCountry;

        return $this;
    }

    /**
     * Get directorCountry
     *
     * @return \DataBundle\Entity\Country 
     */
    public function getDirectorCountry()
    {
        return $this->directorCountry;
    }
}
