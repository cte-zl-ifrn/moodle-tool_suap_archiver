<?php
namespace local_suap\task;

require_once(\dirname(\dirname(\dirname(\dirname(__DIR__)))) . '/config.php');


defined('MOODLE_INTERNAL') || die();

class suap_archive_task extends \core\task\scheduled_task {
    public function get_name() {
        return get_string('suap_archive_task', 'tool_suap_archiver');
    }

    public function execute() {
        global $DB, $CFG;
        // TODO
    }
}