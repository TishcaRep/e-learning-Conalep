<?php


defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p>Не вдається створити базу даних.</p> <p>Вказаної бази даних не існує і такий користувач не має права на створення бази даних.</p> <p>Адміністратор сайту повинен перевірити налаштування бази даних.</p>';
$string['cannotcreatelangdir'] = 'Не створюється каталог lang';
$string['cannotcreatetempdir'] = 'Не можу створити каталог temp';
$string['cannotdownloadcomponents'] = 'Не можу завантажити компоненти.';
$string['cannotdownloadzipfile'] = 'Не можу завантажити ZIP-файл.';
$string['cannotfindcomponent'] = 'Не можу знайти компоненти.';
$string['cannotsavemd5file'] = 'Не можу зберегти md5-файл.';
$string['cannotsavezipfile'] = 'Не можу зберегти ZIP-файл.';
$string['cannotunzipfile'] = 'Не можу розпакувати архівний файл.';
$string['componentisuptodate'] = 'Компонент останньої редакції.';
$string['dmlexceptiononinstall'] = '<p>Виникла помилка бази даних [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'Помилка завантаження файлу.';
$string['invalidmd5'] = 'Перевірка змінної повернула її помилку - спробуйте знову';
$string['missingrequiredfield'] = 'Деякі обов\'язкові поля відсутні';
$string['remotedownloaderror'] = 'Завантаження компонентів до вашого серверу зазнало невдачі, будь ласка перевірте налаштування проксі, та врахуйте рекомендацію встановлення PHP cURL.<br /><br /> Вам доведеться завантажити файл <a href="{$a->url}">{$a->url}</a> вручну, скопіювати його до "{$a->dest}" на вашому сервері та розпакувати там.';
$string['wrongdestpath'] = 'Неправильний шлях призначення.';
$string['wrongsourcebase'] = 'Неправильне джерело базового URL.';
$string['wrongzipfilename'] = 'Неправильне ім\'я ZIP-архіву';
