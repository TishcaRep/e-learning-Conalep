<?php


defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Skrbniška mapa';
$string['availablelangs'] = 'Jezikovni paketi na voljo';
$string['chooselanguagehead'] = 'Izberite jezik';
$string['chooselanguagesub'] = 'Izberite jezika SAMO za namestitev. Pozneje boste lahko izbrali tudi jezike strani in uporabniške jezike.';
$string['clialreadyinstalled'] = 'Datoteka config.php že obstaja, prosimo uporabite admin/cli/upgrade.php, če želite posodobiti vašo stran.';
$string['cliinstallheader'] = 'Moodle {$a} namestitveni program z ukazno vrstico';
$string['databasehost'] = 'Gostitelj podatkovne baze';
$string['databasename'] = 'Ime podatkovne baze';
$string['databasetypehead'] = 'Izberite gonilnik podatkovne baze';
$string['dataroot'] = 'Podatkovna mapa';
$string['datarootpermission'] = 'Pravice za podatkovno mapo';
$string['dbprefix'] = 'Predpona tabel';
$string['dirroot'] = 'Mapa Moodle';
$string['environmenthead'] = 'Preverjanje vašega okolja ...';
$string['environmentsub2'] = 'Vsaka moodle izdaja ima nekatere minimalne PHP zahteve in številne mandatorne PHP razširitve. Pred vsako namestitvijo ali posodobitvijo se izvede popolna preverba okolja. Prosimo kontaktirajte strežniškega administratorja, če ne veste kako namestiti novo verzijo ali omogočiti PHP razširitev.';
$string['errorsinenvironment'] = 'Preverjanje okolja ni uspelo!';
$string['installation'] = 'Namestitev';
$string['langdownloaderror'] = 'Žal jezik »{$a}« ni bil nameščen. Postopek namestitve se bo nadaljeval v angleščini.';
$string['memorylimithelp'] = '<p>Omejitev pomnilnika PHP je trenutno na vašem strežniku nastavljena na {$a}.</p>

<p>To lahko povzroči, da bo imel Moodle pozneje težave s pomnilnikom. Še posebej,
   če imate vključenih veliko modulov oziroma veliko uporabnikov.</p>

<p>Priporočamo, da konfigurirate PHP z višjo omejitvijo, če je možno npr. 40M.
   To lahko poskusite storiti na več načinov:</p>
<ol>
<li>Če lahko, ponovno prevedite PHP z <i>--enable-memory-limit</i>.
    To bo omogočilo, da bo Moodle sam nastavil omejitev pomnilnik zase.</li>
<li>Če imate dostop do vaše datoteke php.ini, lahko spremenite vrednost <b>memory_limit</b>
    v tej datoteki na, recimo, 40M.  Če nimate dostopa, boste morda
    lahko prosili vašega skrbnika, da to naredi za vas.</li>
<li>Na nekaterih strežnikih PHP lahko ustvarite datoteko .htaccess v imeniku Moodle,
    ki naj vsebuje to vrstico:
    <p><blockquote>php_value memory_limit 40M</blockquote></p>
    <p>Vendar lahko to prepreči delovanje <b>vseh</b> PHP strani
    (ob prikazu strani boste videli napake) in boste morali odstraniti datoteko .htaccess.</p></li>
</ol>';
$string['paths'] = 'Poti';
$string['pathserrcreatedataroot'] = 'Podatkovna mapa ({$a->dataroot}) ne more biti ustvarjena z namestitvenim programom.';
$string['pathshead'] = 'Potrdite poti';
$string['pathsrodataroot'] = 'Korenska mapa ni za pisanje.';
$string['pathsroparentdataroot'] = 'Starševska mapa ({$a->parent}) ni za pisanje. Podatkovna mapa ({$a->dataroot}) ne more biti ustvarjena preko namestitvenega programa.';
$string['pathssubadmindir'] = 'Zelo malo Spletnih gostiteljev uporablja /admin kot posebni URL preko katerega dostopate do nadzorn plošče. Na žalost je to v konfliktu s standardno lokacijo za Moodlove skrbniške strani. To lahko popravite s preimenovanjemskrbniške mape v vaši namestitvi in vnesete tukaj to novo ime. Na primer: <em>moodleadmin</em>. To bo popravilo skrbniške povezave v Moodlu.';
$string['pathssubdataroot'] = 'Potrebujete prostor, kamor bo Moodle shranjeval naložene datoteke. Ta mapa naj ima omogočeno branje IN PISANJE s strani uporabnika spletnega strežnika (po navadi \'brez\' ali \'apache\'), ampak ne sme biti dostopno neposredno preko spleta. Namestitveni program jo bo poskušal ustvariti, če že ne obstaja.';
$string['pathssubdirroot'] = '<p>Polna pot do mape s kodo Moodle.</p>';
$string['pathssubwwwroot'] = 'Polni spletni naslov kjer bo Moodle dostopan. Dostop do Moodla z uporabo več naslovov ni mogoč. Če ima vaša stran več javnih naslovov, morate nastaviti trajne preusmeritve na vse naslove razen tega. Če je vaša stran dosropana preko interneta in omrežja, uporabite tukaj javne naslove in nastaviet DNS tako, da lahko uporabniki znotraj omrežja uporabljajo tudi javne naslove. Če naslovi niso pravilni prosimo spremenite URL v vašem brskalniku in ponovno poženite namestitev z drugo vrednostjo.';
$string['pathsunsecuredataroot'] = '({$a->dataroot})';
$string['pathswrongadmindir'] = 'Skrbniška mapa ne obstaja';
$string['phpextension'] = '{$a} PHP razširitev';
$string['phpversion'] = 'Različica PHP';
$string['phpversionhelp'] = '<p>Moodle zahteva različico PHP vsaj 4.3.0 ali 5.1.0 (5.0.x ima vrsto znanih težav).</p>
<p>Vaša trenutna različica je {$a}</p>
<p>Posodobiti in nadgraditi morate PHP ali premakniti program na strežnik s novejšo različico PHP!<br />
(V primeru različice 5.0.x lahko namestite tudi različico 4.4.x)</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'To stran vidite, ker ste uspešno namestili in
    zagnali paket <strong>{$a->packname} {$a->packversion}</strong> na vašem računalniku. Čestitamo!';
$string['welcomep30'] = 'Ta različica <strong>{$a->installername}</strong> vključuje aplikacije
    za ustvarjanje okolja v katerem bo deloval <strong>Moodle</strong> in sicer:';
$string['welcomep40'] = 'Ta paket vključuje tudi <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Uporabo vseh aplikacij v tem paketu določajo njihove ustrezne
    licence. Celoten paket <strong>{$a->installername}</strong> je
    <a href="http://www.opensource.org/docs/definition_plain.html">odprta koda</a> in se razširja
    pod licenco <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'Naslednje strani vas bodo popeljale skozi nekaj enostavno sledljivih korakov za
    konfiguracijo in nastavitev <strong>Moodle</strong>  na vašem računalniku. Sprejmete lahko privzete
    nastavitve ali jih, če tako želite, spremenite, da bodo ustrezale vašim potrebam.';
$string['welcomep70'] = 'Kliknite spodnji gumb "Naprej" za nadaljevanje nastavitve <strong>Moodle</strong>.';
$string['wwwroot'] = 'Spletni naslov';
