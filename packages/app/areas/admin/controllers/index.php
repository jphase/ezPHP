<?php
namespace ez\app;
use ez\core\view as view;

class controller extends \ez\app\DefaultController {
	
	public static function before(){
		echo 'BEFORE FUNCTION CALLED!!!!';
	}
	
	public static function index(){
		view::set('test', 'something');
/* 		db::i()->select()->from('doit_users')->debug(); */
/* 		view::set('test', 'something'); */
/* 		dbug::dump(db::i()->select()->from('doit_users')->asobject()); */
		echo 'INDEX FUNCTION CALLED!!!!!';
	}
	
	public static function after(){
		echo 'AFTER FUNCTION CALLED!!!!';
	}
	
}