<?php


defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Thư mục quản trị';
$string['availablelangs'] = 'Các gói ngôn ngữ đã có';
$string['dataroot'] = 'Thư mục dữ liệu';
$string['dbprefix'] = 'Các bảng cố định trước';
$string['dirroot'] = 'Thư mục Moodle';
$string['installation'] = 'Cài đặt';
$string['memorylimithelp'] = '<p> PHP thiết lập giới hạn bộ nhớ cho máy chủ của bạn hiện tại là {$a}.</p>

<p>Đây có thể là nguyên nhân Moodle có các vấn đề về bộ nhớ vào một thời điểm nào đó, đặc biệt
   nếu bạn có nhiều môđun được cho phép và nhiều người dùng.

<p>Chúng tôi đề nghị rằng bạn cấu hình PHP với một giới hạn lớn hơn nếu có thể, chẳng hạn như 40M.
   Có một số cách để làm điều này mà bạn có thể thử:
<ol>
<li>Nếu bạn có khả năng, biên tập lại PHP với <i>--giới hạn bộ nhớ cho phép</i>.
    Điều này sẽ cho phép Moodle tự thiết lập giới hạn bộ nhớ.
<li>Nếu bạn truy cập file php.ini của bạn, bạn có thể thay đổi <b>giới hạn bộ nhớ</b>
    thiết lập trong đó thành một giá trị nào đó chẳng hạn như 40M. Nếu bạn không được phép truy cập
    bạn có thể yêu cầu quản trị viên của bạn để làm điều đó cho bạn.</li>
<li> Trên một số máy chủ chạy PHP bạn có thể tạo một file .htaccess trong thư mục Moodle
    chứa dòng này:
    <p><blockquote> giá trị giới hạn bộ nhớ 40M</blockquote></p>
    <p>Tuy nhiên, trên một số máy chủ điều này có thể ngăn cản <b>tất cả</b> các trang PHP làm việc
    (bạn sẽ nhìn thấy các lỗi khi bạn xem xét những trang này )vì thế bạn sẽ pahỉ di chuyền file .htaccess.</p></li>
</ol>';
$string['phpversion'] = 'Phiên bản PHP';
$string['phpversionhelp'] = '<p>Moodle yêu cầu một phiên bản PHP ít nhất là 4.1.0.</p>
<p>Bạn đang dùng phiên bản hiện hành {$a}</p>
<p>Ban phải nâng cấp PHP hoặc di chuyển một máy chủ với một phiên bản PHP mới hơn!</p>';
$string['wwwroot'] = 'Địa chỉ web';
