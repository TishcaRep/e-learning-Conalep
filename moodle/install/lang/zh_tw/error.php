<?php


defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p>無法建立資料庫</p>
<p>指定之資料庫並不存在。使用者並未有權限建立資料庫</p>
<p>網站管理員需查明資料庫之組態.</p>';
$string['cannotcreatelangdir'] = '無法建立語言資料夾';
$string['cannotcreatetempdir'] = '無法建立暫存資料夾';
$string['cannotdownloadcomponents'] = '無法下載元件';
$string['cannotdownloadzipfile'] = '無法下載 ZIP 壓縮檔案';
$string['cannotfindcomponent'] = '找不到元件';
$string['cannotsavemd5file'] = '無法儲存 md5 檔案';
$string['cannotsavezipfile'] = '無法儲存 ZIP 檔案';
$string['cannotunzipfile'] = '無法將檔案解壓縮';
$string['componentisuptodate'] = '元件已經是最新的了';
$string['dmlexceptiononinstall'] = '<p>資料庫有誤 [{$a->錯誤碼}].<br />{$a->排除故障資訊}</p>';
$string['downloadedfilecheckfailed'] = '下載的檔案檢查結果有錯誤';
$string['invalidmd5'] = '這檢查變項是錯的，再試一次';
$string['missingrequiredfield'] = '缺少部份必填欄位';
$string['remotedownloaderror'] = '<p>下載元件到你的伺服器已經失敗，請檢查代理伺服器的設定、高度建議安裝PHP cURL擴展。</p>
<p>您必須手動下載<a href="{$a->url}">{$a->url}</a>檔案，並且複製到你的伺服器的"{$a->dest}"，並在那兒解壓縮。</p>';
$string['wrongdestpath'] = '錯誤的目的路徑';
$string['wrongsourcebase'] = '錯誤的來源網址基礎';
$string['wrongzipfilename'] = '錯誤的 ZIP 檔名';
