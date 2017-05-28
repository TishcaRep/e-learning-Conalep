<?php


defined('MOODLE_INTERNAL') || die();

$string['chooselanguagesub'] = 'Wähle eine Sprache, die du während der Installation verwenden möchtest. Die ausgewählte Sprache wird nach der Installation als Standardsprache der Instanz benutzt, aber du darfst die Sprache jederzeit ändern.';
$string['environmentsub2'] = 'Jede Moodle-Version hat Mindestvoraussetzungen für der PHP-Version und für verbindliche PHP-Extensions. Vor einer Installation oder einer Aktualisierung wird eine vollständige Prüfung durchgeführt. Bitte frage den Server-Administrator, wenn du mit der Installation einer neuen Version oder mit der Aktivierung von PHP-Extensions nicht weiterkommst.';
$string['memorylimithelp'] = '<p>Die PHP-Einstellung memory_limit für deinen Server ist zur Zeit auf {$a} eingestellt. </p>
<p>Dies wird vermutlich zu Problemen führen, wenn du Moodle mit vielen Aktivitäten oder vielen Nutzer/innen verwendst. </p>
<p>Wir empfehlen die Einstellung zu erhöhen. Empfohlen werden 40M oder mehr. Dies kannst du auf verschiedene Arten machen:</p>
<ol>
<li>Wenn du PHP neu kompilieren kannst, nimm die Einstellung <i>--enable-memory-limit</i>. Dann kann Moodle die Einstellung selber vornehmen.
<li>Wenn du Zugriff auf die Datei php.ini hast, kannst du die Einstellung <b>memory_limit</b> selber auf z.B. 40M anpassen. Wenn du selber keinen Zugriff hast, fragst du den Server-Admin, dies für dich zu tun.
<li>Auf einigen PHP-Servern kannst du eine .htaccess-Datei im Moodle-Verzeichnis einrichten. Trage darin die folgende Zeile ein: <p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>Achtung: auf einigen Servern hindert diese Einstellung <b>alle</b> PHP-Seiten und du erhältst Fehlermeldungen. Entferne dann den Eintrag in der .htaccess-Datei wieder.</p></li>
</ol>';
$string['phpversionhelp'] = '<p>Moodle erwartet PHP mindestens in der Version 4.3.0/4.4.0 oder 5.1.0 (5.0.x weist eine Reihe bekannter Fehler auf).</p>
<p>Du benutzt zur Zeit die Version {$a}.</p>
<p>Du musst deine PHP-Verson aktualisieren oder auf einen Rechner wechseln, der eine neuere Version von PHP nutzt.<br />
(Im Falle von 5.0.x könntest du auch zu einer Version 4.3.x/4.4.x downgraden)</p>';
$string['welcomep20'] = 'Du hast das Paket <strong>{$a->packname} {$a->packversion}</strong> erfolgreich auf deinem Computer installiert.';
$string['welcomep30'] = 'Diese Version von <strong>{$a->installername}</strong> enthält folgende Anwendungen, mit denen du <strong>Moodle</strong> ausführen kannst:';
$string['welcomep60'] = 'Die folgenden Seiten führen dich in einfachen Schritten durch die Konfiguration und Installation von <strong>Moodle</strong> auf deinem Computer. Du kannst die vorgeschlagenen Einstellungen übernehmen oder an deine Bedürfnisse anpassen.';
$string['welcomep70'] = 'Klicke auf den "Weiter"-Button, um mit dem Setup von <string>Moodle</string> fortzufahren.';