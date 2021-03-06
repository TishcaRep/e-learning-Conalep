<?php


defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p>Non è possibile creare il database </p> <p>Il database non esiste e l\'utente fornito non è autorizzato a crearlo.</p>
<p>E\' necessario che l\'amministratore del sito  verifichi  la configurazione del database.</p>';
$string['cannotcreatelangdir'] = 'Non è possibile creare la cartella lang';
$string['cannotcreatetempdir'] = 'Non è possibile creare la cartella temp';
$string['cannotdownloadcomponents'] = 'Non è possibile scaricare componenti.';
$string['cannotdownloadzipfile'] = 'Non è possibile scaricare file ZIP.';
$string['cannotfindcomponent'] = 'Non è possibile trovare il componente.';
$string['cannotsavemd5file'] = 'Non è possibile salvare il file md5';
$string['cannotsavezipfile'] = 'Non è possibile salvare il file ZIP';
$string['cannotunzipfile'] = 'Non è possibile decomprimere il file.';
$string['componentisuptodate'] = 'Il componente è aggiornato.';
$string['dmlexceptiononinstall'] = '<p>Si è verificato un errore nel database: [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'Il controllo del file scaricato non è andato a buon fine.';
$string['invalidmd5'] = 'La variabile di controllo era errata - prova di nuovo';
$string['missingrequiredfield'] = 'Mancano alcuni campi richiesti';
$string['remotedownloaderror'] = '<p>Lo scaricamento delle componenti non è andato a buon fine. Verificare le impostazioni del proxy. L\'estensione PHP cURL è fortemente consigliata.</p>
<p>Devi scaricare manualmente il file <a href="{$a->url}">{$a->url}</a>, copiarlo in "{$a->dest}" e decomprimerlo.</p>';
$string['wrongdestpath'] = 'Percorso di destinazione errato';
$string['wrongsourcebase'] = 'Indirizzo (URL) sorgente errato.';
$string['wrongzipfilename'] = 'Il nome del file ZIP è errato.';
