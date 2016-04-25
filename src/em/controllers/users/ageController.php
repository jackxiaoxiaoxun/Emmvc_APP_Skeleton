<?php


namespace em\controllers\users;



use Emmvc\Em;
use Emmvc\Hooks;
class ageController
{
	
	public function getIndex()
	{
		var_dump($this);
	}
	
	public function getAc()
	{
		Hooks::event('testHooks');

		var_dump('ac', Em::$em->uri->segments);
	}
	
	
}





