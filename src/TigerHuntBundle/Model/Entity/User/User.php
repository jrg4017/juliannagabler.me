<?php

namespace TigerHuntBundle\Model\Entity\User;

/**
 * Class User
 * @package TigerHuntBundle\Model\Entity\User
 */
class User
{
    /** @var integer */
    private $userID;

    /** @var Team */
    private $team;

    /** @var string */
    private $username;

    /** @var string */
    private $firstName;

    /** @var string */
    private $lastName;

    /** @var \DateTime */
    private $joinDate;

    /** @var string */
    private $imageURL;

    /** @var bool */
    private $isActive;

    /**
     * @return int
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * @return Team
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @param Team $team
     * @return User
     */
    public function setTeam($team)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getJoinDate()
    {
        return $this->joinDate;
    }

    /**
     * @param \DateTime $joinDate
     * @return User
     */
    public function setJoinDate($joinDate)
    {
        $this->joinDate = $joinDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageURL()
    {
        return $this->imageURL;
    }

    /**
     * @param string $imageURL
     * @return User
     */
    public function setImageURL($imageURL)
    {
        $this->imageURL = $imageURL;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->isActive;
    }

    /**
     * @param boolean $isActive
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }
}
