<?php
namespace PierraaDesign\SzagOrangemap\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 PierraaDesign Werbeagentur GmbH <info@pierraa-design.de>, PierraaDesign Werbeagentur GmbH
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
 * Markers
 */
class Markers extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     */
    protected $title = '';
    
    /**
     * adress
     *
     * @var string
     */
    protected $adress = '';
    
    /**
     * zipcode
     *
     * @var string
     */
    protected $zipcode = '';
    
    /**
     * website
     *
     * @var string
     */
    protected $website = '';
    
    /**
     * longitude
     *
     * @var string
     */
    protected $longitude = '';
    
    /**
     * latitude
     *
     * @var string
     */
    protected $latitude = '';
    
    /**
     * city
     *
     * @var \PierraaDesign\SzagOrangemap\Domain\Model\Cities
     */
    protected $city = null;
    
    /**
     * company
     *
     * @var \PierraaDesign\SzagOrangemap\Domain\Model\Companies
     */
    protected $company = null;
    
    /**
     * nation
     *
     * @var \PierraaDesign\SzagOrangemap\Domain\Model\Nations
     */
    protected $nation = null;
    
    /**
     * businessunit
     *
     * @var \PierraaDesign\SzagOrangemap\Domain\Model\Businessunit
     */
    protected $businessunit = null;
    
    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    /**
     * Returns the adress
     *
     * @return string $adress
     */
    public function getAdress()
    {
        return $this->adress;
    }
    
    /**
     * Sets the adress
     *
     * @param string $adress
     * @return void
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }
    
    /**
     * Returns the zipcode
     *
     * @return string $zipcode
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }
    
    /**
     * Sets the zipcode
     *
     * @param string $zipcode
     * @return void
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    }
    
    /**
     * Returns the website
     *
     * @return string $website
     */
    public function getWebsite()
    {
        return $this->website;
    }
    
    /**
     * Sets the website
     *
     * @param string $website
     * @return void
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }
    
    /**
     * Returns the longitude
     *
     * @return string $longitude
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
    
    /**
     * Sets the longitude
     *
     * @param string $longitude
     * @return void
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }
    
    /**
     * Returns the latitude
     *
     * @return string $latitude
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
    
    /**
     * Sets the latitude
     *
     * @param string $latitude
     * @return void
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }
    
    /**
     * Returns the city
     *
     * @return \PierraaDesign\SzagOrangemap\Domain\Model\Cities city
     */
    public function getCity()
    {
        return $this->city;
    }
    
    /**
     * Sets the city
     *
     * @param \PierraaDesign\SzagOrangemap\Domain\Model\Cities $city
     * @return void
     */
    public function setCity(\PierraaDesign\SzagOrangemap\Domain\Model\Cities $city)
    {
        $this->city = $city;
    }
    
    /**
     * Returns the company
     *
     * @return \PierraaDesign\SzagOrangemap\Domain\Model\Companies company
     */
    public function getCompany()
    {
        return $this->company;
    }
    
    /**
     * Sets the company
     *
     * @param \PierraaDesign\SzagOrangemap\Domain\Model\Companies $company
     * @return void
     */
    public function setCompany(\PierraaDesign\SzagOrangemap\Domain\Model\Companies $company)
    {
        $this->company = $company;
    }
    
    /**
     * Returns the nation
     *
     * @return \PierraaDesign\SzagOrangemap\Domain\Model\Nations nation
     */
    public function getNation()
    {
        return $this->nation;
    }
    
    /**
     * Sets the nation
     *
     * @param \PierraaDesign\SzagOrangemap\Domain\Model\Nations $nation
     * @return void
     */
    public function setNation(\PierraaDesign\SzagOrangemap\Domain\Model\Nations $nation)
    {
        $this->nation = $nation;
    }
    
    /**
     * Returns the businessunit
     *
     * @return \PierraaDesign\SzagOrangemap\Domain\Model\Businessunit businessunit
     */
    public function getBusinessunit()
    {
        return $this->businessunit;
    }
    
    /**
     * Sets the businessunit
     *
     * @param \PierraaDesign\SzagOrangemap\Domain\Model\Businessunit $businessunit
     * @return void
     */
    public function setBusinessunit(\PierraaDesign\SzagOrangemap\Domain\Model\Businessunit $businessunit)
    {
        $this->businessunit = $businessunit;
    }

}