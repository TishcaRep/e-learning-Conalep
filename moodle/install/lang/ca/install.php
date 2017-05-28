<?php


defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Directori d\'administració';
$string['availablelangs'] = 'Llista d\'idiomes disponibles';
$string['chooselanguagehead'] = 'Trieu un idioma';
$string['chooselanguagesub'] = 'Trieu un idioma per a la instal·lació. S\'utilitzarà també com a idioma per defecte del lloc, tot i que després podeu canviar-lo.';
$string['clialreadyconfigured'] = 'El fitxer config.php ja existeix, feu servir admin/cli/install_database.php si voleu instal·lar el Moodle en aquest lloc web.';
$string['clialreadyinstalled'] = 'El fitxer de configuració config.php ja existeix. Feu servir admin/cli/upgrade.php si voleu actualitzar Moodle per a aquest lloc web.';
$string['cliinstallheader'] = 'Programa d\'instal·lació de línia d\'ordres de Moodle {$a}';
$string['databasehost'] = 'Servidor de base de dades:';
$string['databasename'] = 'Nom de la base de dades:';
$string['databasetypehead'] = 'Trieu el controlador de la base de dades';
$string['dataroot'] = 'Directori de dades';
$string['datarootpermission'] = 'Permisos dels directoris de dades';
$string['dbprefix'] = 'Prefix de taules';
$string['dirroot'] = 'Directori de Moodle';
$string['environmenthead'] = 'S\'està comprovant el vostre entorn';
$string['environmentsub2'] = 'Cada versió de Moodle té uns requeriments mínims de versió de PHP i un nombre d\'extensions de PHP necessàries.
Abans de cada instal·lació o actualització es realitza una comprovació exhaustiva de l\'entorn. Contacteu amb l\'administrador si no sabeu com instal·lar una nova versió de PHP o com habilitar les extensions.';
$string['errorsinenvironment'] = 'La comprovació de l\'entorn ha fallat.';
$string['installation'] = 'Instal·lació';
$string['langdownloaderror'] = 'Dissortadament l\'idioma "{$a}" no es pot baixar. La instal·lació prosseguirà en anglès.';
$string['memorylimithelp'] = '<p>El límit de memòria del PHP del vostre servidor actualment està definit en {$a}.</p>

<p>Això pot causar que Moodle tingui problemes de memòria més endavant, especialment si teniu molts mòduls habilitats i/o molts usuaris.</p>

<p>És recomanable que configureu el PHP amb un límit superior, com ara 40 MB, sempre que sigui possible. Hi ha diverses maneres de fer això:</p>
<ol>
<li>Si podeu, recompileu el PHP amb <i>--enable-memory-limit</i>. Això permetrà que Moodle defineixi el límit de memòria per si mateix.</li>
<li>Si teniu accés al fitxer php.ini, podeu canviar el paràmetre <b>memory_limit</b> a 40 MB. Si no hi teniu accés podeu demanar al vostre administrador que ho faci ell.</li>
<li>En alguns servidors PHP podeu crear un fitxer .htaccess dins del directori de Moodle amb aquesta línia:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>Tanmateix, en alguns servidors això farà que no funcioni <b>cap</b> pàgina PHP (es visualitzaran errors) en el qual cas hauríeu de suprimir el fitxer .htaccess.</p></li>
</ol>';
$string['paths'] = 'Camins';
$string['pathserrcreatedataroot'] = 'L\'instal·lador no pot crear el directori de dades ({$a->dataroot}).';
$string['pathshead'] = 'Confirmeu els camins';
$string['pathsrodataroot'] = 'No es pot escriure en el directori dataroot.';
$string['pathsroparentdataroot'] = 'No es pot escriure en el directori pare ({$a->parent}). L\'instal·lador no pot crear el directori ({$a->dataroot}).';
$string['pathssubadmindir'] = 'Alguns serveis d\'allotjament web (pocs) utilitzen /admin com a URL especial perquè accediu a un tauler de control o quelcom semblant. Malauradament, això entra en conflicte amb la ubicació estàndard de les pàgines d\'administració de Moodle. Podeu arreglar aquest problema canviant el nom del directori d\'administració de Moodle en la vostra instal·lació i posant el nou nom aquí. Per exemple: <em>moodleadmin</em>. Això arreglarà els enllaços d\'administració de Moodle.';
$string['pathssubdataroot'] = '<p>Directori on el Moodle emmagatzemarà els materials pujats pels usuaris.</p>
<p>Aquest directori hauria de tenir permisos de lectura i escriptura per a l\'usuari del servidor web (normalment \'www-data\', \'nobody\', or \'apache\').</p>
<p>No ha de ser accessible directament via web.</p>
<p>L\'instal·lador provarà de crear-lo si no existeix.</p>';
$string['pathssubdirroot'] = 'Camí complet del directori d\'instal·lació de Moodle.';
$string['pathssubwwwroot'] = '<p>L\'adreça web completa on s\'accedirà a Moodle; per exemple, l\'adreça que els usuaris introduiran a la barra d\'adreces del navegador per accedir a Moodle.</p> <p> No és possible accedir a Moodle utilitzant diferents adreces. Si el vostre lloc és accessible a través de diferents adreces, trieu-ne la més fàcil i configureu una redirecció permanent per a cadascuna de les altres adreces.</p> <p>
Si el vostre lloc és accessible tant des d\'Internet com des d\'una xarxa interna (anomenada de vegades intranet), utilitzeu l\'adreça pública aquí.</p> <p>Si l\'adreça actual no és correcta, canvieu l\'URL a la barra d\'adreces del navegador i reinicieu la instal·lació.';
$string['pathsunsecuredataroot'] = 'La ubicació del dataroot no és segura.';
$string['pathswrongadmindir'] = 'No existeix el directori d\'administració';
$string['phpextension'] = 'Extensió PHP {$a}';
$string['phpversion'] = 'Versió PHP';
$string['phpversionhelp'] = '<p>Moodle necessita una versió de PHP 4.3.0 o 5.1.0 (les versions 5.0.x tenien uns quants problemes coneguts).</p>
<p>A hores d\'ara esteu utilitzant la versió {$a}.</p>
<p>Us cal actualitzar el PHP o traslladar Moodle a un ordinador amb una versió de PHP més recent.<br />(Si esteu utilitzant la versió 5.0.x, alternativament també podríeu tornar enrere a la 4.4.x)</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Esteu veient aquesta pàgina perquè heu instal·lat amb èxit i heu executat el paquet <strong>{$a->packname} {$a->packversion}</strong>. Felicitacions.';
$string['welcomep30'] = 'Aquesta versió de <strong>{$a->installername}</strong> inclou les aplicacions necessàries per crear un entorn en el qual funcioni <strong>Moodle</strong>, concretament:';
$string['welcomep40'] = 'El paquet inclou també <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'L\'ús de totes les aplicacions d\'aquest paquet és governat per les seves llicències respectives. El paquet <strong>{$a->installername}</strong> complet és
<a href="http://www.opensource.org/docs/definition_plain.html">codi font obert</a> i es distribueix
sota llicència <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'Les pàgines següents us guiaran per una sèrie de passos fàcils de seguir per configurar <strong>Moodle</strong> en el vostre ordinador. Podeu acceptar els paràmetres per defecte o, opcionalment, modificar-los perquè s\'ajustin a les vostres necessitats.';
$string['welcomep70'] = 'Feu clic al botó «Següent» per continuar amb la configuració de <strong>Moodle</strong>.';
$string['wwwroot'] = 'Adreça web';
