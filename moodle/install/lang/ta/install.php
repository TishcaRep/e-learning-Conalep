<?php


defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Admin Directory';
$string['availablelangs'] = 'தயராக உள்ள மொழி அடுக்கு';
$string['chooselanguagehead'] = 'மொழியைத் தேர்ந்தெடு';
$string['chooselanguagesub'] = 'Please choose a language for the installation ONLY. You will be able to choose site and user languages on a later screen.';
$string['dataroot'] = 'Data Directory';
$string['dbprefix'] = 'Tables prefix';
$string['dirroot'] = 'Moodle Directory';
$string['environmenthead'] = 'Checking your environment ...';
$string['installation'] = 'Installation';
$string['langdownloaderror'] = 'Unfortunately the language "{$a}" was not installed. The installation process will continue in English.';
$string['memorylimithelp'] = '<p>The PHP memory limit for your server is currently set to {$a}.</p>

<p>This may cause Moodle to have memory problems later on, especially
   if you have a lot of modules enabled and/or a lot of users.</p>

<p>We recommend that you configure PHP with a higher limit if possible, like 40M.
   There are several ways of doing this that you can try:</p>
<ol>
<li>If you are able to, recompile PHP with <i>--enable-memory-limit</i>.
    This will allow Moodle to set the memory limit itself.</li>
<li>If you have access to your php.ini file, you can change the <b>memory_limit</b>
    setting in there to something like 40M.  If you don\'t have access you might
    be able to ask your administrator to do this for you.</li>
<li>On some PHP servers you can create a .htaccess file in the Moodle directory
    containing this line:
    <p><blockquote>php_value memory_limit 40M</blockquote></p>
    <p>However, on some servers this will prevent <b>all</b> PHP pages from working
    (you will see errors when you look at pages) so you\'ll have to remove the .htaccess file.</p></li>
</ol>';
$string['phpversion'] = 'பிஎச்பி பதிப்பு';
$string['phpversionhelp'] = '<p>Moodle requires a PHP version of at least 4.3.0 or 5.1.0 (5.0.x has a number of known problems).</p>
<p>You are currently running version {$a}</p>
<p>You must upgrade PHP or move to a host with a newer version of PHP!<br/>
(In case of 5.0.x you could also downgrade to 4.4.x version)</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'You are seeing this page because you have successfully installed and
    launched the <strong>{$a->packname} {$a->packversion}</strong> package in your computer. Congratulations!';
$string['welcomep30'] = 'This release of the <strong>{$a->installername}</strong> includes the applications
    to create an environment in which <strong>Moodle</strong> will operate, namely:';
$string['welcomep40'] = 'The package also includes <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'The use of all the applications in this package is governed by their respective
    licences. The complete <strong>{$a->installername}</strong> package is
    <a href="http://www.opensource.org/docs/definition_plain.html">open source</a> and is distributed
    under the <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a> license.';
$string['welcomep60'] = 'The following pages will lead you through some easy to follow steps to
    configure and set up <strong>Moodle</strong> on your computer. You may accept the default
    settings or, optionally, amend them to suit your own needs.';
$string['welcomep70'] = 'Click the "Next" button below to continue with the set up of <strong>Moodle</strong>.';
$string['wwwroot'] = 'இணைய முகவரி';
