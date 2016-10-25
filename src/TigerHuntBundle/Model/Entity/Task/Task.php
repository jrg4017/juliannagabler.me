<?php

namespace TigerHuntBundle\Model\Entity\Task;

use TigerHuntBundle\Model\Entity\Location\Location;

/**
 * Class Task
 * @package TigerHuntBundle\Model\Entity\Task
 */
class Task
{
    /** @var integer */
    private $taskID;

    /** @var string */
    private $taskName;

    /** @var Location */
    private $geolocation;

    /** @var string */
    private $taskType;

    /** @var string */
    private $hint;

    /** @var string */
    private $description;

    /** @var boolean */
    private $isActive;

    /**
     * @return int
     */
    public function getTaskID()
    {
        return $this->taskID;
    }

    /**
     * @return string
     */
    public function getTaskName()
    {
        return $this->taskName;
    }

    /**
     * @param string $taskName
     * @return Task
     */
    public function setTaskName($taskName)
    {
        $this->taskName = $taskName;

        return $this;
    }

    /**
     * @return GeoLocation
     */
    public function getGeolocation()
    {
        return $this->geolocation;
    }

    /**
     * @param GeoLocation $geolocation
     * @return Task
     */
    public function setGeolocation($geolocation)
    {
        $this->geolocation = $geolocation;

        return $this;
    }

    /**
     * @return string
     */
    public function getTaskType()
    {
        return $this->taskType;
    }

    /**
     * @param string $taskType
     * @return Task
     */
    public function setTaskType($taskType)
    {
        $this->taskType = $taskType;

        return $this;
    }

    /**
     * @return string
     */
    public function getHint()
    {
        return $this->hint;
    }

    /**
     * @param string $hint
     * @return Task
     */
    public function setHint($hint)
    {
        $this->hint = $hint;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Task
     */
    public function setDescription($description)
    {
        $this->description = $description;

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
     * @return Task
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }
}
