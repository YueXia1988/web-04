 

<main >

<div  id="communityforum2" class="clear-float">

 	 <div class="list11 clear-float">

 	 	<h3 class="title" ><?= $posts->title;?></h3>
		
		<a href="#" id="list12"><span  class="forp11" id="new-post-button-two"><i class="fa fa-share" aria-hidden="true"></i>&nbsp;Reply</span></a>
	 	 		
 	  	<p id="communityp22"><span ><?= $posts->description;?></span></p>
	 	 <?php foreach ($topicsList as $list):?><br><br>
	 	 		

	 	 		
	          
				  		
				  <div class="backcolor row bigbox">

				  	
			 	 	<div class="col-md-1">
			 	 	 	<img src="images/images/sword.png" alt="img1">
			 	 	</div>
		 	 	 	<div class="col-md-2">
		 	 	 		<p><span><?= $list['username'];?></span><br><span>[<?= $list['guidename'];?>]</span><br><span class="span1"><?= $list['level'];?></span></p>
		 	 	 	</div>
		 	 	 	<div class="col-md-9">
		 	 	 		<p id="community2233"><?= $list['comment'];?></p>
		 	 	 	</div>

	 	 	 	<?php endforeach; ?>
 	 	
 	 	 
 	 </div>
 <br><br><a href=".\?page=community" class="forp33"><span class="forp22"><< Return</span></a>
</div>



</main>

<form id="new-post-two" action="" method="post">
		<h1 style="color:white; padding-left:30px;">Add Comment</h1>
	<button style="position:absolute; left:600px; top:30px; font-size: 15px; " id="new-x">X</button>
	<div class="new-post-box" style="width: auto; height: auto; ">		
		<textarea class="form-control" rows="5" style=" margin-top:5px;"	placeholder="Write your comment"></textarea>
		<button type="submit" class="btn btn-info" style=" margin-top:5px;">Submit</button><?php if(isset($this->data['login-error'])): ?>
		<p><?=$this->data['login-error']?></p>
	    <?php endif;  ?>
	 </div>
</form>

