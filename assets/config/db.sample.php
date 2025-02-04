<?php

return array(
	'default' => array(
		'user'=>'finalpwn',
		'password' => 'yourdbpass',
		'driver' => 'PDOV',
		
		//'Connection' is required if you use the PDO driver
		'connection'=>'mysql:host=localhost;dbname=finalpwn',
		
		// 'db' and 'host' are required if you use Mysql driver
		'db' => 'finalpwn',
		'host' => 'localhost',
        'port' => 3306
	)
);


/* note
 * mysql> create database finalpwn;
 * mysql> GRANT ALL ON finalpwn.* TO finalpwn@'localhost' IDENTIFIED BY 'password';
*/
