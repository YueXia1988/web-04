<?php
namespace App\Views;

Class CommunityCreateView extends View 
{
	public function render(){
		$page="community.create";
		$title = " Add Community";
		include "templates/master.inc.php";
	}

	public function content(){
		extract($this->data);
		include "templates/community.inc.php";
	}
}