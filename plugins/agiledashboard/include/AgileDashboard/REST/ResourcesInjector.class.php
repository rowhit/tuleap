<?php
/**
 * Copyright (c) Enalean, 2013. All Rights Reserved.
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

use \Tuleap\AgileDashboard\REST\v1\MilestoneRepresentation;
use \Tuleap\AgileDashboard\REST\v1\PlanningRepresentation;

/**
 * Inject resource into restler
 */
class AgileDashboard_REST_ResourcesInjector {

    public function populate(Luracast\Restler\Restler $restler) {
        $restler->addAPIClass('\\Tuleap\\AgileDashboard\\REST\\v1\\MilestoneResource', MilestoneRepresentation::ROUTE);
        $restler->addAPIClass('\\Tuleap\\AgileDashboard\\REST\\v1\\PlanningResource',  PlanningRepresentation::ROUTE);
    }

    public function getProjectPlanningResource(Project $project, $version) {
        $project_representation  = $this->buildProjectRepresentation();
        $planning_representation = $this->buildPlanningRepresentation();

        return $project_representation::ROUTE . '/' . $project->getId() . '/' . $planning_representation::ROUTE;
    }

    private function buildProjectRepresentation() {
        return '\\Tuleap\\Project\\REST\\ProjectInfoRepresentation';
    }

    private function buildPlanningRepresentation() {
        return '\\Tuleap\\AgileDashboard\\REST\\v1\\PlanningRepresentation';
    }
}