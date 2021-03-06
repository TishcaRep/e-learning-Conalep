<?php

defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p>Cannot create the database.</p>
<p>The specified database does not exist and the given user does not have permission to create the database.</p>
<p>The site administrator should verify database configuration.</p>';
$string['cannotcreatelangdir'] = 'Cannot create lang directory';
$string['cannotcreatetempdir'] = 'Cannot create temp directory';
$string['cannotdownloadcomponents'] = 'Cannot download components';
$string['cannotdownloadzipfile'] = 'Cannot download ZIP file';
$string['cannotfindcomponent'] = 'Cannot find component';
$string['cannotsavemd5file'] = 'Cannot save md5 file';
$string['cannotsavezipfile'] = 'Cannot save ZIP file';
$string['cannotunzipfile'] = 'Cannot unzip file';
$string['componentisuptodate'] = 'Component is up-to-date';
$string['dmlexceptiononinstall'] = '<p>A database error has occurred [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'Downloaded file check failed';
$string['invalidmd5'] = 'The check variable was wrong - try again';
$string['missingrequiredfield'] = 'Some required field is missing';
$string['remotedownloaderror'] = '<p>The download of the component to your server failed. Please verify proxy settings; the PHP cURL extension is highly recommended.</p>
<p>You must download the <a href="{$a->url}">{$a->url}</a> file manually, copy it to "{$a->dest}" in your server and unzip it there.</p>';
$string['wrongdestpath'] = 'Wrong destination path';
$string['wrongsourcebase'] = 'Wrong source URL base';
$string['wrongzipfilename'] = 'Wrong ZIP file name';
