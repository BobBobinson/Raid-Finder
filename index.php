<?php
require_once('Routes.php');
function __autoload($class_name){
	if(file_exists('./Classes/'.$class_name.'.php')){
		require_once'./Classes/'.$class_name.'.php';
	}else if(file_exists('./Controller/'.$class_name.'.php')){
		require_once'./Controller/'.$class_name.'.php';
	}
}	
?>