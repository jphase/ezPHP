<?php
namespace ez\app;
use ez\core\ez as ez;
use ez\core\view as view;
use ez\core\user as user;

class controller extends \ez\app\DefaultController {
	
	public static function before(){
		user::require_login();
	}
	
	public static function index(){
		ez::dbug(user::values());
	}
	
	public static function after(){

	}
	
}