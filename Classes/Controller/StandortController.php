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
 * StandortController
 */
class StandortController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * standortRepository
     *
     * @var \PierraaDesign\SzagOrangemap\Domain\Repository\StandortRepository
     * @inject
     */
    protected $standortRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $standorts = $this->standortRepository->findAll();
        $this->view->assign('standorts', $standorts);
    }
    
    /**
     * action show
     *
     * @param \Pierraa\SzagOrangemap\Domain\Model\Standort $standort
     * @return void
     */
    public function showAction(\Pierraa\SzagOrangemap\Domain\Model\Standort $standort)
    {
        $this->view->assign('standort', $standort);
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
     * @param \Pierraa\SzagOrangemap\Domain\Model\Standort $newStandort
     * @return void
     */
    public function createAction(\Pierraa\SzagOrangemap\Domain\Model\Standort $newStandort)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->standortRepository->add($newStandort);
        $this->redirect('list');
    }
    
    /**
     * action edit
     *
     * @param \Pierraa\SzagOrangemap\Domain\Model\Standort $standort
     * @ignorevalidation $standort
     * @return void
     */
    public function editAction(\Pierraa\SzagOrangemap\Domain\Model\Standort $standort)
    {
        $this->view->assign('standort', $standort);
    }
    
    /**
     * action update
     *
     * @param \Pierraa\SzagOrangemap\Domain\Model\Standort $standort
     * @return void
     */
    public function updateAction(\Pierraa\SzagOrangemap\Domain\Model\Standort $standort)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->standortRepository->update($standort);
        $this->redirect('list');
    }
    
    /**
     * action delete
     *
     * @param \Pierraa\SzagOrangemap\Domain\Model\Standort $standort
     * @return void
     */
    public function deleteAction(\Pierraa\SzagOrangemap\Domain\Model\Standort $standort)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->standortRepository->remove($standort);
        $this->redirect('list');
    }

}