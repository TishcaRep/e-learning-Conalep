<?php


defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p>データベースを作成できません。</p>
<p>指定されたデータベースは存在しません。また、ユーザにはデータベースを作成するパーミッションがありません。</p>
<p>サイト管理者はデータベース設定を確認してください。</p>';
$string['cannotcreatelangdir'] = 'langディレクトリを作成できません。';
$string['cannotcreatetempdir'] = 'tempディレクトリを作成できません。';
$string['cannotdownloadcomponents'] = 'コンポーネントをダウンロードできません。';
$string['cannotdownloadzipfile'] = 'ZIPファイルをダウンロードできません。';
$string['cannotfindcomponent'] = 'コンポーネントを見つけることができません。';
$string['cannotsavemd5file'] = 'mp5ファイルを保存できません。';
$string['cannotsavezipfile'] = 'ZIPファイルを保存できません。';
$string['cannotunzipfile'] = 'ZIPファイルを展開できません。';
$string['componentisuptodate'] = 'コンポーネントは最新です。';
$string['dmlexceptiononinstall'] = '<p>データベースエラーが発生しました: [{$a->errorcode}]<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'ダウンロードファイルのチェックに失敗しました。';
$string['invalidmd5'] = 'チェック変数が正しくありません - 再度お試しください。';
$string['missingrequiredfield'] = 'いくつかの必須入力フィールドが入力されていません。';
$string['remotedownloaderror'] = '<p>あなたのサーバへのコンポーネントのダウンロードに失敗しました。プロキシ設定を確認してください。PHP cURL拡張モジュールの使用を強くお勧めします。</p>
<p><a href="{$a->url}">{$a->url}</a>ファイルを手動でダウンロードした後、あなたのサーバの「{$a->dest}」にコピーおよび展開してください。</p>';
$string['wrongdestpath'] = '宛先パスが正しくありません。';
$string['wrongsourcebase'] = 'ソースURLベースが正しくありません。';
$string['wrongzipfilename'] = 'ZIPファイル名が正しくありません。';
