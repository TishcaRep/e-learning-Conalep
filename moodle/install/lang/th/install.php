<?php


defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'ไดเรกทอรี admin';
$string['availablelangs'] = 'ภาษาทั้งหมด';
$string['chooselanguagehead'] = 'เลื่อกภาษา';
$string['chooselanguagesub'] = 'กรุณาเลือกภาษาที่ใช้ในการติดตั้งเท่านั้น คุณจะสามารถเลือกตั้งค่าภาษาสำหรับเว็บไซต์และสำหรับสมาชิกแต่ละคนในหน้าจอต่อไป';
$string['dataroot'] = 'ไดเรกทอรีข้อมูล';
$string['dbprefix'] = 'คำนำหน้าตาราง (Table Prefix)';
$string['dirroot'] = 'Moodle ไดเรกทอรี';
$string['environmenthead'] = 'ตรวจสอบความพร้อมของระบบ';
$string['installation'] = 'การติดตั้ง';
$string['langdownloaderror'] = 'ภาษา "{$a}" ไม่ได้รับการติดตั้ง กระบวนการติดตั้งจะดำเนินไปด้วยภาษาอังกฤษ';
$string['memorylimithelp'] = '<p>ค่าความจำสูงสุดของเซิร์ฟเวอร์ของคุณตั้งไว้ที่  {$a}</p>

<p>ความจำดังกล่าวมีค่าน้อยไปค่ะอาจทำให้มีปัญหาในการใช้งาน moodle ในภายหลังโดยเฉพาะเมื่อคุณใช้โมดูลหลาย ๆ ตัวรวมไปถึงมีสมาชิกจำนวนมาก

<p>ค่าที่ตั้งไว้นี้ควรตั้งให้มากที่สุดเท่าที่จะมากได้ ค่าทั่วไปแนะนำไว้ที่ 40M มีอยู่หลายวิธีในการเพิ่มค่าความจำสูงสุด กล่าวคือ:

<ol>

<li>รีคอมไพล์ PHP ใหม่ โดยเพิ่มคำสั่ง <i>--enable-memory-limit</i> ซึ่งเป็นการตั้งค่าให้ moodle กำหนดขีดจำกัดค่าสูงสุดเอง

<li>ถ้าคุณสามารถแก้ไขไฟล์  php.ini ได้ด้วยตนเองก็สามารถเปลี่ยนค่า <b>memory_limit</b> ให้เป็นค่าอื่นได้เช่น  40M แต่ถ้าไม่สามารถเปลี่ยนค่านี้ได้ด้วยตนเองให้แจ้งผู้ดูแลระบบแก้ไข

<li>ในเซิร์ฟเวอร์ PHP บางตัวคุณสามารถสร้าง ไฟล์ .htaccess ภายใต้ไดเรกทอรี moodle ซึ่งมีบรรทัดต่อไปนี้อยู่:

<p><blockquote>php_value memory_limit 40M</blockquote></p>

<p>อย่างไรก็ตามในบางเซิร์ฟเวอร์คุณไม่สามารถใช้ วิธีนี้ได้ โดยจะมีการแสดง error ขึ้นมาคุณจำเป็นต้องลบไฟล์ดังกล่าวนี้ทิ้ง
</ol>';
$string['phpversion'] = 'PHP เวอร์ชัน';
$string['phpversionhelp'] = '<p>Moodle จำเป็นต้องใช้ PHP เวอร์ชัน 4.1.0 เป็นอย่างน้อย</p>

<p>คุณกำลังใช้เวอร์ชัน {$a}</p>

<p>คุณต้องอัพเกรด  PHP หรือย้ายโฮสต์ใหม่ที่มี PHP เวอร์ชันใหม่กว่า</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'ท่านได้ทำการติดตั้ง<strong>{$a->packname} {$a->packversion}</strong> สำเร็จแล้ว';
$string['welcomep30'] = 'เวอร์ชั่น <strong>{$a->installername}</strong>รวมโปรแกรมสำหรับสร้างความให้กับระบบซึ่ง Moodle สามารถทำงานได้';
$string['welcomep40'] = 'แพ็กเกจนี้รวม <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'การใช้งานโปรแกรมต่าง ๆ ในแพ็กเกจนี้สามารถทำได้โดยไม่ละเมิดสัญญานุญาตของแต่ละโปรแกรม  โปแกรม<strong>{$a->installername}</strong>เต็มรูปแบบนั้นจัดเป็นโปรแกรมประเภท
<a href="http://www.opensource.org/docs/definition_plain.html">โอเพ่นซอร์ส</a> และเผยแพร่ภายใต้สํญญานุญาต <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>';
$string['welcomep60'] = 'หน้าถัดจากนี้ไปจะเป็นการตั้งค่า Moodle บนคอมพิวเตอร์คุณสามารถยอมรับค่าที่ตั้งไว้ทั้งหมดหรือเปลี่ยนแปลงให้เหมาะกับความต้องการ';
$string['welcomep70'] = 'คลิกที่ "ต่อไป" เพื่อติดตั้ง Moodle ต่อไป';
$string['wwwroot'] = 'ที่อยู่ของเว็บ';
