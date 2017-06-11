<?php




namespace em\models;


use Emmvc\Model;
/**
 * @property \Emmvc\Db $db 
 * @method \em\models\articles inst()
 *
 */

class articles extends Model
{
	public function listArticles()
	{
		$data	= $this->db->select('*')
				->from('entries')
				->queryAll()
		;
		return $data;
	}
	
	
	
}