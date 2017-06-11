<?php


namespace em\libraries;




use Emmvc\Em;
use Emmvc\oInstan;
class models
{

	use oInstan;
	/**
	 * @return \Emmvc\Db
	 */
	public function getDb()
	{
		return Em::$em->db->host('flux');
	}
	
	
	
}






