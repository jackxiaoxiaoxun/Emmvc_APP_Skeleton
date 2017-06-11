<?php

namespace em\models;



use em\libraries\models;

class index extends models
{
	public function getList()
	{
		$data	= $this->getDb()->from('<<_config')
				->queryAll()
		;
		
		return $data;
	}
}
