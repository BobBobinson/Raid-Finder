<?php
class Character extends Controller{
	public static function submit(){
		$DB=DB::getInstance();
		if(isset($_GET['Name'])&&isset($_GET['Ilvl'])&&isset($_GET['Class'])){
			$healers = "";
			$Role;
			if(strpos("Restoration-Druid  Mistweaver-Monk Holy-Paladin Holy-Priest Discipline-Priest Restoration-Shaman",$_GET['Class'])!==false){
				$Role="H";
			}
			else if(strpos("Protection-Warrior Protection-Paladin Vengeance-DH Guardian-Druid Blood-DK Brewmaster-Monk ",$_GET['Class'])!==false){
				$Role="T";
			}else {
				$Role="D";
			} 
			$DB->DoSql('UPDATE `char` SET `Class` = "'.$_GET['Class'].'" , `Ilvl` = "'.$_GET['Ilvl'].'" , `Role` = "'.$Role.'" WHERE `ID`="'.$_SESSION['ID'].'";');
		}
	}
}
?>