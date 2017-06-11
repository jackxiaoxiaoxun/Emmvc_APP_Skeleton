<?php




namespace em\controllers;




use Emmvc\view;
use em\models\articles;
use em\models\index;


class indexController
{
	/**
	 * 
	 * @var \Emmvc\Db
	 */
	public $db;
	
	public function getIndex()
	{
		$view	= new view('user/name');
		$view->data['name']	= time();
		
		echo $view;
	}
	
	public function getTime()
	{
		
		$list = articles::inst()->listArticles();
		
		var_dump($list);
		exit;
		
		$article		= new articles();
		$view			= new view('user/time');

		$view->data['list']		= $article->listArticles()	;
		echo $view;
	}
	
	
	public function getList()
	{
		$in		= new index();
		$data	= $in->getList();
		
		var_dump($data);
	}
	
	
	
	
	
	
	
	
	
	
	
}