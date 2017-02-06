<?php
namespace App\Controllers;


use App\Views\RegisterView;
use App\Models\UsersModel;


Class RegisterController
{
	public function show(){
		$view = new RegisterView();
      	$view->render();
	}
	public function store() {

		// Prepare a container to hold all the error messages
		$errors = [];
		// Validate the form
		// Each field has been filled out
		// username pattern
		$usernamePattern = '/^[a-zA-Z0-9]{1,11}$/';


		if( preg_match($usernamePattern, $_POST['username']) ) {
			// Check database


			//Look the username in database
			$user = new UsersModel();

			$result = $user -> doesThisUsernameExist($_POST['username']);

			//If the result is true
			if ($result == true){
				//Oops, this username is in use
				$errors['username']= ' Username in use';
			}
		

		} else {
			// Generate error message
			$errors['username'] = 'Please enter a valid Username';
			
		}


		// Passwords match and are at least 8 characters long
		if( strlen($_POST['password']) == 0 ) {
			// Password has not been provided
			$errors['password'] = 'Required';
		} elseif( strlen($_POST['password']) < 8 ) {
			$errors['password'] = 'Must be at least 8 characters';
		} elseif( $_POST['password'] != $_POST['password2'] ) {
			$errors['password'] = 'Passwords do not match';
		}
		// If validation failed
		if( count($errors) > 0 ) {
			// Oh dear, errors.
			$view = new RegisterView($errors);
      		$view->render();
      		return;
		}
		// If everything is good to go:

		
		

		// Hash the password (don't save it plain text)
		$_POST['password']= password_hash($_POST['password'],PASSWORD_BCRYPT);

		$newUser = new UsersModel();
		$newUser->saveNewUser();
		// Insert new user into database
		// Log them in automatically (because we're nice)
		// Redirect to account page
	}
	 
	
}