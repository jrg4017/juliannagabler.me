<?php

namespace TigerHuntBundle\Model\Entity\User;

/**
 * Class Team
 * @package TigerHuntBundle\Model\Entity\User
 */
class Team
{
    /** @var integer */
    private $teamID;

    /** @var string */
    private $teamName;

    /** @var integer */
    private $maxMembers;

    /** @var string */
    private $teamPhotoURL;

    /** @var boolean */
    private $isActive;

    /**
     * @return int
     */
    public function getTeamID()
    {
        return $this->teamID;
    }

    /**
     * @return string
     */
    public function getTeamName()
    {
        return $this->teamName;
    }

    /**
     * @param string $teamName
     * @return Team
     */
    public function setTeamName($teamName)
    {
        $this->teamName = $teamName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaxMembers()
    {
        return $this->maxMembers;
    }

    /**
     * @param mixed $maxMembers
     * @return Team
     */
    public function setMaxMembers($maxMembers)
    {
        $this->maxMembers = $maxMembers;

        return $this;
    }

    /**
     * @return string
     */
    public function getTeamPhotoURL()
    {
        return $this->teamPhotoURL;
    }

    /**
     * @param string $teamPhotoURL
     * @return Team
     */
    public function setTeamPhotoURL($teamPhotoURL)
    {
        $this->teamPhotoURL = $teamPhotoURL;

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
     * @return Team
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }
}
