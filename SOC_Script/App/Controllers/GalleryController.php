<?php

namespace App\Controllers;

use App\Views\GalleryView;

Class GalleryController
{
	public function show(){


      $view = new GalleryView();
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

