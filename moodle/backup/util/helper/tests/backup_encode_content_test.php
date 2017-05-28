<?php

/**
 * @package    core_backup
 * @category   phpunit
 * @copyright  2013 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();


global $CFG;
require_once($CFG->dirroot . '/backup/util/includes/backup_includes.php');
require_once($CFG->dirroot . '/backup/moodle2/backup_course_task.class.php');



class backup_course_task_testcase extends basic_testcase {

    /**
     * Test the encode_content_links method for course.
     */
    public function test_course_encode_content_links() {
        global $CFG;
        $encoded = backup_course_task::encode_content_links(
                $CFG->wwwroot . '/course/view.php?id=123, ' .
                $CFG->wwwroot . '/grade/index.php?id=123, ' .
                $CFG->wwwroot . '/grade/report/index.php?id=123, ' .
                $CFG->wwwroot . '/badges/view.php?type=2&id=123 and ' .
                $CFG->wwwroot . '/user/index.php?id=123.');
        $this->assertEquals('$@COURSEVIEWBYID*123@$, $@GRADEINDEXBYID*123@$, ' .
                '$@GRADEREPORTINDEXBYID*123@$, $@BADGESVIEWBYID*123@$ and $@USERINDEXVIEWBYID*123@$.', $encoded);
    }
}
