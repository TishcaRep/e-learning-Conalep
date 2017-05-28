<?php

defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p> Невозможно создать базу данных. </p><p> Указанная база данных не существует, и данный пользователь не имеет разрешения на создание базы данных. </p><p> Администратор сайта  должен проверить конфигурацию базы данных. </p>';
$string['cannotcreatelangdir'] = 'Не удается создать каталог языка';
$string['cannotcreatetempdir'] = 'Не удается создать временный каталог';
$string['cannotdownloadcomponents'] = 'Невозможно загрузить компоненты.';
$string['cannotdownloadzipfile'] = 'Не удалось загрузить ZIP-файл';
$string['cannotfindcomponent'] = 'Не удалось найти компонент';
$string['cannotsavemd5file'] = 'Не удалось сохранить MD5-файл';
$string['cannotsavezipfile'] = 'Не удалось сохранить ZIP-файл';
$string['cannotunzipfile'] = 'Не удалось распаковать файл';
$string['componentisuptodate'] = 'Компонент не нуждается в обновлении';
$string['dmlexceptiononinstall'] = '<p>Произошла ошибка базы данных [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'Ошибка проверки загруженного файла';
$string['invalidmd5'] = 'Некорректная md5';
$string['missingrequiredfield'] = 'Отсутствуют некоторые обязательные поля';
$string['remotedownloaderror'] = '<p>Не удалось загрузить компонент на сервер. Проверьте настройки прокси-сервера; настоятельно рекомендуется установка расширения  PHP cURL.</p>
<p>Вам следует вручную загрузить файл по ссылке <a href="{$a->url}">{$a->url}</a>, скопировать его в папку «{$a->dest}» на своем сервере и там его распаковать.</p>';
$string['wrongdestpath'] = 'Ошибочный путь назначения';
$string['wrongsourcebase'] = 'Неправильный адрес источника';
$string['wrongzipfilename'] = 'Неверное имя ZIP-файла';
