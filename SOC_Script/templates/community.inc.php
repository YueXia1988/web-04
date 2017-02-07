<main >

 


  <!-- <img src="images/images/communitypage1.png" class="img-responsive center-block"> -->
<div  id="communitypage" class="clear-float">
 	 <div class="list11 clear-float">
 	 		<span class="forp11" id="new-post-button">+ New Post</span><br><br><br><br><br>
 	 		<?php foreach($postsList as $posts):?>
			  		<p>
			  			<a href="./?page=communityforum&amp;id=<?=$posts['id'];?>" class="fa fa-file-o"><?= $posts['title'];?><span class="forp fa fa-comment"><?= $posts['review_count'];?><?= $posts['time'];?></span>></a>
			  		</p>
			  <?php endforeach; ?>
 	 	<!--  <div class="backcolor"><p ><a href=".\?page=communityforum"  class="fa fa-file-o">&nbsp;Guild Emperor vs Baron!!<span class="forp fa fa-comment">&nbsp;7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vinex&nbsp;&nbsp;3 hrs</span></a><br>
 	 	 <a href=".\?page=communityforum" class="fa fa-file-o">&nbsp;Power?<span class="forp fa fa-comment" >&nbsp;813&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Flying&nbsp;&nbsp;5 hrs</span></a><br>
 	 	 <a href=".\?page=communityforum" class="fa fa-file-o">&nbsp;Cant find my characters....<span class="forp fa fa-comment">&nbsp;3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SOC.1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12 hrs</span></a><br>
 	 	 <a href=".\?page=communityforum" class="fa fa-file-o">&nbsp;Honeymoon title and goodies<span class="forp fa fa-comment-o">&nbsp;0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nazdum&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;20 hrs</span></a> <br>
 	 	 <a href=".\?page=communityforum" class="fa fa-file-o">&nbsp;item transferring player to<span class="forp fa fa-comment">&nbsp;83&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Odiio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11 ds ago</span></a><br>
 	 	 <a href=".\?page=communityforum" class="fa fa-file-o">&nbsp;Friend Codes<span class="forp fa fa-comment">&nbsp;5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;14 ds ago</span></a></p></div> -->
 	 	 <br><br><a href=".\?page=communitypage2" class="forp33" ><span class="forp22">Next >></span></a>
 	 </div>
 
</div>



</main>
<?php


  $state = isset($_GET['id'])?"Edit":'Add';
  $path = ($state ==='Edit') ? "./?page=community.update" : "./?page=community.store";

?>

<form id="new-post" action="<?= $path;?>" method="post">
		<h1 style="color:white; padding-left:30px;">Add New Post</h1>
	<button style="position:absolute; left:600px; top:30px; font-size: 15px;" id="new-x" >X</button>
	<div class="new-post-box" style="width: auto; height: auto; ">
		<input type="hidden" name="user_id" value="<?=$_SESSION['user_id'];?>">
		<input type="text" name="title" class="form-control" placeholder=" Write your new post title here:">
		<textarea class="form-control" name="description" rows="5" style=" margin-top:5px;"	placeholder=" Write..."></textarea>
		<button type="submit" class="btn btn-info" style=" margin-top:5px;">Submit</button><?php if(isset($this->data['login-error'])): ?>
		<p><?=$this->data['login-error']?></p>
	    <?php endif;  ?>
	 </div>
</form>

