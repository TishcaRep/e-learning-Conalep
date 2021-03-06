<?php


defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p>Die Datenbank konnte nicht angelegt werden.</p><p>Die angegebene Datenbank existiert nicht und das genannten Nutzerkonto hat keine Rechte, die Datenbank neu anzulegen. Die Datenbank-Konfiguration muss überprüft werden.</p>';
$string['cannotcreatelangdir'] = 'Verzeichnis \'lang\' wurde nicht angelegt';
$string['cannotcreatetempdir'] = 'Das Verzeichnis \'temp\' wurde nicht angelegt';
$string['cannotdownloadcomponents'] = 'Einige Komponenten können nicht geladen werden.';
$string['cannotdownloadzipfile'] = 'ZIP-Datei kann nicht heruntergeladen werden.';
$string['cannotfindcomponent'] = 'Komponente wurde nicht gefunden';
$string['cannotsavemd5file'] = 'Die md5-Datei wurde nicht gespeichert';
$string['cannotsavezipfile'] = 'Die ZIP-Datei wurde nicht gespeichert';
$string['cannotunzipfile'] = 'Die Datei kann nicht entpackt werden';
$string['componentisuptodate'] = 'Die Komponente ist aktuell.';
$string['dmlexceptiononinstall'] = '<p>Ein Datenbankfehler ist aufgetreten [{$a->errorcode}]. <br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'Die Überprüfung der heruntergeladenen Datei ist gescheitert';
$string['invalidmd5'] = 'Der Prüfwert ist ungültig. Versuchen Sie es bitte nochmal!';
$string['missingrequiredfield'] = 'Einige erforderliche Felder sind nicht ausgefüllt.';
$string['remotedownloaderror'] = '<p>Der Download auf Ihren Server konnte nicht ausgeführt werden. Prüfen Sie bitte die Proxy-Einstellungen, die PHP CURL Erweiterung wird dringend empfohlen.</p><p>Die Datei <a href="{$a->url}">{$a->url}</a> muss nun manuell herunter geladen, entpackt und auf den Server nach "{$a->dest}" kopiert werden. there.</p>';
$string['wrongdestpath'] = 'Falscher Pfad';
$string['wrongsourcebase'] = 'Falsche URL-Quelle';
$string['wrongzipfilename'] = 'Falscher ZIP-Dateiname';
