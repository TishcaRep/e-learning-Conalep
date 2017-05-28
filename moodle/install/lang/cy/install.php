<?php


defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Cyfeiriadur y gweinyddwr';
$string['availablelangs'] = 'Y pecynnau iaith sydd ar gael';
$string['chooselanguagehead'] = 'Dewis iaith';
$string['chooselanguagesub'] = 'Dewiswch iaith ar gyfer y broses osod. Bydd yr iaith hon yn cael ei defnyddio fel yr iaith ddiofyn ar gyfer y safle, ond gellir ei newid yn nes ymlaen.';
$string['clialreadyconfigured'] = 'Mae\'r ffeil config.php yn bodoli eisoes, defnyddiwch admin/cli/install_database.php os ydych chi am osod y safle hwn.';
$string['clialreadyinstalled'] = 'Mae\'r ffeil config.php yn bodoli eisoes, defnyddiwch admin/cli/upgrade.php os ydych chi am uwchraddio eich safle.';
$string['cliinstallheader'] = 'Rhaglen gosod llinell gorchymyn Moodle {$a}';
$string['databasehost'] = 'Gwesteiwr y gronfa ddata';
$string['databasename'] = 'Enw\'r gronfa ddata';
$string['databasetypehead'] = 'Dewis gyrrwr ar gyfer y gronfa ddata';
$string['dataroot'] = 'Cyfeiriadur data';
$string['datarootpermission'] = 'Hawliau ar gyfer cyfeiriaduron data';
$string['dbprefix'] = 'Llythrennau Blaen Tablau';
$string['dirroot'] = 'Cyfeiriadur Moodle';
$string['environmenthead'] = 'Wrthi\'n profi eich amgylchedd ...';
$string['environmentsub2'] = 'Mae gan bob fersiwn Moodle ofyniad fersiwn PHP sylfaenol ac amryw o estyniadau PHP gorfodol.
Bydd yr amgylchedd yn cael ei brofi\'n llawn cyn pob proses osod a diweddaru. Cysylltwch â gweinyddwr y gweinydd os nad ydych chi\'n gwybod sut mae gosod fersiwn newydd neu alluogi estyniadau PHP.';
$string['errorsinenvironment'] = 'Wedi methu profi\'r amgylchedd!';
$string['installation'] = 'Gosod';
$string['langdownloaderror'] = 'Yn anffodus, ni osodwyd yr iaith ganlynol: "{$a}". Bydd y broses osod yn cario ymlaen yn Saesneg.';
$string['memorylimithelp'] = '<p>Mae maint y cof PHP yn eich gweinydd ar hyn o bryd yn {$a}.</p>

<p>Gall hyn arwain at broblemau â\'r cof yn nes ymlaen, yn enwedig
   os ydych wedi galluogi llawer o fodiwlau a/neu lawer o ddefnyddwyr.</p>

<p>Rydym yn argymell eich bod yn ffurfweddu PHP gyda mwy o gof os yn bosib, megis 40M.
   Mae sawl ffordd o wneud hyn:</p>
<ol>
<li>Os ydych yn gallu, ceisiwch ail-grynhoi PHP gyda <i>--enable-memory-limit</i>.
    Bydd hyn yn gadael i Moodle osod maint y cof ei hun.</li>
<li>Os ydych yn gallu mynd i mewn i\'ch ffeil php.ini, gallwch newid y gosodiad <b>memory_limit</b>
    yn y fan honno i tua 40M. Os nad ydych chi\'n gallu gwneud hyn eich hun, efallai
    y gallech ofyn i\'ch gweinyddwr wneud hyn i chi.</li>
<li>Ar rai gweinyddion PHP, gallwch greu ffeil .htaccess yng nghyfeiriadur Moodle
    sy\'n cynnwys y llinell hon:
    <p><blockquote>php_value memory_limit 40M</blockquote></p>
    <p>Fodd bynnag, ar rai gweinyddion bydd hyn yn atal <b>pob</b> tudalen PHP rhag gweithio
    (bydd gwallau\'n ymddangos pan fyddwch yn edrych ar dudalennau) felly bydd rhaid i chi dynnu\'r ffeil .htaccess file.</p></li>
</ol>';
$string['paths'] = 'Llwybrau';
$string['pathserrcreatedataroot'] = 'Dydy\'r rhaglen osod ddim yn gallu creu\'r cyfeiriadur data ({$a->dataroot}).';
$string['pathshead'] = 'Cadarnhau llwybrau';
$string['pathsrodataroot'] = 'Does dim modd ysgrifennu ar y cyfeiriadur gwraidd data.';
$string['pathsroparentdataroot'] = 'Does dim modd ysgrifennu ar y cyfeiriadur rhiant ({$a->parent}). Dydy\'r rhaglen osod ddim yn gallu creu\'r cyfeiriadur data ({$a->dataroot}).';
$string['pathssubadmindir'] = 'Nifer fach iawn o westeiwyr gwe sy\'n defnyddio /admin fel URL arbennig i chi gael mynd i mewn i\'r panel rheoli neu beth bynnag. Yn anffodus, mae hyn yn gwrthdaro â lleoliad safonol tudalennau gweinyddol Moodle. Gallwch drwsio hyn drwy ailenwi cyfeiriadur y gweinyddwr wrth osod y rhaglen, a rhoi\'r enw newydd yma. Er enghraifft: <em>gweinyddmoodle</em>.  Bydd hyn yn trwsio\'r dolenni gweinyddol yn Moodle';
$string['pathssubdataroot'] = 'Mae Moodle angen lle ar gyfer cadw ffeiliau sy\'n cael eu llwytho i fyny. Dylai defnyddiwr gweinydd y we (fel arfer \'neb\' neu \'apache\') allu darllen ac YSGRIFENNU ar y cyfeiriadur hwn, ond ni ddylid gallu mynd i mewn iddo\'n uniongyrchol drwy\'r we. Bydd y rhaglen osod yn ceisio ei greu os nad yw\'n bodoli.';
$string['pathssubdirroot'] = 'Llwybr cyfeiriadur llawn i raglen Moodle.';
$string['pathssubwwwroot'] = 'Y cyfeiriad gwe llawn a ddefnyddir i fynd i mewn i Moodle.
Nid yw\'n bosibl mynd i mewn i Moodle wrth ddefnyddio amryw o gyfeiriadau.
Os oes gan eich safle amryw o gyfeiriadau cyhoeddus, bydd rhaid i chi sefydlu llwybrau ailgyfeirio parhaol ar gyfer pob un ohonynt ar wahân i hwn.
Os gellir mynd i mewn i\'ch safle o\'r Rhyngrwyd a\'r Fewnrwyd, defnyddiwch y cyfeiriad cyhoeddus yma a sefydlu DNS er mwyn i ddefnyddwyr y Fewnrwyd allu defnyddio\'r cyfeiriad cyhoeddus hefyd.
Os nad yw\'r cyfeiriad yn gywir, newidiwch yr URL yn eich porwr i ailddechrau\'r rhaglen osod gyda gwerth gwahanol.';
$string['pathsunsecuredataroot'] = 'Dydy lleoliad y data gwraidd ddim yn ddiogel';
$string['pathswrongadmindir'] = 'Cyfeiriadur y gweinyddwr';
$string['phpextension'] = 'Estyniad PHP {$a}';
$string['phpversion'] = 'Fersiwn PHP';
$string['phpversionhelp'] = '<p>Mae angen o leiaf fersiwn PHP 4.3.0 neu 5.1.0 ar Moodle (mae llawer o broblemau gyda 5.0.x).</p>
<p>Ar hyn o bryd, rydych yn rhedeg fersiwn {$a}</p>
<p>Rhaid i chi uwchraddio PHP neu newid i westeiwr â fersiwn diweddarach o PHP!<br/>
(Os oes gennych 5.0.x gallwch hefyd is-raddio i fersiwn 4.4.x)</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Rydych chi\'n gweld y dudalen hon gan eich bod wedi gosod a
    lansio\'r pecyn <strong>{$a->packname} {$a->packversion}</strong> yn llwyddiannus ar eich cyfrifiadur. Llongyfarchiadau!';
$string['welcomep30'] = 'Mae\'r fersiwn <strong>{$a->installername}</strong> yn cynnwys rhaglenni
    i greu amgylchedd y gall  <strong>Moodle</strong> weithio ynddo, sef:';
$string['welcomep40'] = 'Mae\'r pecyn hefyd yn cynnwys <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Y trwyddedau perthnasol sy\'n llywodraethu dros yr holl raglenni yn y pecyn hwn. Y pecyn cyflawn yw <strong>{$a->installername}</strong>
    <a href="http://www.opensource.org/docs/definition_plain.html">open source</a> a chaiff ei ddosbarthu dan y drwydded <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'Bydd y tudalennau canlynol yn eich arwain drwy\'r camau syml i
    ffurfweddu a gosod <strong>Moodle</strong> ar eich cyfrifiadur. Gallwch ddewis derbyn y gosodiadau
    diofyn, neu gallwch eu newid eich hun ar gyfer eich dibenion chi.';
$string['welcomep70'] = 'Cliciwch y botwm "Nesaf" i fwrw ymlaen i osod <strong>Moodle</strong>.';
$string['wwwroot'] = 'Cyfeiriad ar y we';
