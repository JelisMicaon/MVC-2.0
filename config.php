<?php
// MODO DE PRODUÇÃO
$environment = FALSE;

global $config;
global $db;

// BASE_URL -> URL BASE
define("BASE_URL", "http://xxxxxxxxx.com.br/");
// TITLE_WEB -> TITULO DO SITE
define("TITLE_WEB", "SOCCER");
// D_S = DIRECTORY_SEPARATOR -> UTILIZA / SE FOR WINDOWNS E \ SE FOR LINUX.
define("D_S", DIRECTORY_SEPARATOR);

$config = array();
if($environment) {
	$config['dbname'] = '';
	$config['host'] = '';
	$config['dbuser'] = '';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = '';
	$config['host'] = '';
	$config['dbuser'] = '';
	$config['dbpass'] = '';
}
// LINGUAGEM PADRÃO
$config['default_lang'] = 'pt-br';

try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	//echo '<div class="container"><div class="row"><span class="m-auto">Banco de dados não foi conectado!</span></div></div>';
	//echo $e->getMessage();
}
?>