<?php


defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p>Veritabanı oluşturulamıyor.</p>
<p>Belirtilen veritabanı yok ve verilen kullanıcının veritabanı oluşturmak için izni yok.</p>
<p>Site yöneticisi veritabanı yapılandırmasını doğrulamalı.</p>';
$string['cannotcreatelangdir'] = 'Dil dizini oluşturulamıyor';
$string['cannotcreatetempdir'] = 'Geçici dizin oluşturulamıyor';
$string['cannotdownloadcomponents'] = 'Bileşenler indirilemedi';
$string['cannotdownloadzipfile'] = 'ZIP dosyası indirilemedi';
$string['cannotfindcomponent'] = 'Bileşen bulunamadı';
$string['cannotsavemd5file'] = 'md5 dosyası kaydedilemedi';
$string['cannotsavezipfile'] = 'ZIP dosyası kaydedilemedi';
$string['cannotunzipfile'] = 'Dosya arşivi açılamadı';
$string['componentisuptodate'] = 'Bileşen güncel';
$string['dmlexceptiononinstall'] = '<p>Bir veritabanı hatası oluştu [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'İndirilen dosya kontrolü hatası';
$string['invalidmd5'] = 'Kontrol değişkeni yanlış - yeniden deneyin';
$string['missingrequiredfield'] = 'Gerekli alanlardan bazıları eksik';
$string['remotedownloaderror'] = 'Bileşeni sunucunuza indirirken hata oluştu, lütfen proxy(vekil) ayarlarını kontrol edin. PHP cURL eklentisi şiddetle tavsiye edilir.<br /><br /><a href="{$a->url}">{$a->url}</a><br />dosyasını kendiniz indirmeli ve indirdiğiniz dosyayı sunucunuzundaki "{$a->dest}" klasörüne kaydetmeli ve zip arşivini açmalısınız.';
$string['wrongdestpath'] = 'Yanlış hedef yolu';
$string['wrongsourcebase'] = 'Yanlış kaynak URL tabanı';
$string['wrongzipfilename'] = 'Yanlış ZIP dosya adı';
