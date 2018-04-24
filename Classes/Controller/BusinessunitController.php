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
 * BusinessunitController
 */
class BusinessunitController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * businessunitRepository
     *
     * @var \PierraaGroup\SzagOrangemap\Domain\Repository\BusinessunitRepository
     * @inject
     */
    protected $businessunitRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        //   $businessunits = $this->businessunitRepository->findAll();
        $this->view->assign('businessunits', $businessunits);
    }
    
    /**
     * action show
     *
     * @param \PierraaGroup\SzagOrangemap\Domain\Model\Businessunit $businessunit
     * @return void
     */
    public function showAction(\PierraaGroup\SzagOrangemap\Domain\Model\Businessunit $businessunit)
    {
        $this->view->assign('businessunit', $businessunit);
    }
    
   

}