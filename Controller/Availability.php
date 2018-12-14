<?php
class Availability extends Controller{
	public static function asd(){
		$DB=DB::getInstance();
		if(isset($_GET['update'])){
			$avanum="";
			for($i=0;$i<7;$i++){
				for($j=0;$j<24;$j++){
					if(isset($_GET[$i.$j])){
						$avanum[$j*7+$i]=1;
					}else $avanum[$j*7+$i]=0;
				}
			}
			$DB->DoSql("Update info SET Avalibilty='".$avanum."' WHERE ID='".$_SESSION['ID']."';");
		}
		return $DB->DoSql("SELECT Avalibilty FROM info WHERE ID = '".$_SESSION['ID']."'")[0];
	}
	public static function CreatView($data){
		$Availability = $data;
		require_once('./View/Navbar.php');
		require_once('./View/Availability.php');
		require_once('./View/Footer.php');
	}
	function checkedtotext($text){
		if($text=="1"){
			return "checked";
		}else return "";
	}
	

}

?>