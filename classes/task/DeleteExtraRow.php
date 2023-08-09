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
 * Task schedule configuration for the plugintype_pluginname plugin.
 *
 * @package   block_freq_accessed_links
 * @copyright 2023, Brain Station 23
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_freq_accessed_links\task;

/**
 * An example of a scheduled task.
 */
class DeleteExtraRow extends \core\task\scheduled_task {

    /**
     * Return the task's name as shown in admin screens.
     *
     * @return string
     */
    public function get_name() {
        return get_string('delete_extra_row', 'block_freq_accessed_links');
    }

    /**
     * Execute the task.
     */
    public function execute() {
        global $USER, $DB;
        $query = "DELETE FROM {block_freq_accessed_links} WHERE id <
        (SELECT MIN(m.id) FROM (SELECT id FROM {block_freq_accessed_links}
        WHERE user_id=:id ORDER BY time_created DESC LIMIT 100) m)";

        $DB->execute($query, ['id' => $USER->id]);
    }
}
