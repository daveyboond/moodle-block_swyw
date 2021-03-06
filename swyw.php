<?php

/**
 * Show What You Write processor
 *
 * @package    block
 * @subpackage swyw
 * @copyright  2013 Steve Bond
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Requested by SWYW block. Makes calls to SWYW web services and outputs results.
require_login();

// Get parameters
$mode = required_param('mode', PARAM_TEXT);
$filedata = optional_param('userfile', array(), PARAM_FILE); // Use PARAM_FILE for safe filenames

// If this is a request to create an account, call the webservice and deal with the return values

// If this is a request to get peers, call the webservice and deal with the return values


?>
