<?php

namespace App\Models;

use PDO;

Class CommentsModel extends DatabaseModel
{
	protected static $tablename = 'topics';
	protected static $columns = ['id','comment', 'user_id', 'posts_id', 'description'];

	protected static $validationRules = [
			"comment"=>"minlength:10,maxlength:100,inputValidate"
	];

	public function getAllComments($id){
		// get database connection
		$db= $this -> getDatabaseConnection();


		$sql = ' SELECT topics.comment, topics.id 
				FROM topics 
				JOIN posts ON posts.username = users.id
				JOIN users 	ON users.user_id = users.id 
				WHERE users.id = :id ';

		$statement = $db -> prepare($sql);

		$statement->bindValue(':id',$id);

		$statement->execute();

		$commentsArray =[];

		while ($record = $statement->fetch(PDO::FETCH_ASSOC)){
			array_push($commentsArray, $record);
		}
		
		return $commentsArray;
	}
	public function showAllDetails(){
    	// get database connection
		$db= $this -> getDatabaseConnection();

		$sql = ' SELECT topics.comment, topics.id, posts.title, posts.description, users.guidename , users.level, users.username 
				FROM topics
				JOIN posts ON topics.posts_id = posts.id
				JOIN users 	ON topics.user_id = users.id				
				WHERE topics.posts_id = :id';				

		$statement = $db -> prepare($sql);

		$statement->bindValue(':id',$this->id);

		$statement->execute();

		$commentsArray =[];

		while ($record = $statement->fetch(PDO::FETCH_ASSOC)){
			array_push($commentsArray, $record);
		}
		
		return $commentsArray;
    }
	
}
