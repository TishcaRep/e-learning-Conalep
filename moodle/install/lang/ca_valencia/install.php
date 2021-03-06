<?php


defined('MOODLE_INTERNAL') || die();

$string['clialreadyconfigured'] = 'El fitxer config.php ja existeix, feu servir dmin/cli/install_database.php si voleu instal·lar este lloc web.';
$string['clialreadyinstalled'] = 'El fitxer config.php ja existeix, feu servir admin/cli/upgrade.php si voleu actualitzar este lloc web.';
$string['cliinstallheader'] = 'Programa d\'instal·lació de línia d\'ordes de Moodle {$a}';
$string['langdownloaderror'] = 'Dissortadament l\'idioma "{$a}" no es pot baixar. La instal·lació prosseguirà en anglés.';
$string['memorylimithelp'] = '<p>El límit de memòria del PHP del vostre servidor actualment està definit en {$a}.</p>

<p>Això pot causar que Moodle tinga problemes de memòria més avant, especialment si teniu molts mòduls habilitats i/o molts usuaris.</p>

<p>És recomanable que configureu el PHP amb un límit superior, com ara 40 MB, sempre que siga possible. Hi ha diverses maneres de fer això:</p>
<ol>
<li>Si podeu, recompileu el PHP amb <i>--enable-memory-limit</i>. Això permetrà que Moodle definisca el límit de memòria per si mateix.</li>
<li>Si teniu accés al fitxer php.ini, podeu canviar el paràmetre <b>memory_limit</b> a 40 MB. Si no hi teniu accés podeu demanar al vostre administrador que ho faça ell.</li>
<li>En alguns servidors PHP podeu crear un fitxer .htaccess dins del directori de Moodle amb esta línia:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>Tanmateix, en alguns servidors això farà que no funcione <b>cap</b> pàgina PHP (es visualitzaran errors) en el qual cas hauríeu de suprimir el fitxer .htaccess.</p></li>
</ol>';
$string['pathssubadmindir'] = 'Alguns serveis d\'allotjament web (pocs) utilitzen un URL especial /admin p. ex. per a accedir a un tauler de control o quelcom paregut. Malauradament això entra en conflicte amb la ubicació estàndard de les pàgines d\'administració de Moodle. Podeu arreglar este problema canviant el nom del directori d\'administració de Moodle en la vostra instal·lació i posant el nou nom ací. Per exemple <em>moodleadmin</em>. Això modificarà els enllaços d\'administració de Moodle.';
$string['pathssubdataroot'] = 'Necessiteu un espai on Moodle puga guardar els fitxers penjats. Este directori hauria de tindre permisos de lectura I ESCRIPTURA per a l\'usuari del servidor web (normalment \'nobody\' o \'apache\'), però no cal que siga accessible directament via web. L\'instal·lador provarà de crear-lo si no existeix.';
$string['pathssubwwwroot'] = 'L\'adreça web completa on s\'accedirà a Moodle.
No és possible accedir a Moodle en diferents adreces.
Si el vostre lloc té múltiples adreces públiques haureu de configurar redireccions permanents per a totes excepte esta.
Si el vostre lloc és accessible tant des d\'Internet com des d\'una intranet, utilitzeu ací l\'adreça pública i configureu el DNS de manera que els usuaris de la intranet puguen utilitzar també l\'adreça pública.
Si l\'adreça no és correcta, canvieu l\'URL en el vostre navegador per reiniciar la instal·lació amb un altre valor.';
$string['phpversionhelp'] = '<p>Moodle necessita una versió de PHP 4.3.0 o 5.1.0 (les versions 5.0.x tenien uns quants problemes coneguts).</p>
<p>A hores d\'ara esteu utilitzant la versió {$a}.</p>
<p>Vos cal actualitzar el PHP o traslladar Moodle a un ordinador amb una versió de PHP més recent.<br />(Si esteu utilitzant la versió 5.0.x, alternativament també podríeu tornar arrere a la 4.4.x)</p>';
$string['welcomep20'] = 'Esteu veient esta pàgina perquè heu instal·lat amb èxit i heu executat el paquet <strong>{$a->packname} {$a->packversion}</strong>. Felicitacions.';
$string['welcomep30'] = 'Esta versió de <strong>{$a->installername}</strong> inclou les aplicacions necessàries per crear un entorn en el qual funcione <strong>Moodle</strong>:';
$string['welcomep50'] = 'L\'ús de totes les aplicacions d\'este paquet és governat per les seues llicències respectives. El paquet <strong>{$a->installername}</strong> complet és
<a href="http://www.opensource.org/docs/definition_plain.html">codi font obert</a> i es distribueix
sota llicència <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'Les pàgines següents vos guiaran per una sèrie de passos fàcils de seguir per configurar <strong>Moodle</strong> en el vostre ordinador. Podeu acceptar els paràmetres per defecte o, opcionalment, modificar-los perquè s\'ajusten a les vostres necessitats.';
