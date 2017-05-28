<?php

/**
 * Contains class restore_gradingform_plugin responsible for advanced grading form plugin backup
 *
 * @package    core_backup
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Base class for restoring all advanced grading form plugins
 *
 * As an example of implementation see {@link restore_gradingform_rubric_plugin}
 *
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @category   backup
 */
abstract class restore_gradingform_plugin extends restore_plugin {

    /**
     * Helper method returning the mapping identifierto use for
     * grading form instance's itemid field
     *
     * @param array $areaname the name of the area the form is defined for
     * @return string the mapping identifier
     */
    public static function itemid_mapping($areaname) {
        return 'grading_item_'.$areaname;
    }
}
