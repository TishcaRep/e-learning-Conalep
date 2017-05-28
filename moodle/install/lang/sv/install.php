<?php


defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Katalog/mapp för administration';
$string['availablelangs'] = 'Tillgängliga språkpaket';
$string['chooselanguagehead'] = 'Välj ett språk';
$string['chooselanguagesub'] = 'Var snäll och välj ett språk  för installationen. Du kommer att ha möjlighet att välja språk för webbplatsen och användarna på en senare skärm.';
$string['clialreadyinstalled'] = 'Filen config.php finns redan, var snäll och använd admin/cli/upgrade.php om Du vill uppgradera Din webbplats.';
$string['cliinstallheader'] = 'Installationsprogram av typ kommandorad {$a} för Moodle ';
$string['databasehost'] = 'Värd för databas';
$string['databasename'] = 'Namn på databas';
$string['databasetypehead'] = 'Välj drivrutin för databasen';
$string['dataroot'] = 'katalog för data';
$string['dbprefix'] = 'Prefix för tabeller';
$string['dirroot'] = 'Katalogen för Moodle';
$string['environmenthead'] = 'Undersöker Din miljö...';
$string['errorsinenvironment'] = 'Kontrollen av miljön misslyckades';
$string['installation'] = 'Installation';
$string['langdownloaderror'] = 'Språket "{$a}" gick tyvärr inte att ladda ner. Installationen kommer att fullföljas på engelska.';
$string['memorylimithelp'] = '<p>Den aktuella minnesbegränsningen för PHP på Din server är  inställt till {$a}.</p>
<p>Detta kan förorsaka att Moodle får minnesproblem senare, särskilt om Du har aktiverat många moduler och/eller har många användare.</p>
<p>Vi rekommenderar att Du konfigurerar PHP med en högre begränsning, som t ex 16M. Det finns flera sätt att göra detta som Du kan pröva med:</p> <ol>
<li>Om Du har möjlighet till det så kan Du kompilera om PHP med<i>--enable-memory-limit </i>Detta gör det möjligt för Moodle att ställa in minnesbegränsningen själv. </li>
<li>Om Du har tillgång till Din php.ini-fil så kan Du ändra inställningen för <b>memory limit</b> till något i stil med 16M. Om Du inte har tillgång själv så kan Du kanske be Din systemadministratör att göra detta åt Dig.</li>
<li>På en del PHP-servrar kan Du skapa en .htaccess-fil i Moodle-katalogen som innehåller den här raden: <blockquote>php_value memory_limit 16M</blockquote>.<br />Detta kan dock på en del servrar leda till att <b>inga</b> PHP-sidor fungerar. (Du får Error-sidor istället för de riktiga) så då får Du ta bort .htaccess-filen.</li>
</ol>';
$string['paths'] = 'Vägar';
$string['pathserrcreatedataroot'] = 'Datakatalogen ({$a->dataroot}) går inte att skapa med hjälp av installeraren.';
$string['pathshead'] = 'Bekräfta vägar';
$string['pathsrodataroot'] = 'Det går inte att skriva till katalogen för dataroot';
$string['pathsroparentdataroot'] = 'Det går inte att skriva till föräldrakatalogen ({$a->parent}). Det går inte att installera datakatalogen ({$a->dataroot}) med hjälp av installeraren. ';
$string['pathssubdirroot'] = 'Full sökväg till installationen av moodle.';
$string['pathsunsecuredataroot'] = 'Placeringen av dataroot är inte säker';
$string['pathswrongadmindir'] = 'Katalogen för admin saknas';
$string['phpextension'] = '{$a} PHP tillägg';
$string['phpversion'] = 'PHP-version';
$string['phpversionhelp'] = '<p>Moodle kräver minst PHP 4.3.0 eller 5.1.0 (det finns ett antal kända problem med 5.0.x)</p>
<p>Du använder f n version {$a}</p>
<p>Du måste uppgradera PHP eller flytta till en värd som har en nyare version av PHP! Om Du har 5.0.x så bör Du nedgradera till 4.4.x.</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Du ser detta eftersom Du framgångsrikt har installerat och börjat använda språkpaketet <strong>{$a->packname} {$a->packversion}</strong> på Din dator. Gratulerar!';
$string['welcomep30'] = 'I den här versionen av <strong>{$a->installername}</strong> ingår de applikationer som kan skapa en miljö som <strong>Moodle</strong> kan fungera i, nämligen:';
$string['welcomep40'] = 'I paketet ingår även <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Användningen av alla applikationerna i det här paketet regleras av deras respektive licenser. Det kompletta paketet <strong>{$a->installername}</strong>  är <a href="http://www.opensource.org/docs/definition_plain.html">Öppen källkod </a> och distribueras
under <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a> licensen.';
$string['welcomep60'] = 'De följande sidorna leder Dig genom några enkla steg för att konfigurera och installera <strong>Moodle</strong> på Din dator, Du kan acceptera standardinställningarna eller, alternativt, modifiera dem som det passar Dina egna behov.';
$string['welcomep70'] = 'Klicka på knappen "Nästa" här nedan för att fortsätta installationen av <strong>Moodle</strong>';
$string['wwwroot'] = 'Webbadress';
