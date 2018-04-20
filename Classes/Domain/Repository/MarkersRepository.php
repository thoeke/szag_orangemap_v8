<?php
namespace PierraaDesign\SzagOrangemap\Domain\Repository;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 Thorsten Hoeke <info@pierraa-design.de>, PierraaDesign Werbeagentur GmbH
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
 * The repository for Markers
 */







class MarkersRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function findMarkers($filters){
         
	$query = $this->createQuery();
        
	$query->statement('SELECT * from tx_szagorangemap_domain_model_markers');
	return $query->execute();
    }
    
    /**
     * @param $city
     */
    public function findCity($city){
         
	$query = $this->createQuery();
        
	$query->statement('SELECT title from tx_szagorangemap_domain_model_cities WHERE uid = $city');
	return $query->execute();
    }
    
    
    /**
     * @param $filters
     */
    public function findByFilter($filters) {
       
        $nations = $filters['snations'];
        $cities = $filters['scities'];
        $businessunits = $filters['sbusinessunits'];
        $companies = $filters['scompanies'];
        
        $query = $this->createQuery();
        $constraints = array();
        
        if (isset($nations) && !empty($nations) ) {
            $constraints[] =  $query->in( 'nation', array_filter($nations) );
	}
        if (isset($cities) && !empty($cities) ) {
            $constraints[] =  $query->in( 'city', array_filter($cities) );
	}
        if (isset($businessunits) && !empty($businessunits) ) {
            $constraints[] =  $query->in( 'businessunit', array_filter($businessunits) );
	}
        if (isset($companies) && !empty($companies) ) {
            $constraints[] =  $query->in( 'company', array_filter($companies) );
	}
        
      //  $constraints[] =  $query->equals('cityname', findCity($city));
        
        if (!empty($constraints)) {
            $query->matching(
                $query->logicalAnd($constraints)
             
            );
        }
                
        return $query->execute(true);
        
    }
    
}