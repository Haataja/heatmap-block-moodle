<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Heatmap block config form 
 *
 * @copyright 2018 Hanna Haataja
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


class block_heatmap_edit_form extends block_edit_form {
        protected function specific_definition($mform) {
 
        // Section header title according to language file.
        $mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));
 
       /**
        * Options for how long back is the log viewed 
        */
        $timeoptions = array(
            'oneDay' => get_string('oneDay', 'block_heatmap'),
            'twoDays' => get_string('twoDays', 'block_heatmap'),
            'oneWeek' => get_string('oneWeek', 'block_heatmap'),
            'twoWeeks' => get_string('twoWeeks', 'block_heatmap'),
            'month' => get_string('month', 'block_heatmap'),
            'sincestart' => get_string('sincestart', 'block_heatmap'),
            'sinceforever' => get_string('sinceforever', 'block_heatmap'),
        );
        
        $timelabel = get_string('checkforactivity', 'block_heatmap');
        $mform->addElement('select','config_from',$timelabel,$timeoptions);
        $mform->setDefault('config_from','sincestart');
        $mform->addHelpButton('config_from','checkforactivity','block_heatmap');
    }
}
