<?php
/**
 * Configurações de acesso ao Banco de Dados
 *
 */
/**
 * Conexão local de acesso ao DB com conteúdos
 */

class DATABASE_CONFIG
{
	static $dbConn = array(
		'server' => '127.0.0.1',
		'database' => 'aust_php_example',
		'username' => 'root',
		'password' => '', 
		'encoding' => 'utf8',
		// 'port' => '8888', // if you ever need special port access
	);
}

?>