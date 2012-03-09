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
class Tx_FsEvents_Domain_Repository_EventRepository extends Tx_Extbase_Persistence_Repository {
    /**
     *
     * @param array $arguments
     * @param integer $limit
     * @return type
     */
    public function findAll(array $arguments = array(), $limit = NULL) {
        $query = $this->createQuery();
        $constraint = $this->handleArguments($query, $arguments);
        if($constraint) {
            $query->matching($constraint);
        }
        #$this->handleOrdering($query, $arguments);
        $query->setOrderings(array('eventStartDate' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING));
        if($limit) {
            $query->setLimit($limit);
        }
        return $query->execute();
    }

    protected function handleArguments(Tx_Extbase_Persistence_Query $query, array $arguments = array()) {
        $constraint = NULL;
        $constraints = array();

        #if($parentConstraint) {
        #    $constraints[] = $parentConstraint;
        #}

        if($arguments['startDate']) {
            //$constraints[] = $query->greaterThanOrEqual();
        }






        if($arguments['occupationalField']) {
            $constraints[] = $query->equals('occupationalField.uid', $arguments['occupationalField']);
        }

        if($arguments['location']) {
            $constraints[] = $query->equals('location.uid', $arguments['location']);
        }

        if($arguments['keyword']) {
            $constraints[] = $query->logicalOr(
                $query->like('title', '%' . $arguments['keyword'] . '%'),
                $query->like('headerText', '%' . $arguments['keyword'] . '%'),
                $query->like('description', '%' . $arguments['keyword'] . '%')
            );
        }

        if(count($constraints) > 0) {
            $constraint = $query->logicalAnd($constraints);
        }

        return $constraint;
    }
}
?>