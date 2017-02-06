<?php

namespace App\Controllers;

use App\Views\CommunityView;
use App\Models\CommunityModel;
use App\Views\CommunityCreateView;

Class CommunityController
{
	public function showAll(){

		$posts = new CommunityModel();
		
		$postsList = $posts->showAll();
		

		$view = new CommunityView(compact('postsList'));
     	$view->render();
	}

	public function getPostSuggestFormData(){

		if(isset($_SESSION['postsuggest'])){
        	$postsuggest = $_SESSION['postsuggest'];
     	}else {
	        $postsuggest= [
	                'title' => "",
	                'email' => "",
	                'checkbox' => "",
	                'errors' =>[
	                    'title' => "",
	                    'email' => "",
	                    'checkbox' => ""
	                  ]
	          ];
      } 
       return $postsuggest;   
	}
	public function showFeaturedCommunity(){
		
		$featuredcommunity = new CommunitysModel($_GET['id']);


		$newcomment = $this -> getErrorComment();



		
		$comments = new CommentsModel();
		$allcomments = $comments->getAllComments($_GET['id']);

		$view = new FeaturedCommunityView(compact('featuredcommunity','allcomments','newcomment'));
		$view->render();
	}
	public function create(){
		$posts= $this->getFormData();


		$view = new CommunityCreateView(compact('postsList'));
		$view->render();
	}

	public function storeComments(){
		
		$input=$_POST;
		$input['user_id'] = $_SESSION['user_id'];

		$comment = new CommentsModel($input);
		if(! $comment ->isVaild()){
			$_SESSION['error.comment'] = $comment;
			header("Location:./?page=featuredposts&id=".$comment->posts_id);
			exit();
		}
		$comment->save();
		header("Location:./?page=featuredcommunity&id=".$comment->movie_id);
	}

	public function edit(){

		$posts = $this->getFormData($_GET['id']);

		$view = new CommunityCreateView(compact('postsList'));
		$view->render();
		
	}

	public function update(){
		
		$community = new CommunityModel($_POST);

		if(! $community->isVaild()){

			$_SESSION['error.community'] = $community;
			header("Location:./?page=community.edit&id=". $community->id);
			exit();
		}

		if($_FILES['poster']['error']===UPLOAD_ERR_OK){
			$community->savePoster($_FILES['poster']['tmp_name']);
		}elseif(isset($_POST['removeImage'])&& $_POST['removeImage']==='true'){
			$community->poster =null;
		}

		
		$community->update();
		header("Location:./?page=featuredcommunity&id=".$community->id);
		exit();
	}


	public function delete(){
		
		$communityID = isset($_GET['id']) ? $_GET['id'] : null;
		CommunityModel::destroy($communityID);
		header('Location:./?page=community');
	}


	public function store(){
		
		
		$community = new CommunityModel($_POST);


		if(! $community->isVaild()){

			$_SESSION['error.community'] = $community;
			header("Location:./?page=community.create");
			exit();
		}
		if($_FILES['poster']['error']=== UPLOAD_ERR_OK){
			$community->savePoster($_FILES['poster']['tmp_name']);
		}

		
		$community->save();
		header("Location:./?page=community&id=". $community->id);
		
	}
	public function getErrorComment(){
		if(isset($_SESSION['error.comment'])){
			$newcomment = $_SESSION['error.comment'];
			unset($_SESSION['error.comment']);
		}else{
			$newcomment = new CommentsModel();
		}
		return $newcomment;
	}
	public function getFormData($id=null){

		if(isset($_SESSION['error.community'])){
			$community = $_SESSION['error.community'];
			unset($_SESSION['error.community']);
		}else{
			$community = new CommunityModel($id);
		}
		return $community;



	}
}

