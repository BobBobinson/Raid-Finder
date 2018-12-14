<?php
include_once('DB.php');
class Login{
	public static function Log_in(){
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
		if(isset($_SESSION['ID'])){
			return true;
		}elseif(isset($_GET['email'])&&isset($_GET["password"])){
			$DB=DB::getInstance();
				$result=$DB->DoSQL("SELECT * FROM user Where Email='".$_GET['email']."' AND Password='".$_GET['password']."';");
				if($result){
					$_SESSION['ID']=$result[0]['ID'];
					return true;
				}else return false;
		}else return false;
	}
	
}

?>