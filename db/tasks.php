<?php
defined('MOODLE_INTERNAL') || die();

/**
 * Task schedule configuration for the local_suap plugin.
 *
 * @package   tool_suap_archiver
 * @copyright Year, You Name <your@email.address>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$tasks = [
    [
        'classname' => 'tool_suap_archiver\task\suap_archive_task',
        'blocking' => 1,
        'minute' => '*/1',
        'hour' => '*',
        'day' => '*',
        'month' => '*',
        'dayofweek' => '*',
    ],
];