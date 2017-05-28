<?php


defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Direktori admin';
$string['availablelangs'] = 'Senarai bahasa yang tersedia';
$string['chooselanguagehead'] = 'Pilih bahasa';
$string['chooselanguagesub'] = 'Sila pilih bahasa untuk pemasangan. Bahasa dipilih akan digunakan sebagai bahasa lalai untuk laman, walau bagaimanapun ia boleh diubah kemudian.';
$string['clialreadyinstalled'] = 'config.php fail sudah wujud, sila gunakan admin/cli/upgrade.php jika anda mahu menaik taraf laman web anda.';
$string['cliinstallheader'] = 'Baris arahan pemasangan program Moodle {$a}';
$string['databasehost'] = 'Hos pangkalan data';
$string['databasename'] = 'Nama pangkalan data';
$string['databasetypehead'] = 'Pilih pemacu pangkalan data';
$string['dataroot'] = 'Direktori data';
$string['dbprefix'] = 'Awalan jadual';
$string['dirroot'] = 'Direktori Moodle';
$string['environmenthead'] = 'Memeriksa persekitaran anda ...';
$string['environmentsub2'] = 'Setiap pelepasan Moodle mempunyai keperluan minimum versi PHP dan beberapa sambungan mandatori PHP. Persekitaran penuh disemak sebelum setiap pemasangan dan naik taraf. Sila hubungi pentadbir pelayan jika anda tidak tahu bagaimana untuk memasang versi baru atau membolehkan sambungan PHP.';
$string['errorsinenvironment'] = 'Semakan persekitaran gagal!';
$string['installation'] = 'Pemasangan';
$string['langdownloaderror'] = 'Malangnya fail bahasa "{$a}" tidak dapat dimuat turun. Proses pemasangan akan diteruskan dalam Bahasa Inggeris.';
$string['memorylimithelp'] = '<p> Had memori PHP untuk pelayan anda  ditetapkan kepada {$a}. </p>

<p> Hal ini akan menyebabkan Moodle untuk mendapat masalah memori di kemudian hari, terutama jika anda mempunyai banyak modul yang diaktifkan dan/atau ramai pengguna. </p>

<p> Kami menyarankan anda mengkonfigurasikan PHP dengan had yang lebih tinggi jika memungkinkan, seperti 40M. Ada beberapa cara untuk melakukan hal ini yang anda boleh cuba: </p>
<ol>
<li> Jika anda mampu, kompil semula PHP dengan <i>--enable-memory-limit.</i> Hal ini akan membolehkan Moodle untuk menetapkan batas memori itu sendiri. </li>
<li> Jika anda mempunyai akses ke fail php.ini, anda boleh menukar setting <b>memory_limit</b> di sana untuk sesuatu seperti 40M. Jika anda tidak mempunyai akses anda mungkin boleh meminta pentadbir anda untuk melakukan ini untuk anda. </li>
<li> Pada beberapa server PHP anda boleh mencipta baris fail .htaccess di direktori Moodle mengandungi ini: <blockquote><div> php_value memory_limit 40M </div></blockquote><p> Namun, pada beberapa server ini akan mencegah <b>semua</b> laman PHP dari berjalan (anda akan melihat ralat ketika anda melihat halaman), sehingga anda hapuskan file .htaccess. </p></li></ol>';
$string['paths'] = 'Laluan';
$string['pathserrcreatedataroot'] = 'Direktori data ({$a->dataroot}) tidak boleh diwujudkan oleh pemasang.';
$string['pathshead'] = 'Sahkan laluan';
$string['pathsrodataroot'] = 'Direktori dataroot tidak dapat ditulis.';
$string['pathsroparentdataroot'] = 'Direktori induk ({$a->parent}) tidak boleh tulis. Direktori data ({$a->dataroot}) tidak boleh diwujudkan oleh pemasang.';
$string['pathssubadmindir'] = 'Beberapa webhos menggunakan /admin sebagai URL khas untuk anda akses panel kawalan atau sesuatu yang lain. Malangnya, ini bertentangan dengan lokasi standard untuk halaman pentadbiran Moodle. Anda boleh memperbaiki ini dengan menamakan semula direktori admin dalam pemasangan anda, dan meletakkan nama baru di sini. Sebagai contoh: <br /> <br /> <b> moodleadmin </ b> <br /> <br />
Ini akan memulihkan pautan admin dalam Moodle.';
$string['pathssubdataroot'] = 'Anda perlukan lokasi di mana Moodle boleh menyimpan fail yang dimuat naik. Direktori ini sepatutnya boleh dibaca DAN DITULIS oleh pengguna web server (biasanya \'nobody\' atau \'apache\'), tetapi ia mestilah tidak boleh diakses secara langsung melalui laman web. Pemasang akan cuba untuk wujudkannya jika belum ada.';
$string['pathssubdirroot'] = 'Laluan penuh direktori untuk pemasangan Moodle.';
$string['pathssubwwwroot'] = 'Alamat penuh web di mana Moodle akan dicapai. Ia tidak mungkin untuk mengakses Moodle menggunakan berbilang alamat. Jika laman anda mempunyai pelbagai alamat awam, anda mesti menubuhkan pelencongan kekal kepada yang lain kecuali yang satu ini. Jika laman web anda boleh diakses kedua-dua Intranet dan Internet, gunakan alamat awam di sini dan tubuhkan DNS supaya pengguna Intranet boleh gunakan alamat awam juga. Jika alamat sekarang tidak betul, sila ubah URL di pelayar anda untuk memulakan semula pemasangan dengan nilai yang berbeza.';
$string['pathsunsecuredataroot'] = 'Lokasi dataroot tidak selamat';
$string['pathswrongadmindir'] = 'Direktori admin tidak wujud';
$string['phpextension'] = 'Sambungan PHP {$a}';
$string['phpversion'] = 'Versi PHP';
$string['phpversionhelp'] = '<p> Moodle memerlukan versi PHP minimal 4.3.0 atau 5.1.0 (5.0.x memiliki sejumlah masalah yang diketahui). </p>
<p> Anda sedang menjalankan versi {$a} </p>
<p> Anda harus upgrade PHP atau berpindah ke host dengan versi terbaru PHP! <br /> (Dalam kes 5.0.x Anda juga boleh turun taraf ke versi 4.4.x) </p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Anda melihat halaman ini kerana anda telah berjaya memasang dan melancarkan pakej <strong>{$a->packname} {$a->packversion}</strong> di komputer anda. Tahniah!';
$string['welcomep30'] = 'Keluaran ini <strong>{$a->installername}</strong> termasuk aplikasi untuk mencipta sebuah persekitaran di mana <strong>Moodle</strong> akan beroperasi, iaitu:';
$string['welcomep40'] = 'Pakej ini juga termasuk <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Penggunaan semua aplikasi di dalam pakej ini dikawal oleh lesen masing-masing. Pakej lengkap <strong>{$a->installername}</strong> adalah <a href="http://www.opensource.org/docs/definition_plain.html">sumber terbuka</a> dan diedarkan di bawah lesen <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'Laman-laman berikut akan membawa anda melalui beberapa langkah-langkah mudah diikuti untuk mengkonfigurasi dan menetapkan <strong>Moodle</strong> pada komputer anda. Anda mungkin menerima tetapan lalai atau, dengan pilihan, meminda untuk disesuaikan dengan keperluan anda.';
$string['welcomep70'] = 'Klik butang "Seterusnya" di bawah untuk meneruskan penubuhan <strong>Moodle</strong>.';
$string['wwwroot'] = 'Alamat Web';
