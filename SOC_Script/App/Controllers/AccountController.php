<?php
namespace App\Controllers;


use App\Views\AccountView;
use App\Views\LoginView;
use App\Models\UsersModel;


Class AccountController
{
	public function show(){
		$view = new AccountView();
      	$view->render();
	
	}
	
	public function showLoginForm(){
		$view = new LoginView();
		$view->render();
	} 
	
	public function processLoginForm(){
		//make sure the email has been provided
		//make sure the password has been provided
		//it should also beat least 8 chars,
		//no point bugging the database with a password
		//that is obviously wrong

		//Use thw users  model
		$user = new UsersModel();
		$result = $user->attemptLogin();

		//if bad then generate error messages
		$errors['login-error']='Invalid credentials';
		//show the view
		$view= new LoginView($errors);
		$view->render();

	}
}