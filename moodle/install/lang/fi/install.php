<?php


defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Ylläpitohakemisto';
$string['availablelangs'] = 'Saatavilla olevat kielipaketit';
$string['chooselanguagehead'] = 'Valitse kieli';
$string['chooselanguagesub'] = 'Valitse kieli asennusohjelmaa varten. Tätä kieltä käytetään sivuston oletuskielenä, jonka voi vaihtaa tarpeen mukaan. Myöhemmin voit myös lisätä käyttöön muitakin kieliä.';
$string['clialreadyconfigured'] = 'Tiedosto config.php on jo olemassa, käytä admin/cli/install_database.php -tiedostoa jos haluat asentaa tämän sivuston.';
$string['clialreadyinstalled'] = 'Tiedosto config.php on jo olemassa, ole hyvä ja käytä admin/cli/upgrade.php:ta jos haluat päivittää sivustosi';
$string['cliinstallheader'] = 'Moodlen {$a} komentoriviasennusohjelma';
$string['databasehost'] = 'Tietokannan isäntä';
$string['databasename'] = 'Tietokannan nimi';
$string['databasetypehead'] = 'Valitse tietokannan ajuri';
$string['dataroot'] = 'Datahakemisto';
$string['datarootpermission'] = 'Datahakemistojen oikeudet';
$string['dbprefix'] = 'Taulukon etumerkki';
$string['dirroot'] = 'Moodle-hakemisto';
$string['environmenthead'] = 'Ympäristön tarkistus';
$string['environmentsub2'] = 'Jokaisessa Moodle-julkaisussa on joitakin vähimmäisvaatimuksia PHP-versiolta sekä joitakin pakollisia PHP-lisäosia.
Ennen jokaista asennusta ja päivitystä suoritetaan täysi ympäristön tarkistus. Ole hyvä ja ota yhteyttä palvelimen ylläpitoon jos et tiedä kuinka asentaa uutta versiota tai PHP-lisäosia.';
$string['errorsinenvironment'] = 'Ympäristön tarkastus epäonnistui!';
$string['installation'] = 'Asennus';
$string['langdownloaderror'] = 'Valitettavasti kieltä "{$a}" ei voitu ladata. Asennus jatkuu englanniksi.';
$string['memorylimithelp'] = '<p>PHP muistiraja palvelimellesi on tällä hetkellä asetettu {$a}:han.</p>

<p>Tämä saattaa aiheuttaa Moodlelle muistiongelmia myöhemmin, varsinkin jos sinulla on paljon mahdollisia moduuleita ja/tai paljon käyttäjiä.</p>

<p>Suosittelemme, että valitset asetuksiksi PHP:n korkeimmalla mahdollisella raja-arvolla, esimerkiksi 40M.
On olemassa monia tapoja joilla voit yrittää tehdä tämän:</p>
<ol>
<li>Jos pystyt, uudelleenkäännä PHP <i>--enable-memory-limit</i>. :llä.
Tämä sallii Moodlen asettaa muistirajan itse.</li>
<li>Jos sinulla on pääsy php.ini tiedostoosi, voit muuttaa <b>memory_limit</b> asetuksen siellä johonkin kuten 40M. Jos sinulla ei ole pääsyoikeutta, voit kenties pyytää ylläpitäjää tekemään tämän puolestasi.</li>
<li>Joillain PHP palvelimilla voit luoda a .htaccess tiedoston Moodle hakemistossa, sisältäen tämän rivin:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>Kuitenkin, joillain palvelimilla tämä estää  <b>kaikkia</b> PHP sivuja toimimasta (näet virheet, kun katsot sivuja), joten sinun täytyy poistaa .htaccess tiedosto.</p></li>
</ol>';
$string['paths'] = 'Polut';
$string['pathserrcreatedataroot'] = 'Asennusohjelma ei voi luoda datahakemistoa ({$a->dataroot}).';
$string['pathshead'] = 'Varmista polut';
$string['pathsrodataroot'] = 'Dataroot-hakemisto ei ole kirjoitettavissa.';
$string['pathsroparentdataroot'] = 'Ylähakemisto ({$a->parent}) ei ole kirjoitettavissa. Asennusohjelma ei voi luoda datahakemistoa ({$a->dataroot}).';
$string['pathssubadmindir'] = 'Jotkut sivustot käyttävät /admin URL-osoitetta hallintapaneelille tai vastaavalle. Tämä on valitettavasti ristiriidassa Moodlen normaalin admin-sivun sijainnin kanssa.
Voit korjata tämän nimeämällä asennuksesi admin-hakemiston uudelleen, antamalla uuden nimen tähän. Esimerkiksi: <em>moodleadmin</em>. Tämä korjaa admin-linkit Moodlessa.';
$string['pathssubdataroot'] = 'Tarvitset paikan, jonne Moodle voi tallentaa ladatut tiedostot. Tämän hakemiston pitäisi olla luettavissa ja kirjoitettavissa web-palvelimen käyttäjän taholta (yleensä "nobody" tai "apache"), mutta se ei saa olla käytettävissä suoraan web:in kautta. Jos hakemistoa ei ole, asennusohjelma yrittää luoda sen.';
$string['pathssubdirroot'] = 'Koko hakemistopolku Moodle-asennukseen.';
$string['pathssubwwwroot'] = 'Moodlen koko verkko-osoite.
Moodleen ei ole mahdollista päästä käyttäen useita osoitteita.
Jos sivustollasi on useita julkisisa osoitteita, sinun täytyy asettaa pysyvät ohjaukset kaikkiin niistä lukuunottamatta tätä.
Jos sivustollesi on pääsy sekä Intranetistä että Internetistä, käytä tässä julkista osoitetta ja aseta DNS niin, että myös Intranet-käyttäjät voivat käyttää julkista osoitetta.
Jos osoite ei ole oikea, muuta URL-osoitetta selaimessasi aloittaaksesi asennuksen uudelleen eri arvolla.';
$string['pathsunsecuredataroot'] = 'Dataroot-sijainti on turvallinen';
$string['pathswrongadmindir'] = 'Admin-hakemistoa ei ole';
$string['phpextension'] = '{$a} PHP-lisäosa';
$string['phpversion'] = 'PHP versio';
$string['phpversionhelp'] = '<p>Moodle vaatii vähintään PHP-version 4.3.0 tai 5.1.0 (5.0.x sisältää monia tunnettuja ongelmia).</p> <p>Käytössäsi on versio {$a}</p> <p>Sinun pitää päivittää PHP tai siirtää palvelimelle jossa on uudempi PHP.<br /> (Jos käytössäsi on 5.0.x voit myös päivittää alaspäin 4.4.x -versioon)</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Näet tämän sivun koska olet onnistuneesti asentanut ja käynnistänyt <strong>{$a->packname} {$a->packversion}</strong> paketin tietokoneellasi.
Onnittelut!';
$string['welcomep30'] = 'Tämä julkaisu <strong>{$a->installername}</strong> sisältää sovellukset ympäristön luomiseen, jossa <strong>Moodle</strong> toimii:';
$string['welcomep40'] = 'Tämä paketti sisältää myös <strong>Moodlen {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Kaikkia tämän paketin sovelluksia hallitsevat niihin liittyvät lisenssit. Koko <strong>{$a->installername}</strong> paketti on <a href="http://www.opensource.org/docs/definition_plain.html">avointa lähdekoodia</a> ja sitä jaellaan <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a> lisenssin alla.';
$string['welcomep60'] = 'Seuraavat sivut opastavat sinua helposti seurattavien vaiheiden läpi <strong>Moodlen</strong> konfiguroinnissa koneellesi. Voit hyväksyä oletusasetukset tai vaihtoehtoisesti muuttaa niitä tarvitsemallasi tavalla.';
$string['welcomep70'] = 'Napsauta "Seuraava"-painiketta jatkaaksesi moodlen asennusta';
$string['wwwroot'] = 'Web-osoite';
