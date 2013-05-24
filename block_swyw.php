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
     * Show What You Write interface
     *
     * @package    block
     * @subpackage swyw
     * @copyright  2013 Steve Bond
     * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
     */

class block_swyw extends block_base {

    public function init() {
        $this->title = get_string('swyw', 'block_swyw');
    }
    
    function applicable_formats() {
        return array('site' => false, 'my' => true, 'course-view' => false);
    }
    
    // The PHP tag and the curly bracket for the class definition
    // will only be closed after there is another function added in the next section.
    public function get_content() {
        // global $OUTPUT, $PAGE, $CFG;
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content         = new stdClass;
        $this->content->items  = array();
        $this->content->icons  = array();
        $this->content->footer = '';

// Capability test here - decide which one is appropriate
/*        if (has_capability('moodle/site:viewreports', $PAGE->context)) { // Basic capability for listing of reports.
        } */
        
        // Get current user details: names, email
        // Check if user exists on SWYW:
        //   Yes:
        //     Get token from SWYW
        //     Display form for uploading another file, with 'get matches' button and help
        //     Form action is swyw.php with POST data sent.
        //   No:
        //     Display form for uploading initial file, with 'register' button and help
        //     Form action is swyw.php with POST data sent.        

        return $this->content;
    // }
    }
}   // Here's the closing bracket for the class definition.
