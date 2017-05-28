<?php


defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Directorio Admin';
$string['availablelangs'] = 'Packs de idiomas disponibles';
$string['chooselanguagehead'] = 'Seleccionar idioma';
$string['chooselanguagesub'] = 'Por favor, seleccione un idioma para el proceso de instalación. Este idioma se usará también como idioma por defecto del sitio, si bien puede cambiarse más adelante.';
$string['clialreadyconfigured'] = 'El archivo de configuración config.php ya existe. Por favor, utilice admin/cli/install_database.php para instalar Sisconalep en este sitio.';
$string['clialreadyinstalled'] = 'El archivo de configuración config.php ya existe. Por favor, utilice admin/cli/install_database.php para actualizar Sisconalep en este sitio.';
$string['cliinstallheader'] = 'Programa de instalación Sisconalep de línea de comando {$a}';
$string['databasehost'] = 'Servidor de la base de datos';
$string['databasename'] = 'Nombre de la base de datos';
$string['databasetypehead'] = 'Seleccione el controlador de la base de datos';
$string['dataroot'] = 'Directorio de Datos';
$string['datarootpermission'] = 'Permiso directorios de datos';
$string['dbprefix'] = 'Prefijo de tablas';
$string['dirroot'] = 'Directorio de Sisconalep';
$string['environmenthead'] = 'Comprobando su entorno';
$string['environmentsub2'] = 'Cada versión de Sisconalep tiene algún requisito mínimo de la versión de PHP y un número obligatorio de extensiones de PHP.
Una comprobación del entorno completo se realiza antes de cada instalación y actualización. Por favor, póngase en contacto con el administrador del servidor si no sabes cómo instalar la nueva versión o habilitar las extensiones PHP.';
$string['errorsinenvironment'] = '¡La comprobación del entorno fallo!';
$string['installation'] = 'Instalación';
$string['langdownloaderror'] = 'El idioma "{$a}" no pudo ser descargado. El proceso de instalación continuará en Inglés.';
$string['memorylimithelp'] = '<p>El límite de memoria PHP en su servidor es actualmente {$a}.</p>

<p>Esto puede ocasionar que Sisconalep tenga problemas de memoria más adelante, especialmente si usted tiene activados muchos módulos y/o muchos usuarios.</p>

<p>Recomendamos que configure PHP con el límite más alto posible, e.g. 40M.
Hay varias formas de hacer esto:</p>
<ol>
<li>Si puede hacerlo, recompile PHP con <i>--enable-memory-limit</i>.
Esto hace que Sisconalep fije por sí mismo el límite de memoria.</li>
<li>Si usted tiene acceso al archivo php.ini, puede cambiar el ajuste <b>memory_limit</b>
a, digamos, 40M. Si no lo tiene, pida a su administrador que lo haga por usted.</li>
<li>En algunos servidores PHP usted puede crear en el directorio Sisconalep un archivo .htaccess que contenga esta línea:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>Sin embargo, en algunos servidores esto hace que <b>todas</b> las páginas PHP dejen de funcionar
(podrá ver los errores cuando mire las páginas) de modo que tendrá que eliminar el archivo .htaccess.</p></li>
</ol>';
$string['paths'] = 'Rutas';
$string['pathserrcreatedataroot'] = 'El directorio de los datos ({$a->dataroot}) no puede ser creado por el instalador.';
$string['pathshead'] = 'Confirme las rutas';
$string['pathsrodataroot'] = 'El directorio dataroot no tiene permisos de escritura.';
$string['pathsroparentdataroot'] = 'El directorio padre ({$a->parent}) no tiene permisos de escritura. El directorio de los datos ({$a->dataroot}) no puede ser creado por el instalador.';
$string['pathssubadmindir'] = 'Muy pocos servidores web usan /admin como un URL especial para acceder a un
panel de control o algo similar. Lamentablemente, esto entra en conflicto con la ubicación estándar para las páginas de administración de Sisconalep. Usted puede solucionar este problema, renombrando el directorio admin en su instalación Sisconalep, poniendo un nuevo nombre aquí. Por ejemplo: <em> moodleadmin </em>. Esto solucionará los enlaces de administración en instalación Sisconalep.';
$string['pathssubdataroot'] = 'Usted necesita un espacio donde Sisconalep puede guardar los archivos subidos. En este directorio debe poder LEER y ESCRIBIR el usuario del servidor web (por lo general \'nobody\',  \'apache\' o \'www-data\'), pero no debe poderse acceder a esta carpeta directamente a través de la web. El instalador tratará de crearla si no existe.';
$string['pathssubdirroot'] = '<p>Ruta completa del directorio que contiene el código de  Sisconalep.</p>';
$string['pathssubwwwroot'] = 'Dirección web completa para acceder a Sisconalep. No es posible acceder a Sisconalep utilizando múltiples direcciones. Si su sitio tiene varias direcciones públicas debe configurar redirecciones permanentes en todas ellas, excepto en ésta. Si su sitio web es accesible tanto desde una intranet como desde Internet, escriba aquí la dirección pública y configure su DNS para que los usuarios de su intranet puedan también utilizar la dirección pública.';
$string['pathsunsecuredataroot'] = 'La ubicación de dataroot no es segura';
$string['pathswrongadmindir'] = 'El directorio admin no existe';
$string['phpextension'] = 'Extensión PHP {$a}';
$string['phpversion'] = 'Versión PHP';
$string['phpversionhelp'] = '<p>Sisconalep requiere al menos una versión de PHP 4.3.0 o 5.1.0 ((5.0.x tiene una serie de problemas conocidos).</p>
<p>En este momento está ejecutando la versión {$a}</p>
<p>¡Debe actualizar PHP o trasladarse a otro servidor con una versión más reciente de PHP!<br />
(En caso de 5.0.x podría también revertir a la versión 4.4.x)</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Si está viendo esta página es porque ha podido ejecutar el paquete <strong>{$a->packname} {$a->packversion}</strong> en su ordenador. !Enhorabuena!';
$string['welcomep30'] = 'Esta versión de <strong>{$a->installername}</strong> incluye las
    aplicaciones necesarias para que <strong>Sisconalep</strong> funcione en su ordenador,
    principalmente:';
$string['welcomep40'] = 'El paquete también incluye <strong>Sisconalep {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'El uso de todas las aplicaciones del paquete está gobernado por sus respectivas
    licencias. El programa <strong>{$a->installername}</strong> es
    <a href="http://www.opensource.org/docs/definition_plain.html">código abierto</a> y se distribuye
    bajo licencia <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'Las siguientes páginas le guiarán a través de algunos sencillos pasos para configurar
    y ajustar <strong>Sisconalep</strong> en su ordenador. Puede utilizar los valores por defecto sugeridos o,
    de forma opcional, modificarlos para que se ajusten a sus necesidades.';
$string['welcomep70'] = 'Pulse en el botón "Siguiente" para continuar con la configuración de <strong>Sisconalep</strong>.';
$string['wwwroot'] = 'Dirección Web';
