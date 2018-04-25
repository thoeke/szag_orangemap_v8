<?php
namespace PierraaGroup\SzagOrangemap\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2018 Thorsten Hoeke, PierraaGroup GmbH
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Standort
 */
class Standort extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * location
     *
     * @var string
     */
    protected $location = '';
    
    /**
     * locationdesc
     *
     * @var string
     */
    protected $locationdesc = '';
    
    /**
     * business
     *
     * @var string
     */
    protected $business = '';
    
    /**
     * lat
     *
     * @var string
     */
    protected $lat = '';
    
    /**
     * lng
     *
     * @var string
     */
    protected $lng = '';
    
    /**
     * country
     *
     * @var string
     */
    protected $country = '';
    
    /**
     * Returns the location
     *
     * @return string $location
     */
    public function getLocation()
    {
        return $this->location;
    }
    
    /**
     * Sets the location
     *
     * @param string $location
     * @return void
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }
    
    /**
     * Returns the locationdesc
     *
     * @return string $locationdesc
     */
    public function getLocationdesc()
    {
        return $this->locationdesc;
    }
    
    /**
     * Sets the locationdesc
     *
     * @param string $locationdesc
     * @return void
     */
    public function setLocationdesc($locationdesc)
    {
        $this->locationdesc = $locationdesc;
    }
    
    /**
     * Returns the business
     *
     * @return string $business
     */
    public function getBusiness()
    {
        return $this->business;
    }
    
    /**
     * Sets the business
     *
     * @param string $business
     * @return void
     */
    public function setBusiness($business)
    {
        $this->business = $business;
    }
    
    /**
     * Returns the lat
     *
     * @return string $lat
     */
    public function getLat()
    {
        return $this->lat;
    }
    
    /**
     * Sets the lat
     *
     * @param string $lat
     * @return void
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    }
    
    /**
     * Returns the lng
     *
     * @return string $lng
     */
    public function getLng()
    {
        return $this->lng;
    }
    
    /**
     * Sets the lng
     *
     * @param string $lng
     * @return void
     */
    public function setLng($lng)
    {
        $this->lng = $lng;
    }
    
    /**
     * Returns the country
     *
     * @return string $country
     */
    public function getCountry()
    {
        return $this->country;
    }
    
    /**
     * Sets the country
     *
     * @param string $country
     * @return void
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

}