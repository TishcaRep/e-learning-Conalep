<?php


defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p>Impossible de créer la base de données.</p>
<p>La base de données indiquées n\'existe pas et l\'utilisateur spécifié n\'a pas les autorisations permettant de créer une base de données.</p>.
<p>L\'administrateur du site doit revoir la configuration de la base de données.</p>';
$string['cannotcreatelangdir'] = 'Création du dossier lang impossible';
$string['cannotcreatetempdir'] = 'Création du dossier temp impossible';
$string['cannotdownloadcomponents'] = 'Téléchargement des composants impossible';
$string['cannotdownloadzipfile'] = 'Téléchargement du fichier ZIP impossible';
$string['cannotfindcomponent'] = 'Composant introuvable';
$string['cannotsavemd5file'] = 'Enregistrement du fichier md5 impossible';
$string['cannotsavezipfile'] = 'Enregistrement du fichier ZIP impossible';
$string['cannotunzipfile'] = 'Décompression du fichier ZIP impossible';
$string['componentisuptodate'] = 'Le composant est à jour';
$string['dmlexceptiononinstall'] = '<p>Une erreur de base de données est survenue [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'La vérification du fichier téléchargé à échoué';
$string['invalidmd5'] = 'Le code de contrôle md5 n\'est pas valide';
$string['missingrequiredfield'] = 'Un champ obligatoire n\'est pas renseigné';
$string['remotedownloaderror'] = '<p>Le téléchargement du composant sur votre serveur a échoué. Veuillez vérifier les réglages de proxy. L\'extension cURL de PHP est vivement recommandée.</p>
<p>Vous devez télécharger manuellement le fichier <a href="{$a->url}">{$a->url}</a>, le copier sur votre serveur à l\'emplacement « {$a->dest} » et le décompresser à cet endroit.</p>';
$string['wrongdestpath'] = 'Chemin de destination incorrect';
$string['wrongsourcebase'] = 'Adresse URL de base de la source incorrecte';
$string['wrongzipfilename'] = 'Nom de fichier ZIP incorrect';
