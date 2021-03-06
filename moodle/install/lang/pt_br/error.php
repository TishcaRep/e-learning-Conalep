<?php


defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p> Não é possível criar o banco de dados. </p>
<p> O banco de dados especificado não existe e o determinado usuário não tem permissão para criar o banco de dados. </p>
<p> O administrador do site deve verificar a configuração do banco de dados. </p>';
$string['cannotcreatelangdir'] = 'Impossível criar diretório lang';
$string['cannotcreatetempdir'] = 'Impossível criar diretório temp';
$string['cannotdownloadcomponents'] = 'Impossível fazer download dos componentes';
$string['cannotdownloadzipfile'] = 'Impossível fazer download do arquivo ZIP';
$string['cannotfindcomponent'] = 'Impossível achar componente';
$string['cannotsavemd5file'] = 'Impossível salvar arquivo md5';
$string['cannotsavezipfile'] = 'Impossível salvar arquivo ZIP';
$string['cannotunzipfile'] = 'Impossível descompactar arquivo ZIP';
$string['componentisuptodate'] = 'Componente está atualizado';
$string['dmlexceptiononinstall'] = '<p> Ocorreu um erro no banco de dados [{$a->errorcode}].<br />{$a->debuginfo} </p>';
$string['downloadedfilecheckfailed'] = 'A verificação do arquivo baixado falhou';
$string['invalidmd5'] = 'A variável de verificação estava errada - tente novamente';
$string['missingrequiredfield'] = 'Faltam informações obrigatórias';
$string['remotedownloaderror'] = '<p>O download do componente falhou, por favor verifique as configurações do proxy. A extensão cURL do PHP é altamente recomendada.<p/><p>Você precisar baixar o <a href="{$a->url}">arquivo</a> manualmente, copiar para "{$a->dest}" e descompactar lá.<p/>';
$string['wrongdestpath'] = 'Caminho do destino errado';
$string['wrongsourcebase'] = 'URL do recurso errada';
$string['wrongzipfilename'] = 'Nome do arquivo ZIP errado';
