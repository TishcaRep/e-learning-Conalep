<?php

/**
 * @package    core_backup
 * @category   test
 * @copyright  2015 onwards Eloy Lafuente (stronk7) {@link http://stronk7.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// Include all the needed stuff
global $CFG;
require_once($CFG->dirroot . '/backup/util/includes/restore_includes.php');


class backup_restore_log_rule_testcase extends basic_testcase {

    function test_process_keeps_log_unmodified() {

        // Prepare a tiny log entry.
        $originallog = new stdClass();
        $originallog->url = 'original';
        $originallog->info = 'original';
        $log = clone($originallog);

        // Process it with a tiny log rule, only modifying url and info.
        $lr = new restore_log_rule('test', 'test', 'changed', 'changed');
        $result = $lr->process($log);

        // The log has been processed.
        $this->assertEquals('changed', $result->url);
        $this->assertEquals('changed', $result->info);

        // But the original log has been kept unmodified by the process() call.
        $this->assertEquals($originallog, $log);
    }
}
