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
 * NationsController
 */
class NationsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * nationsRepository
     *
     * @var \PierraaGroup\SzagOrangemap\Domain\Repository\NationsRepository
     * @inject
     */
    protected $nationsRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $nations = $this->nationsRepository->findAll();
        $this->view->assign('nations', $nations);
    }
    
    /**
     * action show
     *
     * @param \Pierraa\SzagOrangemap\Domain\Model\Nations $nations
     * @return void
     */
    public function showAction(\Pierraa\SzagOrangemap\Domain\Model\Nations $nations)
    {
        $this->view->assign('nations', $nations);
    }
    

}