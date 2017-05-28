<?php

defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Directorio Admin';
$string['availablelangs'] = 'Paquetes de idiomas disponibles';
$string['chooselanguagehead'] = 'Seleccionar el idioma';
$string['chooselanguagesub'] = 'Selecciona un idioma para el proceso de instalación. Este idioma se usará también como el idioma por defecto del sitio, aunque se puede cambiar más adelante.';
$string['clialreadyconfigured'] = 'Ya existe el archivo de configuración: config.php. Emplea admin/cli/install_database.php para instalar moodle en este sitio.';
$string['clialreadyinstalled'] = 'Ya existe el archivo de configuración: config.php. Emplea admin/cli/install_database.php para actualizar el moodle de este sitio.';
$string['cliinstallheader'] = 'Programa de instalación desde la linea de comandos de Moodle {$a}';
$string['databasehost'] = 'Servidor';
$string['databasename'] = 'Base de datos';
$string['databasetypehead'] = 'Controlador';
$string['dataroot'] = 'Directorio de Datos';
$string['datarootpermission'] = 'Permiso par EL  directorios de datos';
$string['dbprefix'] = 'Prefijo para Tablas';
$string['dirroot'] = 'Directorio Moodle';
$string['environmenthead'] = 'Verificando tu entorno...';
$string['environmentsub2'] = 'Cada versión de Moodle tiene algunos requerimientos mínimos de la versión de PHP y un número de extensiones obligatorias de PHP.
La verificación completa del entorno se realiza antes de cada instalación y actualización. Ponte en contacto con el administrador del servidor si no sabes cómo instalar una nueva versión o habilitar las extensiones de PHP.';
$string['errorsinenvironment'] = '¡Falló la verificación del entrono!';
$string['installation'] = 'Instalación';
$string['langdownloaderror'] = 'Desafortunadamente el idioma "{$ a}" no pudo ser descargado. El proceso de instalación continuará en inglés.';
$string['paths'] = 'Rutas';
$string['pathserrcreatedataroot'] = 'El directorio de datos ({$a->dataroot}) no puede ser creado por el instalador.';
$string['pathshead'] = 'Confirma las rutas';
$string['pathsrodataroot'] = 'No se puede escribir en el directorio raíz';
$string['pathsroparentdataroot'] = 'No se puede escribir en el directorio base ({$a->parent}). El directorio de datos ({$a->dataroot}) no puede ser creado por el instalador.';
$string['pathssubdataroot'] = '<p>El directorio donde Moodle guardará los documentos subidos por los usuarios.</p>
<p>El directorio debe permitir LEER y ESCRIBIR al usuario del servidor web (<i>usualmente \'www-data\', \'nobody\' o \'apache\'</i>).</p>
<p>No debe ser accesible directamente desde la web.</p>
<p>Si el directorio no existe, el proceso de instalación tratará de crearlo.</p>';
$string['pathssubdirroot'] = '<p>La ruta completa del directorio que contiene el código de Moodle.</p>';
$string['pathssubwwwroot'] = '<p>La dirección web completa para acceder a Moodle (<i>la dirección que los usuarios escribirán en el navegador para acceder a Moodle</i>)</p>
<p>No es posible acceder a Moodle utilizando múltiples direcciones. Si tu sitio es accesible desde múltiples direcciones debes seleccionar la mas conveniente y redireccionar permanentemente a está las demás direcciones.</p>
<p>Si tu sitio web es accesible tanto desde internet como desde una red interna (<i>algunas veces llamada Intranet</i>), escribe aquí la dirección pública.</p>
<p>Si la dirección actual no es correcta, cambia la URL en el navegador y reinicia la instalación.</p>';
$string['pathsunsecuredataroot'] = 'La ubicación del directorio raíz no es segura';
$string['pathswrongadmindir'] = 'El directorio admin no existe';
$string['phpextension'] = '{$a} extensión PHP';
$string['phpversion'] = 'Versión PHP';
