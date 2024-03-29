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
class Tx_FsEvents_Controller_CategoryController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * categoryRepository
	 *
	 * @var Tx_FsEvents_Domain_Repository_CategoryRepository
	 */
	protected $categoryRepository;

	/**
	 * injectCategoryRepository
	 *
	 * @param Tx_FsEvents_Domain_Repository_CategoryRepository $categoryRepository
	 * @return void
	 */
	public function injectCategoryRepository(Tx_FsEvents_Domain_Repository_CategoryRepository $categoryRepository) {
		$this->categoryRepository = $categoryRepository;
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$categories = $this->categoryRepository->findAll();
		$this->view->assign('categories', $categories);
	}

	/**
	 * action show
	 *
	 * @param $category
	 * @return void
	 */
	public function showAction(Tx_FsEvents_Domain_Model_Category $category) {
		$this->view->assign('category', $category);
	}

}
?>