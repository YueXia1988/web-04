<?php

namespace App\Models;

use PDO;

Class UsersModel extends DatabaseModel
{
	protected static $tablename = 'users';
	protected static $columns = [
	 'password',
	 'username',
	 'guidename',
	 'level',
	 'privilege'

	];

	//Return true if E-Mail exists
	//Return false if E-Mail not exists

	public function doesThisEmailExist($email){
			$db =$this ->getDatabaseConnection();

			$sql = 'SELECT email FROM users WHERE email =:email';

			$statement =$db ->prepare($sql);

			$statement -> bindValue(':email',$email);

			$statement ->execute();

			if($statement->rowCount()==1){
				return true;
			}else{
				return false;
			}
	}

	public function doesThisUsernameExist($username) {
		$db =$this ->getDatabaseConnection();

			$sql = 'SELECT username FROM users WHERE username =:username';

			$statement =$db ->prepare($sql);

			$statement -> bindValue(':username',$username);

			$statement ->execute();

			if($statement->rowCount()==1){
				return true;
			}else{
				return false;
			}
	}

		public function saveNewUser(){
			//Get =$this database cpnnection
			$db=$this->getDatabaseConnection();
			// Prepare the sql
			$sql ='INSERT INTO users(username,password)
					VALUES (:username, :password)';

			$statement =$db ->prepare($sql);


			//Bind the form data to the SQL query
			$statement->bindValue(':username', $_POST['username']);

			$statement->bindValue(':password', $_POST['password']);

			//Run the query
			$result = $statement ->execute();

			//Confirm that it worked
			if($result==true){
				//yay!
				$_SESSION['user_id']=$db->lastInsertId();
				$_SESSION['privilege']= "user";

				header('Location:index.php?page=account');
			}else{
				//Uh oh...
			}

			//If it did,log the user in and redirect to their

			//new account page!




		}
		//login functionality
		public function attemptLogin (){

			$db =$this ->getDatabaseConnection();


			// Find the password of the user with a matching email
			$sql ='SELECT id, username, password, privilege FROM users WHERE username = :username ';

			$statement =$db -> prepare($sql);


			$statement -> bindValue(':username',$_POST["username"]);

			$statement ->execute();

			$record = $statement ->fetch(PDO::FETCH_ASSOC);
		


			//did we get an array?(email found!) 
			if(is_array($record)){
				//email found

				$result= password_verify($_POST['password'], $record['password']);

				//if the result is goood
				if($result == true){
				// log the usert in and redirect to account page
					$_SESSION['user_id']=$record['id'];
					$_SESSION['privilege'] = $record['privilege'];
					
					

					if($_GET['id']){
						header('Location:');
					}
					header('Location:index.php?page=account');
				}else{
				//Bad password ,return false so user sees error message
				return false;
			
			}



			}else{
				//email not found
				//Tell user bad credent
				return false;
			}




		}
}
