<?php
namespace PierraaGroup\SzagOrangemap\Controller;

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
 * MarkersController
 */
class MarkersController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
     /**
     * nationsRepository
     *
     * @var \PierraaGroup\SzagOrangemap\Domain\Repository\NationsRepository
     * @inject
     */
    protected $nationsRepository = NULL;
    
    /**
     * citiesRepository
     *
     * @var \PierraaGroup\SzagOrangemap\Domain\Repository\CitiesRepository
     * @inject
     */
    protected $citiesRepository = NULL;
    
    /**
     * businessunitRepository
     *
     * @var \PierraaGroup\SzagOrangemap\Domain\Repository\BusinessunitRepository
     * @inject
     */
    protected $businessunitRepository = NULL;
    
    /**
     * companiesRepository
     *
     * @var \PierraaGroup\SzagOrangemap\Domain\Repository\CompaniesRepository
     * @inject
     */
    protected $companiesRepository = NULL;
    
    /**
     * markersRepository
     *
     * @var \PierraaGroup\SzagOrangemap\Domain\Repository\MarkersRepository
     * @inject
     */
    protected $markersRepository = NULL;
    
    /**
     * action list
     *
     * @return \string JSON
     */
    public function listAction()
    {
        $filters = $this->request->getArguments();  
        $content = $this->markersRepository->findByFilter($filters);
        
        foreach($content as $key => $marker) {
            
            $items[$key]['title'] = $marker->getTitle();
            $items[$key]['adress'] = $marker->getAdress();
            $items[$key]['zipcode'] = $marker->getzipcode();
            $items[$key]['website'] = $marker->getWebsite();
            $items[$key]['longitude'] = $marker->getLongitude();
            $items[$key]['latitude'] = $marker->getLatitude();
                                
            $current = $marker->getCity();
            $items[$key]['citytitle'] = $current->getTitle();
       
            $current = $marker->getNation();
         //   \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($current);
         //   $items[$key]['nationtitle'] = $current->getTitle();
         
            $current = $marker->getBusinessunit();
            $items[$key]['businessunittitle'] = $current->getTitle();
        
            $current = $marker->getCompany();
            $items[$key]['companytitle'] = $current->getTitle();

        }
           
        return json_encode(
            array(
                'success' => true,
                'arguments' => $filters,
                'content' => $items
            )
        );  
    }
    
    
}