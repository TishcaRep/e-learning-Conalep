<?php

defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p> No se puede crear la base de datos. </p><p> La base de datos especificada no existe y el usuario indicado no tiene permiso para crear la base de datos. </p><p> El administrador del sitio debe comprobar la configuración de base de datos. </p>';
$string['cannotcreatelangdir'] = 'No se puede crear el directorio de idioma.';
$string['cannotcreatetempdir'] = 'No se puede crear el directorio temp.';
$string['cannotdownloadcomponents'] = 'No se puede descargar componentes';
$string['cannotdownloadzipfile'] = 'No se puede descargar el archivo ZIP';
$string['cannotfindcomponent'] = 'No se puede encontrar el componente.';
$string['cannotsavemd5file'] = 'No se puede guardar el archivo md5';
$string['cannotsavezipfile'] = 'No se puede guardar el archivo ZIP';
$string['cannotunzipfile'] = 'No se puede descomprimir el archivo';
$string['componentisuptodate'] = 'El componente está actualizado';
$string['dmlexceptiononinstall'] = '<p>Se ha producido un error de base de datos [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'Ha fallado la comprobación del archivo descargado';
$string['invalidmd5'] = 'La variable de verificación MD5 es incorrecta no es valida - trate nuevamente';
$string['missingrequiredfield'] = 'Falta algún campo necesario';
$string['remotedownloaderror'] = '<p>Falló la descarga del componente a su servidor. Se recomienda verificar los ajustes del proxy, extensión PHP cURL.</p>
<p>Debe descargar el <a href="{$a->url}">{$a->url}</a> archivo manualmente, copiarlo en "{$a->dest}" en su servidor y descomprimirlo allí.</p>';
$string['wrongdestpath'] = 'Ruta de destino errónea.';
$string['wrongsourcebase'] = 'Base de fuente de URL errónea.';
$string['wrongzipfilename'] = 'Nombre de archivo ZIP erróneo.';
