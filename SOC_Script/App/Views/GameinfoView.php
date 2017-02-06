<?php

namespace App\Views;

Class GameinfoView extends View 
{
	public function render(){
		$page="gameinfo";
		$title = " Gameinfo";
		include "templates/master.inc.php";
	}

	public function content(){
		extract($this->data);
		include "templates/gameinfo.inc.php";
	}
}