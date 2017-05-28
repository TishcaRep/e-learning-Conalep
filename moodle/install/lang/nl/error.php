<?php


defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p>Kan databank niet maken.</p>
<p>De opgegeven databank bestaat niet en de opgegeven gebruiker heeft onvoldoende rechten om de databank te maken.</p>
<p>De site-beheerder moet de databankconfiguratie controleren.</p>';
$string['cannotcreatelangdir'] = 'Kan lang map niet maken';
$string['cannotcreatetempdir'] = 'Kan tijdelijke map niet maken.';
$string['cannotdownloadcomponents'] = 'Kan componenten niet downloaden.';
$string['cannotdownloadzipfile'] = 'Kan ZIP-bestand niet downloaden.';
$string['cannotfindcomponent'] = 'Kan component niet vinden.';
$string['cannotsavemd5file'] = 'Kan md5-bestand niet bewaren.';
$string['cannotsavezipfile'] = 'Kan ZIP-bestand niet bewaren.';
$string['cannotunzipfile'] = 'Kon bestand niet unzippen';
$string['componentisuptodate'] = 'Component is up-to-date';
$string['dmlexceptiononinstall'] = '<p>Databankfout [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'Controle van het gedownloade bestand mislukt';
$string['invalidmd5'] = 'De controlevariable was fout - probeer nog eens';
$string['missingrequiredfield'] = 'Vereist veld ontbreekt';
$string['remotedownloaderror'] = '<p>De download van de component naar jouw server is mislukt, controleer je proxy-instellingen, de PHP cURL-extentie wordt ten zeerste aanbevolen te installeren.</p><p>Je moet je <a href="{$a->url}">{$a->url}</a> bestand manueel downloaden , kopiëren naar de map "{$a->dest}" op je server en het daar unzippen.</p>';
$string['wrongdestpath'] = 'Fout pad voor bestemming';
$string['wrongsourcebase'] = 'Foute URL voor de bron';
$string['wrongzipfilename'] = 'Foute ZIP-bestandsnaam';