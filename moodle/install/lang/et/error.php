<?php

defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p>Andmebaasi ei saa luua.</p>
<p>Määratud andmebaasi pole ja antud kasutajal puudub õigus andmebaasi loomiseks.</p>
<p>Õpikeskkonna administraator peab kontrollima andmebaasi konfiguratsiooni</p>';
$string['cannotcreatelangdir'] = 'Keelekataloogi ei saa luua';
$string['cannotcreatetempdir'] = 'Ajutist kataloogi ei saa luua';
$string['cannotdownloadcomponents'] = 'Komponente ei saa alla laadida';
$string['cannotdownloadzipfile'] = 'ZIP-faili ei saa alla laadida';
$string['cannotfindcomponent'] = 'Ei leia komponenti';
$string['cannotsavemd5file'] = 'MD5-faili ei saa salvestada';
$string['cannotsavezipfile'] = 'ZIP-faili ei saa salvestada';
$string['cannotunzipfile'] = 'Faili ei saa lahti pakkida.';
$string['componentisuptodate'] = 'Komponent on ajakohane';
$string['dmlexceptiononinstall'] = '<p>Ilmnes andmebaasitõrge [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'Allalaaditud faili kontroll nurjus';
$string['invalidmd5'] = 'Kontrolli muutuja oli vale – proovige uuesti';
$string['missingrequiredfield'] = 'Mõni nõutav väli on puudu';
$string['remotedownloaderror'] = '<p>Komponendi teie serverisse allalaadimine nurjus. Kontrollige puhvri sätteid; PHP laiend cURL on tungivalt soovitatav.</p>
<p>Peate faili <a href="{$a->url}">{$a->url}</a> käsitsi alla laadima, kopeerima selle oma serveris asukohta „{$a->dest}“ ja seal lahti pakkima.</p>';
$string['wrongdestpath'] = 'Vale sihtkohatee';
$string['wrongsourcebase'] = 'Vale allika URL-i baas';
$string['wrongzipfilename'] = 'Vale ZIP-faili nimi';
