<?php


defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p>无法建立数据库</p>
<p>指定数据库不存在。使用者没有权限建立数据库</p>
<p>网站管理员需查明数据库状态.</p>';
$string['cannotcreatelangdir'] = '无法创建 lang 目录。';
$string['cannotcreatetempdir'] = '无法创建 temp 目录。';
$string['cannotdownloadcomponents'] = '无法下载组件';
$string['cannotdownloadzipfile'] = '无法下载 ZIP 文件。';
$string['cannotfindcomponent'] = '找不到组件。';
$string['cannotsavemd5file'] = '无法保存 md5 文件';
$string['cannotsavezipfile'] = '无法保存 ZIP 文件';
$string['cannotunzipfile'] = '无法解压文件';
$string['componentisuptodate'] = '组件已经是最新的了';
$string['dmlexceptiononinstall'] = '<p>发生了一个数据库错误[{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = '下载文件检查失败';
$string['invalidmd5'] = '无效的 md5';
$string['missingrequiredfield'] = '缺少了必需的字段';
$string['remotedownloaderror'] = '<p>下载组件至服务器失败，请校验代理设置，推荐安装 PHP cURL 扩展。</p> <p>您必须手动下载下载<a href="{$a->url}">{$a->url}</a> ，拷贝至服务器上的“{$a->dest}”并解压至此。</p>';
$string['wrongdestpath'] = '错误的目标路径';
$string['wrongsourcebase'] = '错误的源 URL 基地址。';
$string['wrongzipfilename'] = '错误的 ZIP 文件名。';
