<?php
/**
 * Copyright (c) Enalean, 2013. All rights reserved
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
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Tuleap. If not, see <http://www.gnu.org/licenses/
 */

class GitPresenters_GerritAsThirdPartyPresenter {

    public $form_action = 'add_missing_gerrit_access';

    public function third_party_access_text() {
        return $GLOBALS['Language']->getText('plugin_git', 'third_party_access_text');
    }

    public function third_party_synch_button() {
        return $GLOBALS['Language']->getText('plugin_git', 'third_party_synch_button');
    }

    public function third_party_synch_warning() {
        return $GLOBALS['Language']->getText('plugin_git', 'third_party_synch_warning');
    }
}
?>