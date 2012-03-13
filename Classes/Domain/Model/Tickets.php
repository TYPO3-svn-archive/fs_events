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
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_FsEvents_Domain_Model_Tickets extends Tx_Extbase_DomainObject_AbstractEntity {

    /**
     * The title of the ticketstore
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title;

    /**
     * The type of ticketstore
     *
     * @var string
     */
    protected $type;

    /**
     * A external Url
     *
     * @var string
     */
    protected $urlExtern;

    /**
     * A internal Url
     *
     * @var string
     */
    protected $urlIntern;

    /**
     * tel
     *
     * @var string
     */
    protected $tel;

    /**
     * street
     *
     * @var string
     */
    protected $street;

    /**
     * zip
     *
     * @var string
     */
    protected $zip;

    /**
     * city
     *
     * @var string
     */
    protected $city;


    /**
     * country
     *
     * @var string
     */
    protected $country;

    /**
     * text
     *
     * @var string
     */
    protected $text;


    /**
     * get urlExternal
     *
     * @return string $urlExten
     */
    public function getUrlExtern() {
        return $this->urlExtern;
    }

    /**
     * Sets the urlExtern
     *
     * @param string $urlExtern
     * @return void
     */
    public function setUrlExtern($urlExtern) {
        $this->urlExtern = $urlExtern;
    }

    /**
     * Returns urlIntern
     *
     * @return string $urlIntern
     */
    public function getUrlIntern() {
        return $this->urlIntern;
    }

    /**
     * Sets urlIntern
     *
     * @param string $urlIntern
     * @return void
     */
    public function setUrlIntern($urlIntern) {
        $this->urlIntern = $urlIntern;
    }

    /**
     * Returns the tel
     *
     * @return string $tel
     */
    public function getTel() {
        return $this->tel;
    }

    /**
     * Sets the tel
     *
     * @param string $tel
     * @return void
     */
    public function setTel($tel) {
        $this->tel = $tel;
    }

    /**
     * Returns the tel
     *
     * @return string $tel
     */
    public function getTel() {
        return $this->tel;
    }

    /**
     * Sets the tel
     *
     * @param string $tel
     * @return void
     */
    public function setTel($tel) {
        $this->tel = $tel;
    }

    /**
     * Returns the street
     *
     * @return string $street
     */
    public function getStreet() {
        return $this->street;
    }

    /**
     * Sets the street
     *
     * @param string $street
     * @return void
     */
    public function setStreet($street) {
        $this->street = $street;
    }

    /**
     * Returns the zip
     *
     * @return string $zip
     */
    public function getZip() {
        return $this->zip;
    }

    /**
     * Sets the zip
     *
     * @param string $zip
     * @return void
     */
    public function setZip($zip) {
        $this->Zip = $zip;
    }

    /**
     * Returns the city
     *
     * @return string $city
     */
    public function getCity() {
        return $this->city;
    }

    /**
     * Sets the city
     *
     * @param string $city
     * @return void
     */
    public function setCity($city) {
        $this->city = $city;
    }

    /**
     * Returns the country
     *
     * @return string $country
     */
    public function getCountry() {
        return $this->country;
    }

    /**
     * Sets the country
     *
     * @param string $country
     * @return void
     */
    public function setCountry($country) {
        $this->country = $country;
    }
}
?>