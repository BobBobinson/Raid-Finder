<?php
Route::set('contact-us',function(){
	ContactUs::CreatView();
});
Route::set('Login',function(){
	if(Login::Log_in()){
		header("Location: Availability");
		die();
	}else {
		Logins::CreatView('Login');	
	}
});
Route::set('index.php',function(){
		header("Location: Login");
		die();
});
Route::set('Availability',function(){
	if(Login::Log_in()){
		$data = Availability::asd();
		Availability::CreatView($data);
	}else {
		header("Location: Login");
		die();
	}
});
Route::set('Logout',function(){
	session_start();
	$_SESSION['ID']= null;
	header('Location: Login');
	die();
});
Route::set('Character',function(){
	if(Login::Log_in()){
		Character::CreatView('Character');
		Character::submit();
	}else {
		header("Location: Login");
		die();
	}
});
?>