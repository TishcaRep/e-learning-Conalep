<?php


defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p>Az adatbázis nem hozható létre.</p> <p>A megadott adatbázis nem létezik, a felhasználó pedig nem jogosult létrehozni egyet.</p> <p>A portál rendszergazdájának ellenőrizni kell az adatbázis-beállításokat.</p>';
$string['cannotcreatelangdir'] = 'Nem hozható létre a lang könyvtár.';
$string['cannotcreatetempdir'] = 'Nem hozható létre a temp könyvtár.';
$string['cannotdownloadcomponents'] = 'Az összetevőket nem lehet letölteni.';
$string['cannotdownloadzipfile'] = 'A tömörített állományt nem lehet letölteni.';
$string['cannotfindcomponent'] = 'Nincs meg az összetevő.';
$string['cannotsavemd5file'] = 'Az md5 állományt nem lehet elmenteni.';
$string['cannotsavezipfile'] = 'A tömörített állományt nem lehet elmenteni.';
$string['cannotunzipfile'] = 'A tömörített állományt nem lehet kicsomagolni.';
$string['componentisuptodate'] = 'Az összetevő a legújabb.';
$string['dmlexceptiononinstall'] = '<p>Adatbázishiba történt [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'A letöltött állomány ellenőrzése nem sikerült.';
$string['invalidmd5'] = 'Az ellenőrző változó hibás volt – próbálkozzék ismét';
$string['missingrequiredfield'] = 'Egy szükséges mező hiányzik.';
$string['remotedownloaderror'] = 'Az összetevőt nem lehet szerverére letölteni, ellenőrizze a proxy beállításait. Ajánlatos a PHP cURL-bővítmény használata. A(z) <a href="{$a->url}">{$a->url}</a> állományt töltse le kézzel, másolja át szerverén a(z) "{$a->dest}" célkönyvtárba, és csomagolja ki ott.';
$string['wrongdestpath'] = 'Hibás célútvonal.';
$string['wrongsourcebase'] = 'Hibás forrás-URL.';
$string['wrongzipfilename'] = 'Hibás a tömörített állomány neve.';
