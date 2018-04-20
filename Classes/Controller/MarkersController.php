<?php
namespace PierraaDesign\SzagOrangemap\Controller;

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
 * MarkersController
 */
class MarkersController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

     /**
     * nationsRepository
     *
     * @var \PierraaDesign\SzagOrangemap\Domain\Repository\NationsRepository
     * @inject
     */
    protected $nationsRepository = NULL;
    
    /**
     * citiesRepository
     *
     * @var \PierraaDesign\SzagOrangemap\Domain\Repository\CitiesRepository
     * @inject
     */
    protected $citiesRepository = NULL;
    
    /**
     * businessunitRepository
     *
     * @var \PierraaDesign\SzagOrangemap\Domain\Repository\BusinessunitRepository
     * @inject
     */
    protected $businessunitRepository = NULL;
    
    /**
     * companiesRepository
     *
     * @var \PierraaDesign\SzagOrangemap\Domain\Repository\CompaniesRepository
     * @inject
     */
    protected $companiesRepository = NULL;
    
    /**
     * markersRepository
     *
     * @var \PierraaDesign\SzagOrangemap\Domain\Repository\MarkersRepository
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
    
    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {
        
    }
    
    /**
     * action create
     *
     * @param \Pierraa\SzagOrangemap\Domain\Model\Markers $newMarkers
     * @return void
     */
    public function createAction(\Pierraa\SzagOrangemap\Domain\Model\Markers $newMarkers)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->markersRepository->add($newMarkers);
        $this->redirect('list');
    }
    
    /**
     * action edit
     *
     * @param \Pierraa\SzagOrangemap\Domain\Model\Markers $markers
     * @ignorevalidation $markers
     * @return void
     */
    public function editAction(\Pierraa\SzagOrangemap\Domain\Model\Markers $markers)
    {
        $this->view->assign('markers', $markers);
    }
    
    /**
     * action update
     *
     * @param \Pierraa\SzagOrangemap\Domain\Model\Markers $markers
     * @return void
     */
    public function updateAction(\Pierraa\SzagOrangemap\Domain\Model\Markers $markers)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->markersRepository->update($markers);
        $this->redirect('list');
    }
    
    /**
     * action delete
     *
     * @param \Pierraa\SzagOrangemap\Domain\Model\Markers $markers
     * @return void
     */
    public function deleteAction(\Pierraa\SzagOrangemap\Domain\Model\Markers $markers)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->markersRepository->remove($markers);
        $this->redirect('list');
    }

}