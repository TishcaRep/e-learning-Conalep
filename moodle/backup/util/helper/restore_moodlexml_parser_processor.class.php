<?php


require_once($CFG->dirroot.'/backup/util/xml/parser/processors/grouped_parser_processor.class.php');

class restore_moodlexml_parser_processor extends grouped_parser_processor {

    protected $accumchunks;

    public function __construct() {
        $this->accumchunks = array();
        parent::__construct();
        // Let's add all the paths we are interested on
        $this->add_path('/moodle_backup/information', true); // Everything will be grouped below this
        $this->add_path('/moodle_backup/information/details/detail');
        $this->add_path('/moodle_backup/information/contents/activities/activity');
        $this->add_path('/moodle_backup/information/contents/sections/section');
        $this->add_path('/moodle_backup/information/contents/course');
        $this->add_path('/moodle_backup/information/settings/setting');
    }

    protected function dispatch_chunk($data) {
        $this->accumchunks[] = $data;
    }

    protected function notify_path_start($path) {
        // nothing to do
    }

    protected function notify_path_end($path) {
        // nothing to do
    }

    public function get_all_chunks() {
        return $this->accumchunks;
    }

}
