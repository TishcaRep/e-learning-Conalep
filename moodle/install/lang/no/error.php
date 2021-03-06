<?php


defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p>Kan ikke opprette databasen.</p>
<p>Den angitte databasen eksisterer ikke og oppgitt bruker har ikke rettigheter til å opprette databasen.</p>
<p>Portaladministratoren må derfor verifisere databaseoppsettet.</p>';
$string['cannotcreatelangdir'] = 'Kan ikke opprette mappen \'lang\'.';
$string['cannotcreatetempdir'] = 'Kan ikke opprette mappen \'temp';
$string['cannotdownloadcomponents'] = 'Kan ikke laste ned komponentene.';
$string['cannotdownloadzipfile'] = 'Kan ikke laste ned ZIP-fil.';
$string['cannotfindcomponent'] = 'Kan ikke finne komponenten.';
$string['cannotsavemd5file'] = 'Kan ikke lagre md5-fil.';
$string['cannotsavezipfile'] = 'Kan ikke lagre ZIP-fil.';
$string['cannotunzipfile'] = 'Kan ikke pakke opp filen.';
$string['componentisuptodate'] = 'Komponenten er oppdatert';
$string['dmlexceptiononinstall'] = '<p>Det oppstod en databasefeil [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'Sjekk av nedlastet fil mislykkes.';
$string['invalidmd5'] = 'Ugyldig md5, prøv igjen';
$string['missingrequiredfield'] = 'Noen påkrevde felt mangler';
$string['remotedownloaderror'] = '<p>Mislykkes i å laste ned komponenten til din server, vennligst sjekk proxy-innstillingene. PHP cURL tillegget er sterkt anbefalt. </p>
<p>Du må laste ned <a href="{$a->url}">{$a->url}</a> filen manuelt, kopiere den til "{$a->dest}" på serveren din og pakke den ut der.</p>';
$string['wrongdestpath'] = 'Gal målmappe';
$string['wrongsourcebase'] = 'Feil kilde URL base';
$string['wrongzipfilename'] = 'Galt ZIP-filnavn.';
