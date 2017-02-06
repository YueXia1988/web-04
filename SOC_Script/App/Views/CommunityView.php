<?php

namespace App\Views;

Class CommunityView extends View 
{
	public function render(){
		$page="community";
		$title = " Community";
		include "templates/master.inc.php";
	}

	public function content(){
		extract($this->data);
		include "templates/community.inc.php";
	}
}