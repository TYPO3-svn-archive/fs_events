<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Björn Biege <freeshsolutions@googlemail.com>
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
 *
 *
 * @package fs_events
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_FsEvents_Controller_EventController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * eventRepository
	 *
	 * @var Tx_FsEvents_Domain_Repository_EventRepository
	 */
	protected $eventRepository;

	/**
	 * injectEventRepository
	 *
	 * @param Tx_FsEvents_Domain_Repository_EventRepository $eventRepository
	 * @return void
	 */
	public function injectEventRepository(Tx_FsEvents_Domain_Repository_EventRepository $eventRepository) {
		$this->eventRepository = $eventRepository;
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
        #$this->response->addAdditionalHeaderData('<script type="text/javascript" src="' . t3lib_extMgm::siteRelPath($this->request->getControllerExtensionKey()) . 'Resources/Public/Js/tx_fsevents_accordion.js" /></script>');
        $configurationManager = $this->configurationManager->getContentObject();

        $GLOBALS['TSFE']->additionalHeaderData['tx_fsevents_accordion_map'] = '<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"> </script>

        <script type="text/javascript">
          function initialize(elementId) {
            var latlng = new google.maps.LatLng(-34.397, 150.644);
            var myOptions = {
              zoom: 8,
              center: latlng,
              mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            eval("if(typeof "+elementId+"_obj == \'undefined\') { " +
             "var "+elementId+"_obj = new google.maps.Map(document.getElementById(elementId), myOptions);" +
             " console.log(\'erstellt :)\');" +
            "} else { " +
             "console.log(\'gab es schon 0o\'); " +
            "}");
            //eval("var "+elementId+"_obj = new google.maps.Map(document.getElementById(elementId), myOptions)");
            //var map = new google.maps.Map(document.getElementById(elementId), myOptions);

//eval("console.log( "+elementId+"_obj );");
//eval("console.dir( "+elementId+"_obj );");
            //alert("test");
          }
        </script>
        ';


        // load js for accordion
        $GLOBALS['TSFE']->additionalHeaderData['tx_fsevents_accordion'] = '<script type="text/javascript" src="' . t3lib_extMgm::siteRelPath($this->request->getControllerExtensionKey()) . 'Resources/Public/Js/tx_fsevents_accordion.js"></script>';

        $events = $this->eventRepository->findAll();
        $this->view->assign('cObjData', $configurationManager->data);
		$this->view->assign('events', $events);
	}

	/**
	 * action show
	 *
	 * @param $event
	 * @return void
	 */
	public function showAction(Tx_FsEvents_Domain_Model_Event $event) {
		$this->view->assign('event', $event);
	}
}
?>