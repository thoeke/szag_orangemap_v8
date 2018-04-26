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

class MapController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
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
     * Index action for this controller.
     *
     * @return string The rendered view
     */
    public function listAction()
    {

        $sql1 = $this->nationsRepository->findSorted();
        $this->view->assign('nation',$sql1);
        
        $sql2 = $this->citiesRepository->findSorted();
        $this->view->assign('city',$sql2);

        $sql3 = $this->businessunitRepository->findSorted();
        $this->view->assign('bunit',$sql3);

        $sql4 = $this->companiesRepository->findSorted();
        $this->view->assign('company',$sql4);


        $filters = $this->request->getArguments();  
        $this->view->assign('werte',$filters);

        #$sql5 = $this->markersRepository->findMarkers($filters);
        $sql5 = $this->markersRepository->findByFilter($filters);
        $this->view->assign('marker', $sql5);
        

        if ($GLOBALS['TSFE']->sys_language_uid == 2 ) {
            $this->view->assign('labelnation', 'Country');
            $this->view->assign('labelcity', 'City');
            $this->view->assign('labelbusiness', 'Business unit');
            $this->view->assign('labelcompany', 'Company');
            $this->view->assign('phnation', 'Choose a Country');
            $this->view->assign('phcity', 'Choose a City');
            $this->view->assign('phbu', 'Choose a business unit');
            $this->view->assign('phcompany', 'Choose a Company');
        }

        else {
            $this->view->assign('labelnation', 'Land');
            $this->view->assign('labelcity', 'Stadt');
            $this->view->assign('labelbusiness', 'Geschäftsbereich');
            $this->view->assign('labelcompany', 'Unternehmen');
            $this->view->assign('phnation', 'Wählen Sie ein Land');
            $this->view->assign('phcity', 'Wählen Sie eine Stadt');
            $this->view->assign('phbu', 'Wählen Sie einen Geschäftsbereich');
            $this->view->assign('phcompany', 'Wählen Sie ein Unternehmen');
        }

    }

}

?>