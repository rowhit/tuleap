<?php
/**
 * Copyright (c) Enalean, 2014. All Rights Reserved.
 *
 * This file is a part of Tuleap.
 *
 * Tuleap is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Tuleap is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Tuleap. If not, see <http://www.gnu.org/licenses/>.
 */

class Tracker_Artifact_XMLImport_XMLImportFieldStrategyOpenList implements Tracker_Artifact_XMLImport_XMLImportFieldStrategy {
    const FORMAT_ID = 'id';

    /**
     * Extract Field data from XML input
     *
     * @param Tracker_FormElement_Field $field
     * @param SimpleXMLElement $field_change
     *
     * @return mixed
     */
    public function getFieldData(Tracker_FormElement_Field $field, SimpleXMLElement $field_change) {
        $values = array();
        foreach ($field_change->value as $value) {
            $values[] = (string) $this->getFieldChangeId($field, $value);
        }

        return implode(',', $values);
    }

    private function getFieldChangeId(Tracker_FormElement_Field $field, $value) {
        if (isset($value['format']) && (string) $value['format'] === self::FORMAT_ID){
            return (string) $value;
        }

        return $field->getFieldData((string) $value);
    }
}