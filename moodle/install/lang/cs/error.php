<?php


defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p>Nelze vytvořit databázi.</p>
<p>Určená databáze neexistuje a uživatel nemá oprávnění k vytvoření databáze.</p>
<p>Správce stránek by měl ověřit konfiguraci databáze.</p>';
$string['cannotcreatelangdir'] = 'Nelze vytvořit adresář pro jazykové soubory';
$string['cannotcreatetempdir'] = 'Nelze vytvořit dočasný adresář';
$string['cannotdownloadcomponents'] = 'Nelze stáhnout komponenty';
$string['cannotdownloadzipfile'] = 'Nelze stáhnout soubor ZIP';
$string['cannotfindcomponent'] = 'Komponenta nenalezena';
$string['cannotsavemd5file'] = 'Nelze uložit soubor MD5';
$string['cannotsavezipfile'] = 'Nelze uložit soubor ZIP';
$string['cannotunzipfile'] = 'Nelze dekomprimovat soubor';
$string['componentisuptodate'] = 'Komponenta je aktuální';
$string['dmlexceptiononinstall'] = '<p>Došlo k chybě databáze [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'Selhala kontrola staženého souboru';
$string['invalidmd5'] = 'Ověření selhalo - zkuste to znovu';
$string['missingrequiredfield'] = 'Chybí některé z povinných polí';
$string['remotedownloaderror'] = '<p>Stahování komponenty na váš server selhalo. Prověřte nastavení proxy. Vřele doporučujeme PHP rozšíření cURL.</p>
<p>Nyní musíte stáhnout soubor <a href="{$a->url}">{$a->url}</a> ručně, překopírovat jej do "{$a->dest}" na vašem serveru a tam jej rozbalit.</p>';
$string['wrongdestpath'] = 'Chybné cílové umístění';
$string['wrongsourcebase'] = 'Chybné URL zdrojového serveru';
$string['wrongzipfilename'] = 'Chybné jméno souboru ZIP';
