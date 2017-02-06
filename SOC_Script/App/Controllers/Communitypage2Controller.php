<?php

namespace App\Controllers;

use App\Views\Communitypage2View;

Class Communitypage2Controller
{
	public function show(){


      $view = new Communitypage2View();
      $view->render();
	}

	public function getMovieSuggestFormData(){

		if(isset($_SESSION['moviesuggest'])){
        	$moviesuggest = $_SESSION['moviesuggest'];
     	}else {
	        $moviesuggest= [
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
       return $moviesuggest;   
	}
}
