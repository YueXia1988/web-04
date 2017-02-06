<?php

namespace App\Views;

Class GalleryView extends View 
{
	public function render(){
		$page="gallery";
		$title = " Gallery";
		include "templates/master.inc.php";
	}

	public function content(){
		extract($this->data);
		include "templates/gallery.inc.php";
	}
}