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
class Tx_FsEvents_Domain_Model_Event extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * A logo, flyer or other image of the event.
	 *
	 * @var string
	 */
	protected $image;

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description;

	/**
	 * eventStartDate
	 *
	 * @var DateTime
	 * @validate NotEmpty
	 */
	protected $eventStartDate;

	/**
	 * eventEndDate
	 *
	 * @var DateTime
	 */
	protected $eventEndDate;

	/**
	 * price
	 *
	 * @var string
	 */
	protected $price;

	/**
	 * ticketLink
	 *
	 * @var string
	 */
	protected $ticketLink;

	/**
	 * category
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_FsEvents_Domain_Model_Category>
	 */
	protected $category;

	/**
	 * location
	 *
	 * @var Tx_FsEvents_Domain_Model_Location
	 */
	protected $location;

	/**
	 * The event-status
	 *
	 * @var Tx_FsEvents_Domain_Model_Status
	 */
	protected $status;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->category = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns the price
	 *
	 * @return string $price
	 */
	public function getPrice() {
		return $this->price;
	}

	/**
	 * Sets the price
	 *
	 * @param string $price
	 * @return void
	 */
	public function setPrice($price) {
		$this->price = $price;
	}

	/**
	 * Returns the ticketLink
	 *
	 * @return string $ticketLink
	 */
	public function getTicketLink() {
		return $this->ticketLink;
	}

	/**
	 * Sets the ticketLink
	 *
	 * @param string $ticketLink
	 * @return void
	 */
	public function setTicketLink($ticketLink) {
		$this->ticketLink = $ticketLink;
	}

	/**
	 * Returns the location
	 *
	 * @return Tx_FsEvents_Domain_Model_Location $location
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * Sets the location
	 *
	 * @param Tx_FsEvents_Domain_Model_Location $location
	 * @return void
	 */
	public function setLocation(Tx_FsEvents_Domain_Model_Location $location) {
		$this->location = $location;
	}

	/**
	 * Adds a Category
	 *
	 * @param Tx_FsEvents_Domain_Model_Category $category
	 * @return void
	 */
	public function addCategory(Tx_FsEvents_Domain_Model_Category $category) {
		$this->category->attach($category);
	}

	/**
	 * Removes a Category
	 *
	 * @param Tx_FsEvents_Domain_Model_Category $categoryToRemove The Category to be removed
	 * @return void
	 */
	public function removeCategory(Tx_FsEvents_Domain_Model_Category $categoryToRemove) {
		$this->category->detach($categoryToRemove);
	}

	/**
	 * Returns the category
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_FsEvents_Domain_Model_Category> $category
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Sets the category
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_FsEvents_Domain_Model_Category> $category
	 * @return void
	 */
	public function setCategory(Tx_Extbase_Persistence_ObjectStorage $category) {
		$this->category = $category;
	}

	/**
	 * Returns the image
	 *
	 * @return string $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 *
	 * @param string $image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
	}

	/**
	 * Returns the status
	 *
	 * @return Tx_FsEvents_Domain_Model_Status status
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * Sets the status
	 *
	 * @param Tx_FsEvents_Domain_Model_Status $status
	 * @return Tx_FsEvents_Domain_Model_Status status
	 */
	public function setStatus($status) {
		$this->status = $status;
	}

	/**
	 * Returns the eventStartDate
	 *
	 * @return DateTime eventStartDate
	 */
	public function getEventStartDate() {
		return $this->eventStartDate;
	}

	/**
	 * Sets the eventStartDate
	 *
	 * @param DateTime $eventStartDate
	 * @return DateTime eventStartDate
	 */
	public function setEventStartDate($eventStartDate) {
		$this->eventStartDate = $eventStartDate;
	}

	/**
	 * Returns the eventEndDate
	 *
	 * @return DateTime eventEndDate
	 */
	public function getEventEndDate() {
		return $this->eventEndDate;
	}

	/**
	 * Sets the eventEndDate
	 *
	 * @param DateTime $eventEndDate
	 * @return DateTime eventEndDate
	 */
	public function setEventEndDate($eventEndDate) {
		$this->eventEndDate = $eventEndDate;
	}

}
?>