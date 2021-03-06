<?php


defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Yönetici Dizini';
$string['availablelangs'] = 'Kullanılabilir dil paketleri';
$string['chooselanguagehead'] = 'Bir dil seçin';
$string['chooselanguagesub'] = 'Lütfen, SADECE kurulum için bir dil seçin. Site ve kullanıcı dillerini sonraki ekranda seçebilirsiniz.';
$string['clialreadyconfigured'] = 'config.php halihazırda mevcut, lütfen eğer bu siteyi yüklemek istiyorsanız şu dizini kullanın: admin/cli/install_database.php';
$string['clialreadyinstalled'] = 'Config.php zaten var. Sitenizi güncellemek istiyorsanız bu adresi kullanın: admin/cli/install_database.php';
$string['cliinstallheader'] = 'Moodle {$a} komut satırı kurulum programı';
$string['databasehost'] = 'Veritabanı sunucusu';
$string['databasename'] = 'Veritabanı adı';
$string['databasetypehead'] = 'Veritabanı sürücünü seçin';
$string['dataroot'] = 'Veri Dizini';
$string['datarootpermission'] = 'Veri dizinleri izni';
$string['dbprefix'] = 'Tablo öneki';
$string['dirroot'] = 'Moodle Dizini';
$string['environmenthead'] = 'Ortam kontrol ediliyor...';
$string['environmentsub2'] = 'Her Moodle dağıtımı, bazı PHP versiyon gereksinimi ve bir takım PHP uzantılarının yüklü olmalı zorunluluğuna sahiptir. Tüm ortam denetimi her yükleme ve güncellemeden önce yapılmalıdır. Eğer PHP \'nin yeni versiyonunu veya PHP uzantılarını nasıl yükleyeceğinizi bilmiyorsanız lütfen sunucu yöneticiniz ile iletişime geçiniz.';
$string['errorsinenvironment'] = 'Ortam kontrolu başarısız oldu!';
$string['installation'] = 'Kurulum';
$string['langdownloaderror'] = 'Maalesef "{$a}" dil paketi kurulamadı. Kuruluma İngilizce olarak devam edilecek.';
$string['memorylimithelp'] = '<p>Sunucunuz için PHP bellek limiti şu anda {$a} olarak ayarlanmış durumda.</p>

<p>Özellikle bir çok modülü etkinleştirilmiş ve/veya çok fazla kullanıcınız
varsa bu durum daha sonra bazı bellek sorunlarına sebep olabilir.</p>

<p>Mümkünse size PHP\'e daha yüksek limitli bir bellek ayarı yapmanızı,
örneğin, 40M, öneriyoruz. İşte bunu yapabilmeniz için size bir kaç yol:</p>

<ol>
<li>Bunu yapmaya yetkiliyseniz, PHP\'yi <i>--enable-memory-limit</i> ile yeniden derleyin.
Bu, Moodle\'nın kendi kendine bellek limitini ayarlasına izin verecek.</li>

<li>php.ini dosyasına erişim hakkınız varsa, <b>memory_limit</b> ayarını 40M gibi
bir ayarla değiştirin. Erişim hakkınız yoksa, bunu sistem yöneticinizden sizin
için yapmasını isteyin.</li>

<li>Bazı PHP sunucularında Moodle klasörü içinde şu ayarı içeren bir
.htaccess dosyası oluşturabilirsiniz:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>Ancak, bazı sunucularda bu durum çalışan <b>bütün</b> PHP sayfalarını engelleyecektir.
(sayfanız altına baktığınızda bazı hatalar göreceksiniz)
Böyle bir durumda .htaccess dosyasını silmeniz gerekiyor.</p></li>
</ol>';
$string['paths'] = 'Yollar';
$string['pathserrcreatedataroot'] = 'Veri Klasörü ({$a->dataroot}) kurulum tarafından oluşturulamıyor.';
$string['pathshead'] = 'Yolları doğrulayın';
$string['pathsrodataroot'] = 'Veri yolu yazılabilir değil.';
$string['pathsroparentdataroot'] = 'Ana klasör ({$a->parent}) yazılabilir değil. Veri Klasörü ({$a->dataroot}) kurulum tarafından oluşturulamıyor.';
$string['pathssubadmindir'] = 'Pek az web sunucusu /admin adresini kontrol paneline yada benzeri birşeye erişmek için kullanır. Ne yazık ki bu Moodle admin sayfalarının standart konumuyla bir karışıklık yaratır. Bu durumu düzeltmek için kurulumunuzdaki admin dizinini yeniden isimlendirip buraya yeni ismi yazınız. Örneğin: <em>moodleadmin</em>. Bu Moodle\'daki admin bağlantısını düzeltecektir.';
$string['pathssubdataroot'] = '<p>Moodle\'ın yüklenen dosyaları kayıt etmesi için bir yere ihtiyacınız var. </p>
 <p>Bu dizin/klasör web sunucusunun kullanıcı hesabı tarafından (genellikle \' \'www-data\', \'nobody\', ya da \'apache\') okunabilir ve yazılabilir olmalıdır. </p>
 <p>Bu okuma, yazma izinlerini klasöre vermelisiniz. </p>
<p>Fakat bu klasör aynı zamanda web üzerinden direk erişilebilir olmamalıdır. </p>
<p>Yükleyici eğer klasör yok ise oluşturmayı deneyecektir.</p>';
$string['pathssubdirroot'] = '<p>Moodle kurulumu için tam klasör yolu.</p >';
$string['pathssubwwwroot'] = '<p>Moodle\'a erişilecek tam web adresi. Moodle\'ın birden çok adres kullanması mümkün değildir. </p>
<p>Eğer siteniz birden fazla adrese sahip ise bu adres harici diğerlerinin yönlendirme ayarlarını yapılandırın.</p>
<p>Eğer siteniz Intranet ve İnternet üzerinden erişilebilirse burada genel bir adres kullanın ve DNS\'iniz ayarlayın. Bu şekilde Intranet kullanıcıları da genel adresi kullanabilirler.</p>
<p>IEğer adres doğru değilse lütfen kurulumu tekrar başlatmak için tarayıcınızdaki URL\'i değiştirin.</p>';
$string['pathsunsecuredataroot'] = 'Veri yolu güvenli değil';
$string['pathswrongadmindir'] = 'Yönetici klasörü yok';
$string['phpextension'] = '{$a} PHP eklentisi';
$string['phpversion'] = 'PHP sürümü';
$string['phpversionhelp'] = '<p>Moodle, PHP sürümünün en az 4.3.0 veya 5.1.0 olmasını gerektirir (5.0.x sürümünde çok fazla hata var).</p>
<p>Şu anda çalışan sürüm: {$a}</p>
<p>PHP\'yi güncellemeli veya PHP\'nin yeni sürümünü kullananan bir hostinge taşınmalısınız!</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Bilgisayarınıza <strong>{$a->packname} {$a->packversion}</strong> paketini başarıyla kurdunuz. Tebrikler!';
$string['welcomep30'] = '<strong>{$a->installername}</strong>\'nin bu sürümü <strong>Moodle</strong>\'da bir ortam oluşturmak için uygulamaları içerir:';
$string['welcomep40'] = 'Bu paket <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong> sürümünü de içerir.';
$string['welcomep50'] = 'Bu paketteki tüm uygulamaların kullanımı her biri kendine ait olan lisanslar tarafından yönetilir. <strong>{$a->installername}</strong> paketinin tamamı <a href="http://www.opensource.org/docs/definition_plain.html">açık kaynak</a> kodludur ve <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a> lisansı altında dağıtılır.';
$string['welcomep60'] = 'Aşağıdaki sayfalar <strong>Moodle</strong>ın kurulumu ve yapılandırılması için size basitçe yol gösterecektir. Varsayılan ayarları kabul edebilir veya ihtiyaçlarınıza göre bunları değiştirebilirsiniz.';
$string['welcomep70'] = '<strong>Moodle</strong> kurulumu için aşağıdaki "İleri" tuşuna basın.';
$string['wwwroot'] = 'Web adresi';
