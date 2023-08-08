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
 * Block definition class for the block_freq_accessed_links plugin.
 *
 * @package   block_freq_accessed_links
 * @copyright 2023, Brain Station 23
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('lib.php');

class block_freq_accessed_links extends block_base {

    /**
     * Initialises the block.
     *
     * @return void
     */
    public function init() {
        $this->title = get_string('pluginname', 'block_freq_accessed_links');
    }

    /**
     * Gets the block contents.
     *
     * @return string The block HTML.
     */
    public function get_content() {
        global $OUTPUT;

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass();
        $this->content->footer = '';

        // Add logic here to define your template data or any other content.
        $records = $this->get_url_records();

        $index = 1;
        foreach($records as $record) {
            $record->index = $index;
            $index++;
        }

        $templatecontext = [
            'records' => array_values($records)
        ];

        $this->content->text = $OUTPUT->render_from_template('block_freq_accessed_links/content', $templatecontext);

        return $this->content;
    }

    function get_url_records() {
        global $USER, $DB;

        $limit = get_config('block_freq_accessed_links', 'numrows');

        if ($limit <= 0) {
            $limit = 5;
        }
    
        $query = "SELECT *, COUNT(*) AS occurrences
        FROM {block_freq_accessed_links}
        WHERE user_id=:id
        GROUP BY url
        ORDER BY occurrences DESC
        LIMIT $limit";
    
        $records = $DB->get_records_sql($query, ['id' => $USER->id]);
    
        return $records;
     }

    function has_config() {
        return true;
    }

    public function instance_allow_multiple() {
        return false;
    }

    /**
     * Defines in which pages this block can be added.
     *
     * @return array of the pages where the block can be added.
     */
    public function applicable_formats() {
        return [
            'all' => true
        ];
    }
}