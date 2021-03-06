<?php


defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p>Није могуће креирати базу података.</p> <p>Наведена база не постоји, а дати корисник нема овлашћења да креира базу података.</p> <p>Администратор сајта треба да провери конфигурацију базе података.</p>';
$string['cannotcreatelangdir'] = 'Није могуће креирати директоријум језика';
$string['cannotcreatetempdir'] = 'Није могуће креирати привремени директоријум';
$string['cannotdownloadcomponents'] = 'Није могуће преузети компоненте.';
$string['cannotdownloadzipfile'] = 'Није могуће преузети архиву';
$string['cannotfindcomponent'] = 'Није могуће пронаћи компоненту.';
$string['cannotsavemd5file'] = 'Није могуће сачувати md5 датотеку.';
$string['cannotsavezipfile'] = 'Није могуће сачувти ZIP архиву.';
$string['cannotunzipfile'] = 'Није могуће распаковати ZIP датотеку.';
$string['componentisuptodate'] = 'Компонента је доступна у својој најновијој верзији';
$string['dmlexceptiononinstall'] = 'p>Дошло је до грешке у бази података [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'Није успела провера преузете датотеке';
$string['invalidmd5'] = 'Неисправна md5 датотека';
$string['missingrequiredfield'] = 'Недостаје неко обавезно поље';
$string['remotedownloaderror'] = '<p>Преузимање ове компоненте на ваш сервер није успело. Проверите подешавања прокси сервера. PHP cURL екстензија се препоручује.</p>
<p>Морате да преузмете <a href="{$a->url}">{$a->url}</a> датотеку ручно, копирате је у директоријум "{$a->dest}" на свом серверу и тамо је распакујете.</p>';
$string['wrongdestpath'] = 'Погрешна одредишна путања';
$string['wrongsourcebase'] = 'Погрешна база изворног URL-a';
$string['wrongzipfilename'] = 'Погрешан назив архиве';
