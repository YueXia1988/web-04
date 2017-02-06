<?php

namespace App\Views;

Class Communitypage2View extends View 
{
	public function render(){
		$page="communitypage2";
		$title = " Community-2";
		include "templates/master.inc.php";
	}

	public function content(){
		extract($this->data);
		include "templates/communitypage2.inc.php";
	}
}