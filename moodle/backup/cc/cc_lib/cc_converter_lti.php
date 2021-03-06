<?php
/**
* @package    backup-convert
* @subpackage cc-library
* @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
*/

require_once 'cc_converters.php';
require_once 'cc_general.php';
require_once 'cc_basiclti.php';

class cc_converter_lti extends cc_converter {

    public function __construct(cc_i_item &$item, cc_i_manifest &$manifest, $rootpath, $path){
        $this->cc_type     = cc_version11::basiclti;
        $this->defaultfile = 'lti.xml';
        $this->defaultname = basicltil1_resurce_file::deafultname;
        parent::__construct($item, $manifest, $rootpath, $path);
    }

    public function convert($outdir) {
        $rt = new basicltil1_resurce_file();
        $contextid = $this->doc->nodeValue('/activity/@contextid');
        $title = $this->doc->nodeValue('/activity/lti/name');
        $text = $this->doc->nodeValue('/activity/lti/intro');
        $rt->set_title($title);
        $result = cc_helpers::process_linked_files($text,
                                                   $this->manifest,
                                                   $this->rootpath,
                                                   $contextid,
                                                   $outdir);
        $rt->set_description($result[0]);
        $rt->set_launch_url($this->doc->nodeValue('/activity/lti/toolurl'));
        $rt->set_launch_icon('');
        $this->store($rt, $outdir, $title, $result[1]);
        return true;
    }
}
