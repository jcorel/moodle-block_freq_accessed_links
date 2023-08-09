<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Externallib file for sevices functions
 *
 * @package    block_freq_accessed_links
 * @copyright  2023, Brain Station 23
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

require_once("$CFG->libdir/externallib.php");

class block_freq_accessed_links_link_handler extends external_api {

    public static function insert_link_parameters() {
        return new external_function_parameters(
            array(
                'userid' => new external_value(PARAM_INT, "User ID"),
                'url' => new external_value(PARAM_TEXT, "URL visited by user"),
                'title' => new external_value(PARAM_TEXT, "Title of that url"),
            )
        );
    }

    public static function insert_link($userid, $url, $title) {
        return ['status' => 'instered'];
    }

    public static function insert_link_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_TEXT, 'Record inserted or not')
            )
        );
    }
}
