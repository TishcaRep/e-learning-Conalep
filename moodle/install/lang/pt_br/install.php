<?php


defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Diretório admin';
$string['availablelangs'] = 'Pacotes de idioma disponíveis';
$string['chooselanguagehead'] = 'Escolha um idioma';
$string['chooselanguagesub'] = 'Por favor, escolha o idioma para a instalação.Este idioma também será utilizado como idioma padrão do site, embora você possa mudar mais tarde.';
$string['clialreadyconfigured'] = 'Arquivo config.php já existe. Por favor, use admin/cli/install_database.php para instalar o Moodle neste site.';
$string['clialreadyinstalled'] = 'Arquivo config.php já existe. Por favor use admin/cli/install_database.php para atualizar o Moodle neste site.';
$string['cliinstallheader'] = 'Programa de instalação por linha de comando do Moodle {$a}';
$string['databasehost'] = 'Host da base de dados';
$string['databasename'] = 'Nome da base de dados';
$string['databasetypehead'] = 'Escolha o driver da base de dados';
$string['dataroot'] = 'Diretório de dados';
$string['datarootpermission'] = 'Permissões nos diretórios de dados';
$string['dbprefix'] = 'Prefixo das tabelas';
$string['dirroot'] = 'Diretório Moodle';
$string['environmenthead'] = 'Verificando o ambiente ...';
$string['environmentsub2'] = 'Cada release do Moodle requer uma versão mínima do PHP e diversas extensões do PHP.
A verificação completa do ambiente é feita antes de cada instalação e atualização.';
$string['errorsinenvironment'] = 'Verificação do Ambiente falhou!';
$string['installation'] = 'Instalação';
$string['langdownloaderror'] = 'Infelizmente não foi possível fazer download do idioma "{$a}". O processo de instalação continuará em Inglês.';
$string['memorylimithelp'] = '<p>O limite de memória do PHP configurado atualmente no seu servidor é de {$a}.</p>

<p>Este limite pode causar problemas no futuro, especialmente quando muitos módulos estiverem ativados ou em caso de um número elevado de usuários.</p>

<p>É aconselhável a configuração do limite de memória com o valor mais alto possível, como 40M. Você pode tentar um dos seguintes caminhos:</p>
<ol>
<li>Se você puder, recompile o PHP com <i>--enable-memory-limit</i>.
Com esta operação Moodle será capaz de configurar o limite de memória sózinho.</li>
<li>Se você tiver acesso ao arquivo php.ini, você pode mudar o parâmetro <b>memory_limit</b> para um valor próximo a 40M. Se você não tiver acesso direto, peça ao administrador do sistema para fazer esta operação.</li>
<li>Em alguns servidores é possível fazer esta mudança criando um arquivo .htaccess no diretório Moodle. O arquivo deve conter a seguinte expressão:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>Alguns servidores não aceitam este procedimento e <b>todas</b> as páginas PHP do servidor ficam bloqueadas ou imprimem mensagens de erro. Neste caso será necessário excluir o arquivo .htaccess .</p>
</li></ol>';
$string['paths'] = 'Caminhos';
$string['pathserrcreatedataroot'] = 'O diretório de dados ({$a->dataroot}) não pode ser criado pelo instalador.';
$string['pathshead'] = 'Confirme os caminhos';
$string['pathsrodataroot'] = 'O diretório de dados raiz não pode ser acessado para escrita.';
$string['pathsroparentdataroot'] = 'O diretório pai ({$a->parent}) não pode ser escrito. O diretório de dados ({$a->dataroot}) não pode ser criado pelo instalador.';
$string['pathssubadmindir'] = 'Alguns poucos webhosts usam /admin como um URL especial para acesso ao painel de controle ou outras coisas. Infelizmente isto conflita com a localizaçao padrão das páginas do administrador Moodle. Você pode corrigir isso renomeando a pasta admin na sua instalação, e colocando esse novo nome aqui. Por exemplo: <em>moodleadmin</em>. Isto irá corrigir os links das páginas do administrador Moodle.';
$string['pathssubdataroot'] = '<p>Um diretório em que Moodle armazenará todo o conteúdo de arquivos enviados pelos usuários. </p>
<p>Este diretório deve ser legível e gravável pelo usuário do servidor web (geralmente "www-data \',\' nobody \', ou\' apache\'). </p>
<p>Não deve ser diretamente acessível através da web. </p>
<p>Se o diretório não existir atualmente, o processo de instalação tentará criá-lo. </p>';
$string['pathssubdirroot'] = '<p>Caminho completo do diretório para instalação do Moddle.</p>';
$string['pathssubwwwroot'] = '<p>O endereço completo em que Moodle pode ser acessado ou seja, o endereço que os usuários vão digitar na barra de endereços do seu navegador para acessar Moodle. </p>
<p>Não é possível acessar Moodle usando múltiplos endereços. Se o seu site é acessível através de múltiplos endereços, em seguida, escolher o mais fácil e configurar um redirecionamento permanente para cada um dos outros endereços. </p>
<p>Se o seu site é acessível tanto a partir da Internet e, a partir de uma rede interna (às vezes chamado de Intranet), em seguida, use o endereço público aqui. </p>
<p>Se o endereço atual não está correto, por favor, mude o URL na barra de endereços do navegador e reiniciar a instalação. </p>';
$string['pathsunsecuredataroot'] = 'A localização da pasta de dados não é segura.';
$string['pathswrongadmindir'] = 'Diretório Admin não existe';
$string['phpextension'] = 'Extensão PHP {$a}';
$string['phpversion'] = 'Versão do PHP';
$string['phpversionhelp'] = '<p>O Moodle requer uma versão PHP de pelo menos 5.6.5 ou 7.1 (o 7.0.x tem algumas limitações do motor). </p>
<p>Atualmente você está executando a versão {$a}. </p>
<p>Você deve atualizar o PHP ou migrar para um host com uma versão mais recente do PHP. </p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Você está vendo esa página pois instalou com sucesso o pacote<strong>{$a->packname} {$a->packversion}</strong>. Parabéns!';
$string['welcomep30'] = 'Esta versão do <strong>{$a->installername}</strong> inclui as aplicações para a criação de um ambiente em que <strong>Moodle</strong> possa operar:';
$string['welcomep40'] = 'O pacote inclui também o <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'O uso das aplicações incluídas neste pacote é regulamentado pelas respectivas licenças. O instalador completo <strong>{$a->installername}</strong> é <a href="http://www.opensource.org/docs/definition_plain.html">open source</a> e é distribuído com uma licença <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'As seguinte páginas guiam passo a passo a configuração de <strong>Moodle</strong> no seu computador. Você pode usar a configuração padrão ou alterá-las de acordo com as suas necessidades.';
$string['welcomep70'] = 'Clicar o botão "Próxima" abaixo para continuar a configuração de <strong>Moodle</strong>.';
$string['wwwroot'] = 'Endereço web';
