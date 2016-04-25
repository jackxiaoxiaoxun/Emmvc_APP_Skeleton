<?php



return [
		'default'	=> [
				'dsn'		=> 'mysql:host=192.168.56.101;dbname=ec;charset=utf8' ,
				'user'		=> 'eye' ,
				'pass'		=> 'qqqzzz' ,
				'prefix'	=> 'ecs_' ,
				'option'	=> [
						PDO::ATTR_DEFAULT_FETCH_MODE    =>PDO::FETCH_ASSOC
						, PDO::ATTR_ERRMODE             => PDO::ERRMODE_EXCEPTION
				] ,
		] ,

];