<?php


defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p>No es pot crear la base de dades.</p> <p>La base de dades especificada no existeix i l\'usuari que heu proporcionat no té permís per a crear-la.</p>
<p>L\'administrador del lloc hauria de verificar la configuració de la base de dades.</p>';
$string['cannotcreatelangdir'] = 'No s\'ha pogut crear el directori d\'idiomes';
$string['cannotcreatetempdir'] = 'No s\'ha pogut crear el directori temporal';
$string['cannotdownloadcomponents'] = 'No s\'han pogut baixar components';
$string['cannotdownloadzipfile'] = 'No s\'ha pogut baixar el fitxer ZIP';
$string['cannotfindcomponent'] = 'No s\'ha pogut trobar el component';
$string['cannotsavemd5file'] = 'No s\'ha pogut desar el fitxer md5';
$string['cannotsavezipfile'] = 'No s\'ha pogut desar el fitxer ZIP';
$string['cannotunzipfile'] = 'No s\'ha pogut descomprimir el fitxer';
$string['componentisuptodate'] = 'El component està actualitzat';
$string['dmlexceptiononinstall'] = '<p>S\'ha produït un error de la base de dades [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'Ha fallat la comprovació del fitxer baixat';
$string['invalidmd5'] = 'L\'md5 no és vàlid. Torneu-ho a provar';
$string['missingrequiredfield'] = 'Falta algun camp necessari';
$string['remotedownloaderror'] = '<p>No s\'ha pogut baixar el component al vostre servidor. Verifiqueu els paràmetres del servidor intermediari. Es recomana vivament l\'extensió cURL de PHP.</p>
<p>Haureu de baixar manualment el fitxer <a href="{$a->url}">{$a->url}</a>, copiar-lo a la ubicació «{$a->dest}» del vostre servidor i descomprimir-lo allí.</p>';
$string['wrongdestpath'] = 'El camí de destinació és erroni';
$string['wrongsourcebase'] = 'L\'adreça (URL) base de la font és errònia';
$string['wrongzipfilename'] = 'El nom del fitxer ZIP és erroni';
