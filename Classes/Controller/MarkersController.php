<?php
namespace PierraaGroup\SzagOrangemap\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 PierraaGroup Werbeagentur GmbH <info@pierraa-design.de>, PierraaGroup Werbeagentur GmbH
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
            
            $current = $this->citiesRepository->findByUid($marker['city']);
            if ($current != NULL) {
                $content[$key]['citytitle'] = $current->getTitle();
            }
            
            $current = $this->nationsRepository->findByUid($marker['nation']);
            if ($current != NULL) {
                $content[$key]['nationtitle'] = $current->getTitle();
            }

            $current = $this->businessunitRepository->findByUid($marker['businessunit']);
            if ($current != NULL) {
                $content[$key]['businessunittitle'] = $current->getTitle();
            }
            
            $current = $this->companiesRepository->findByUid($marker['company']);
            if ($current != NULL) {
                $content[$key]['companytitle'] = $current->getTitle();
            }
        }
           
        return json_encode(
            array(
                'success' => true,
                'arguments' => $filters,
                'content' => $content
            )
        );  
    }
    
    
    /**
     * action show
     *
     * @param \Pierraa\SzagOrangemap\Domain\Model\Markers $markers
     * @return void
     */
    public function showAction(\Pierraa\SzagOrangemap\Domain\Model\Markers $markers)
    {
        $this->view->assign('markers', $markers);
    }
    
   

}