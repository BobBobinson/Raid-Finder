<?php
class Controller {
	public static function CreatView($View){
		require_once('./View/'.$View.'.php');
	}
}
?>