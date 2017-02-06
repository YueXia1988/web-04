<?php

namespace App\Views;

Class CommunityforumView extends View 
{
	public function render(){
		$page="communityforum";
		$title = " CommunityForum";
		include "templates/master.inc.php";
	}

	public function content(){
		extract($this->data);
		include "templates/communityforum.inc.php";
	}
}