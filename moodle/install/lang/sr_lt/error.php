<?php


defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p>Nije moguće kreirati bazu podataka.</p> <p>Navedena baza ne postoji, a dati korisnik nema ovlašćenja da kreira bazu podataka.</p> <p>Administrator sajta treba da proveri konfiguraciju baze podataka.</p>';
$string['cannotcreatelangdir'] = 'Nije moguće kreirati direktorijum jezika';
$string['cannotcreatetempdir'] = 'Nije moguće kreirati privremeni direktorijum';
$string['cannotdownloadcomponents'] = 'Nije moguće preuzeti komponente.';
$string['cannotdownloadzipfile'] = 'Nije moguće preuzeti arhivu';
$string['cannotfindcomponent'] = 'Nije moguće pronaći komponentu.';
$string['cannotsavemd5file'] = 'Nije moguće sačuvati md5 datoteku.';
$string['cannotsavezipfile'] = 'Nije moguće sačuvti ZIP arhivu.';
$string['cannotunzipfile'] = 'Nije moguće raspakovati ZIP datoteku.';
$string['componentisuptodate'] = 'Komponenta je dostupna u svojoj najnovijoj verziji';
$string['dmlexceptiononinstall'] = '<p>Došlo je do greške u bazi podataka [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'Nije uspela provera preuzete datoteke';
$string['invalidmd5'] = 'Neispravna md5 datoteka';
$string['missingrequiredfield'] = 'Nedostaje neko obavezno polje';
$string['remotedownloaderror'] = '<p>Preuzimanje ove komponente na vaš server nije uspelo. Proverite podešavanja proksi servera. PHP cURL ekstenzija se preporučuje.</p>
<p>Morate da preuzmete <a href="{$a->url}">{$a->url}</a> datoteku ručno, kopirate je u direktorijum "{$a->dest}" na svom serveru i tamo je raspakujete.</p>';
$string['wrongdestpath'] = 'Pogrešna odredišna putanja';
$string['wrongsourcebase'] = 'Pogrešna baza izvornog URL-a';
$string['wrongzipfilename'] = 'Pogrešan naziv arhive';
