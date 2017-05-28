<?php


defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Adminディレクトリ';
$string['availablelangs'] = '利用可能な言語パック';
$string['chooselanguagehead'] = '言語を選択してください。';
$string['chooselanguagesub'] = 'インストールのみに使用する言語を選択してください。この言語はサイトのデフォルト言語としても使用されます。後でサイト言語を変更することができます。';
$string['clialreadyconfigured'] = '設定ファイルconfig.phpはすでに登録されています。このサイトをインストールする場合、admin/cli/install_database.phpを使用してください。';
$string['clialreadyinstalled'] = '設定ファイルconfig.phpは、すでに登録されています。このサイトをアップグレードする場合、admin/cli/upgrade.phpを使用してください。';
$string['cliinstallheader'] = 'Moodle {$a} コマンドラインインストールプログラム';
$string['databasehost'] = 'データベースホスト :';
$string['databasename'] = 'データベース名 :';
$string['databasetypehead'] = 'データベースドライバを選択する';
$string['dataroot'] = 'データディレクトリ';
$string['datarootpermission'] = 'データディレクトリパーミッション';
$string['dbprefix'] = 'テーブル接頭辞';
$string['dirroot'] = 'Moodleディレクトリ';
$string['environmenthead'] = 'あなたの環境を確認しています ...';
$string['environmentsub2'] = 'それぞれのMoodleリリースにはPHPバージョンの最小必要条件および多くの必須PHP拡張モジュールがあります。完全な環境チェックはインストールおよびアップグレードごとに実行されます。新しいPHPバージョンのインストールまたはPHP拡張モジュールの有効化に関して分からない場合、あなたのサーバ管理者にご連絡ください。';
$string['errorsinenvironment'] = '環境チェックが失敗しました!';
$string['installation'] = 'インストレーション';
$string['langdownloaderror'] = '残念ですが、言語「 {$a} 」をダウンロードできませんでした。インストール処理は英語で継続されます。';
$string['memorylimithelp'] = '<p>現在、サーバのPHPメモリ制限が {$a} に設定されています。</p>

<p>この設定ではMoodleのメモリに関わるトラブルが発生する可能性があります。 特に多くのモジュールを使用したり、多くのユーザがMoodleを使用する場合にトラブルが発生します。</p>

<p>可能でしたら、PHPのメモリ制限上限を40M以上に設定されることをお勧めします。この設定を実現するために、いくつかの方法があります:
<ol>
<li>あなたがリコンパイル可能な場合、PHPを<i>--enable-memory-limit</i>オプションでコンパイルしてください。これにより、Moodle自身がメモリ制限を設定することが可能になります。</li>
<li>あなたがphp.iniファイルにアクセスできる場合、<b>memory_limit</b>設定を40Mのように変更することができます。php.iniファイルにアクセスできない場合、管理者に変更を依頼してください。</li>
<li>いくつかのPHPサーバでは、下記の行を含む.htaccessファイルをMoodleディレクトリに作成することができます:
<blockquote><div>php_value memory_limit 40M</div></blockquote>
<p>しかし、この設定が<b>すべての</b>PHPページの動作を妨げる場合もあります。ページ閲覧中にエラーが表示される場合、.htaccessファイルを削除してください。</p></li>
</ol>';
$string['paths'] = 'パス';
$string['pathserrcreatedataroot'] = 'データディレクトリ ({$a->dataroot}) はインストーラーで作成できません。';
$string['pathshead'] = 'パスを確認する';
$string['pathsrodataroot'] = 'datarootディレクトリに書き込み権がありません。';
$string['pathsroparentdataroot'] = '親ディレクトリ ({$a->parent}) に書き込み権がありません。データディレクトリ ({$a->dataroot}) はインストーラーで作成できません。';
$string['pathssubadmindir'] = 'まれに、コントロールパネルまたはその他の管理ツールにアクセスするためのURLとして/adminディレクトリを使用しているウェブホストがあります。残念ですが、これはMoodle管理ページの標準的なロケーションと衝突します。あなたはインストール時にadminディレクトリをリネームすることができます。ここに新しいディレクトリ名を入力してください。例: <br /> <br /><b>moodleadmin</b><br /> <br />
これによりMoodleでのadminへのリンクを変更します。';
$string['pathssubdataroot'] = '<p>ユーザによってアップロードされたファイルコンテンツすべてをMoodleが保存するディレクトリです。</p>
<p>このディレクトリはウェブサーバユーザ (通常「nobody」または「apache」) から読み込みおよび書き込みできる必要があります。</p>
<p>ウェブからは直接アクセスできないようにしてください。</p>
<p>現在ディレクトリが存在しない場合、インストレーションプロセスは作成を試みます。</p';
$string['pathssubdirroot'] = '<p>Moodleコードを含むディレクトリに関するフルパスです。</p>';
$string['pathssubwwwroot'] = '<p>Moodleにアクセスすることのできるフルウェブアドレスです。例えばユーザがブラウザのアドレスバーに入力してMoodleにアクセスするためのアドレスです。</p>

<p>複数アドレスを使用してMoodleにアクセスすることはできません。あなたのサイトに複数アドレスからアクセスできる場合、最も簡単なアドレスを選択して、すべてのアドレスにパーマネントリダイレクトを設定してください。</p>

<p>あなたのサイトにインターネットおよび内部ネットワーク (イントラネットと呼ばれます) からアクセスできる場合、ここではパブリックアドレスを使用してください。</p>

<p>現在のアドレスが正しくない場合、あなたのブラウザのURLを変更して、異なる値でインストレーションを再開してください。</p>';
$string['pathsunsecuredataroot'] = 'dataroot ロケーションが安全ではありません。';
$string['pathswrongadmindir'] = 'adminディレクトリがありません。';
$string['phpextension'] = '{$a} PHP拡張モジュール';
$string['phpversion'] = 'PHPバージョン';
$string['phpversionhelp'] = '<p>Moodleには少なくとも5.6.5または7.1のPHPバージョンが必要です (7.0.x にはエンジンの制限があります)。</p>
<p>現在、あなたはバージョン {$a} を動作させています。</p>
<p>PHPをアップグレードするか新しいバージョンのPHPがインストールされているホストに移動する必要があります。</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'インストールが正常に完了して、あなたのコンピュータで <strong>{$a->packname} {$a->packversion}</strong> パッケージが起動されたため、このページが表示されています。おめでとうございます!';
$string['welcomep30'] = 'このリリース <strong>{$a->installername}</strong> には<strong>Moodle</strong>で環境を作成するアプリケーションが含まれています。すなわち:';
$string['welcomep40'] = 'パッケージには <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong> も含まれています。';
$string['welcomep50'] = 'このパッケージ内のすべてのアプリケーションの使用は個々のライセンスによって規定されています。全体の<strong>{$a->installername}</strong>パッケージは<a href="http://www.opensource.org/docs/definition_plain.html">オープンソース</a>であり、<a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>ライセンスの下で配布されています。';
$string['welcomep60'] = '次からのページはあなたのコンピュータに<strong>Moodle</strong>を簡単に設定およびセットアップする手順にしたがって進みます。あなたはデフォルトの設定を使用することも、必要に応じて任意で設定を変更することもできます。';
$string['welcomep70'] = '<strong>Moodle</strong>のセットアップを続けるには「次へ」ボタンをクリックしてください。';
$string['wwwroot'] = 'ウェブアドレス';
