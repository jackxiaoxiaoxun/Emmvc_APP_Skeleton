<?php




namespace em\controllers;




use Emmvc\view;
use em\models\articles;


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
		$article		= new articles();
		$view			= new view('user/time');
		$view->data['list']		= $article->listArticles()	;
		echo $view;
	}
	
	
}