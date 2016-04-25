<?php




return [
		
		'default_NS'	=> '\em\controllers\\' ,
		'default_controller'	=> 'index' ,
		
		'users/age'	=> [
				'class'	=> 'index'
		], 
		'users'		=> [
				'ns'	=> '\em\controllers\users\\' ,
		],
		
		'product/:num'	=> [
			'class' =>	'catalog/product_lookup' 		
				
		]
];