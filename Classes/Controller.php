<?php
class Controller {
	public static function CreatView($View){
		if(Login::Log_in()){
			require_once('./View/Navbar.php');
			require_once('./View/'.$View.'.php');
			require_once('./View/Footer.php');
		}else{
			require_once('./View/'.$View.'.php');
		}
		
	}
}
?>