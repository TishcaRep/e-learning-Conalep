<?php


defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Administratorski direktorijum';
$string['availablelangs'] = 'Dostupni jezički paketi';
$string['chooselanguagehead'] = 'Izaberite jezik';
$string['chooselanguagesub'] = 'Molimo izaberite jezik koji će se koristiti tokom instalacije. Ovaj jezik će, takođe, biti korišćen na nivou sajta kao podrazumevani, mada to naknadno može biti promenjeno.';
$string['clialreadyconfigured'] = 'Datoteka config.php već postoji. Molimo, koristite admin/cli/install_database.php ako želite da instalirate Moodle na ovom serveru.';
$string['clialreadyinstalled'] = 'Datoteka config.php već postoji. Molimo koristite admin/cli/upgrade.php ako želite da nadogradite Moodle na ovom serveru.';
$string['cliinstallheader'] = 'Moodle {$a} program za instalaciju iz komandne linije';
$string['databasehost'] = 'Server baze podataka';
$string['databasename'] = 'Ime baze podataka';
$string['databasetypehead'] = 'Izaberite drajver baze podataka';
$string['dataroot'] = 'Direktorijum podataka';
$string['datarootpermission'] = 'Ovlašćenja nad direktorijumom podataka';
$string['dbprefix'] = 'Prefiks tabele';
$string['dirroot'] = 'Moodle direktorijum';
$string['environmenthead'] = 'Proveravanje Vašeg okruženja...';
$string['environmentsub2'] = 'Svako izdanje Moodlea ima minimum zahteva po pitanju odgovarajuće PHP verzije i nekoliko obaveznih PHP ekstenzija.
Kompletna provera okruženja se vrši pre svake instalacije i nadogradnje postojeće verzije. Ukoliko ne znate kako da instalirate novu verziju ili omogućite PHP ekstenzije kontaktirajte svog administratora servera.';
$string['errorsinenvironment'] = 'Provera okruženja nije prošla!';
$string['installation'] = 'Instalacija';
$string['langdownloaderror'] = 'Nažalost, jezik "{$a}" se ne može preuzeti. Proces instalacije biće nastavljen na engleskom jeziku.';
$string['memorylimithelp'] = '<p>PHP ograničenje memorije za vaš server je trenutno podešeno na {$a}.</p>

<p>Ovo podešavanje može kasnije da prouzrokuje da Moodle ima problema sa memorijom, posebno ako imate mnogo aktiviranih modula i/ili mnogo korisnika.</p>

<p>Preporučujemo da konfigurišete PHP sa višim ograničenjem ako je moguće, recimo 40M. Postoji nekoliko načina na koje to može da se to uradi:</p><ol>
<li>Ako možete, rekompajlirajte PHP sa <i>--enable-memory-limit</i>. Ovo će omogućiti Moodle sistemu da sam postavi memorijsko ograničenje.</li>
<li>Ako imate pristup svojoj php.ini datoteci, možete promeniti vrednost za <b>memory_limit</b> na, recimo, 40M. Ako nemate pristup toj datoteci možete pitati svog administratora da to uradi umesto vas.</li>
<li>Na nekim PHP serverima možete da kreirate .htaccess datoteku u Moodle direktorijumu koja sadrži red:
<blockquote><div>php_value memory_limit 40M</div></blockquote>
<p>Međutim, na nekim serverima to će sprečiti prikazivanje <b>svih</b> PHP stranica (videćete poruku o grešci kada budete gledali stranice), pa ćete sa tih servera morati da uklonite .htaccess datoteku.</p></li>
</ol>';
$string['paths'] = 'Putanje';
$string['pathserrcreatedataroot'] = 'Instalaciona procedura ne može da kreira direktorijum baze podataka ({$a->dataroot}).';
$string['pathshead'] = 'Potvrdi putanje';
$string['pathsrodataroot'] = 'U direktorijum za podatke nije moguć upis';
$string['pathsroparentdataroot'] = 'Nije moguć upis u nadređeni direktorijum ({$a->parent}).  Instalacioni program ne može da kreira direktorijum za podatke ({$a->dataroot}).';
$string['pathssubadmindir'] = 'Vrlo mali broj veb servera koristi /admin kao specijalni URL za pristup raznim podešavanjima (kontrolni panel i sl.). Nažalost, to dovodi do konflikta sa standardnom lokacijom za administratorske stranice u Moodleu. Ovaj problem možete rešiti tako što ćete promeniti ime administratorskog direktorijuma u vašoj instalaciji, i ovde upisati to novo ime. Na primer <em>moodleadmin</em>. Ovo podešavanje će prepraviti administratorske linkove u Moodle sistemu.';
$string['pathssubdataroot'] = '<p>Direktorijum gde će Moodle čuvati datoteke i sadržaj koji su postavili korisnici. </p>
<p>Ovaj direktorijum treba da bude podešen tako da korisnik veb servera (obično \'nobody\' ili \'apache\') može da ga čita i u njega upisuje.</p>
<p>Direktorijum ne sme biti dostupan direktno preko veba. </p>
<p>Ukoliko ovaj direktorijum ne postoji proces instalacije će pokušati da ga kreira.</p>';
$string['pathssubdirroot'] = '<p>Puna putanja do direktorijuma koji sadrži kôd Moodlea.</p>';
$string['pathssubwwwroot'] = '<p>Puna adresa putem koje će se pristupati Moodleu, tj. adresa koju će korisnici uneti u adresnu traku svojih veb čitača kako bi pristupili Moodleu.</p>
<p>Nije moguće pristupati Moodleu korišćenjem više adresa Ako se vašem sajtu može pristupiti sa više adresa, onda izaberite najlakšu, a za sve ostale adrese podesite permanentnu redirekciju.</p>
<p>Ako se vašem sajtu može pristupiti sa interneta ali i sa unutrašnje mreže (koja se ponekad naziv intranet), onda ovde upotrebite javnu adresu.</p>
<p>Ako je tekuća adresa netačna, molimo vas, promenite URL adresu u adresnoj traci svog veb čitača i ponovo pokrenite instalaciju.</p>';
$string['pathsunsecuredataroot'] = 'Dataroot lokacija nije bezbedna';
$string['pathswrongadmindir'] = 'Admin direktorijum ne postoji';
$string['phpextension'] = '{$a} PHP ekstenѕija';
$string['phpversion'] = 'PHP verzija';
$string['phpversionhelp'] = '<p>Moodle zahteva najmanje PHP verziju 5.6.7 ili 7.1 (7.0.x ima neka ograničenja).</p>
<p>Trenutno koristite verziju {$a}</p>
<p>Morate da nadogradite PHP ili da premestiti Moodle na veb server sa novijom verzijom PHP-a.</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Ovu stranicu vidite zato što ste uspešno instalirali i pokrenuli <strong>{$a->packname} {$a->packversion}</strong> paket na svom serveru. Čestitamo!';
$string['welcomep30'] = 'Ovo izdanje <strong>{$a->installername}</strong> uključuje aplikacije za kreiranje okruženja u kojem će <strong>Moodle</strong> uspešno funkcionisati, konkretno:';
$string['welcomep40'] = 'Ovaj paket obuhvata i <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Korišćenje svih aplikacija ovog paketa je uređeno njihovim licencama. Kompletan<strong>{$a->installername}</strong> paket je <a href="http://www.opensource.org/docs/definition_plain.html">otvorenog koda</a> i distribuira se pod <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a> licencom.';
$string['welcomep60'] = 'Naredne stranice će vas provesti kroz nekoliko jednostavnih koraka tokom kojih ćete konfigurisati i podesiti <strong>Moodle</strong> na svom računaru. Možete prihvatiti podrazumevana podešavanja ili ih, opciono, prilagoditi sopstvenim potrebama.';
$string['welcomep70'] = 'Kliknite na dugme za nastavak da biste dalje podešavali <strong>Moodle</strong>.';
$string['wwwroot'] = 'Web adresa';
