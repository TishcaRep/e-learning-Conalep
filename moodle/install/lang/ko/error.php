<?php


defined('MOODLE_INTERNAL') || die();

$string['cannotcreatelangdir'] = '언어팩 경로를 생성할 수 없음';
$string['cannotcreatetempdir'] = 'temp 디렉토리를 만들 수 없음';
$string['cannotdownloadcomponents'] = '구성요소를 내려받을 수 없음';
$string['cannotdownloadzipfile'] = 'ZIP파일을 내려받을 수 없음';
$string['cannotfindcomponent'] = '구성요소를 찾을 수 없음';
$string['cannotsavemd5file'] = 'md5 파일을 저장할 수 없음';
$string['cannotsavezipfile'] = 'ZIP 파일을 저장할 수 없음';
$string['cannotunzipfile'] = '압축된 파일을 풀 수 없음';
$string['componentisuptodate'] = '구성 요소가 최신임';
$string['dmlexceptiononinstall'] = '<p>데이터베이스 오류가 발생하였습니다. [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = '내려받은 파일 점검 실패';
$string['invalidmd5'] = '변수 점검 오류 - 재시도 할 것';
$string['missingrequiredfield'] = '필요한 항목이 빠져 있음';
$string['remotedownloaderror'] = '서버로 구성요소를 다운로드하는데 실패하였습니다. 프록시 설정을 확인하십시요. PHP cURL 확장라이브러리를 추천합니다. <br /><br /> <a href="{$a->url}">{$a->url}</a> 파일을 수동으로 다운로드해서 서버의 "{$a->dest}"에 복사한 다음 거기서 압축을 해제하십시요.';
$string['wrongdestpath'] = '잘못된 목적 경로';
$string['wrongsourcebase'] = '잘못된 소스 URL  베이스';
$string['wrongzipfilename'] = '잘못된 ZIP 파일명';
