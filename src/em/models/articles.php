<?php




namespace em\models;


use Emmvc\Model;


class articles extends Model
{
	public function listArticles()
	{
		$data	= $this->db->select('*')
				->from('<<_article')
				->queryAll()
		;
		return $data;
	}
	
	
	
}