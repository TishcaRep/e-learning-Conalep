<?php

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/backup/util/interfaces/loggable.class.php'); // converters are loggable
require_once($CFG->dirroot . '/backup/util/interfaces/checksumable.class.php'); // req by backup.class.php
require_once($CFG->dirroot . '/backup/backup.class.php'); // provides backup::FORMAT_xxx constants
require_once($CFG->dirroot . '/backup/util/helper/convert_helper.class.php');
require_once($CFG->dirroot . '/backup/util/factories/convert_factory.class.php');
require_once($CFG->libdir . '/filelib.php');
