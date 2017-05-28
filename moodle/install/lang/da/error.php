<?php


defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p>Kan ikke oprette databasen.</p> <p>Den specificerede database eksisterer ikke og brugeren har ikke tilladelse til at oprette den.</p> <p>Administrator bør verificere databasekonfigurationen.</p>';
$string['cannotcreatelangdir'] = 'Kan ikke oprette sprogmappe';
$string['cannotcreatetempdir'] = 'Kan ikke oprette temp-mappe';
$string['cannotdownloadcomponents'] = 'Kan ikke downloade komponenter';
$string['cannotdownloadzipfile'] = 'Kan ikke downloade zip-fil';
$string['cannotfindcomponent'] = 'Kan ikke finde komponent';
$string['cannotsavemd5file'] = 'Kan ikke gemme md5-fil';
$string['cannotsavezipfile'] = 'Kan ikke gemme zip-fil';
$string['cannotunzipfile'] = 'Kan ikke pakke filen ud';
$string['componentisuptodate'] = 'Komponenten er ajour';
$string['dmlexceptiononinstall'] = '<p>En databasefejl er opstået [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'Downloadet fil-tjek mislykkedes';
$string['invalidmd5'] = 'Tjekvariablen var forkert - prøv igen';
$string['missingrequiredfield'] = 'Der mangler nogle obligatoriske felter';
$string['remotedownloaderror'] = '<p>Download af komponenten til din server mislykkedes. Verificer proxy-indstillilngerne, udvidelsen PHP cURL anbefales kraftigt. </p> <p>Du skal downloade filen <a href="{$a->url}">{$a->url}</a> manuelt, kopiere den til "{$a->dest}" på din server og udpakke den der.</p>';
$string['wrongdestpath'] = 'Forkert destinationssti';
$string['wrongsourcebase'] = 'Forkert kilde-URL';
$string['wrongzipfilename'] = 'Forkert zip-filnavn';