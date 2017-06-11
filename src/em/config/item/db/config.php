<?php



return [
		'default'	=> [
				'dsn'		=> 'mysql:host=127.0.0.1;dbname=test;charset=utf8' ,
				'user'		=> 'eye' ,
				'pass'		=> 'qqqzzz' ,
				'prefix'	=> 'ecs_' ,
				'option'	=> [
						PDO::ATTR_DEFAULT_FETCH_MODE    =>PDO::FETCH_ASSOC
						, PDO::ATTR_ERRMODE             => PDO::ERRMODE_EXCEPTION
				] ,
		] ,
		'flux'		=> [
				'dsn'		=> 'mysql:host=127.0.0.1;dbname=flux;charset=utf8' ,
				'user'		=> 'eye' ,
				'pass'		=> 'qqqzzz' ,
				'prefix'	=> 'flux' ,
				'option'	=> [
						PDO::ATTR_DEFAULT_FETCH_MODE    =>PDO::FETCH_ASSOC
						, PDO::ATTR_ERRMODE             => PDO::ERRMODE_EXCEPTION
				] ,
		]

];