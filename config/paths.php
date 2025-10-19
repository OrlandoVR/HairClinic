<?php
// Detecta protocolo
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' 
             || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

// Detecta dominio actual
$host = $_SERVER['HTTP_HOST'];

// Nombre de tu carpeta
$project_folder = '/hairclinic/';

// BASE_URL (visible en navegador)
define('BASE_URL', $protocol . $host . $project_folder);

// BASE_PATH
define('BASE_PATH', rtrim($_SERVER['DOCUMENT_ROOT'], '/') . $project_folder);
?>
