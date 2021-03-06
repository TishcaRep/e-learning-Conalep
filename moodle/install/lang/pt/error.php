<?php


defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p> Não é possível criar a base de dados. </p><p> A base de dados especificada não existe e o utilizador em questão não tem permissão para criar a base de dados. </p><p> O administrador do site deve verificar a configuração da base de dados. </p>';
$string['cannotcreatelangdir'] = 'Não é possível criar a pasta de pacotes linguísticos';
$string['cannotcreatetempdir'] = 'Não é possível criar a pasta de ficheiros temporários';
$string['cannotdownloadcomponents'] = 'Não é possível descarregar os componentes.';
$string['cannotdownloadzipfile'] = 'Não é possível descarregar o ficheiro ZIP.';
$string['cannotfindcomponent'] = 'Não é possível encontrar o componente';
$string['cannotsavemd5file'] = 'Não é possível gravar o ficheiro md5';
$string['cannotsavezipfile'] = 'Não é possível gravar o ficheiro ZIP';
$string['cannotunzipfile'] = 'Não é possível descompactar o ficheiro ZIP';
$string['componentisuptodate'] = 'O componente está atualizado.';
$string['dmlexceptiononinstall'] = '<p>Ocorreu um erro de base de dados [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'A verificação do ficheiro descarregado falhou.';
$string['invalidmd5'] = 'A variável de verificação está errada - tente novamente.';
$string['missingrequiredfield'] = 'Um dos campos obrigatórios está em falta';
$string['remotedownloaderror'] = 'Não foi possível descarregar o componente para o servidor. Verifique as configurações do proxy. A instalação da extensão cURL do PHP é muito recomendada.<br /><br />Terá de descarregar manualmente o ficheiro <a href="{$a->url}">{$a->url}</a>, copiá-lo para a pasta "{$a->dest}" no seu servidor e descompactá-lo';
$string['wrongdestpath'] = 'Caminho de destino errado';
$string['wrongsourcebase'] = 'Base do URL de origem errada';
$string['wrongzipfilename'] = 'Nome de ficheiro ZIP errado';
