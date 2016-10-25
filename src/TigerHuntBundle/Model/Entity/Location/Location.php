<?php

namespace TigerHuntBundle\Model\Entity\Location;

/**
 * Class Location
 * @package TigerHuntBundle\Model\Entity\Location
 */
class Location
{
    /** @var integer */
    private $locationID;

    /** @var float */
    private $latitude;

    /** @var float */
    private $longitude;

    /**
     * @return int
     */
    public function getLocationID()
    {
        return $this->locationID;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     * @return Location
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return Location
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }
}
