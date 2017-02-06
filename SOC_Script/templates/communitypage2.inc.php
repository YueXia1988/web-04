<main >
  <!-- <img src="images/images/communitypage1.png" class="img-responsive center-block"> -->
<div  id="communitypage2" class="clear-float">
 	 <div class="list11 clear-float row">
 	 		<span class="forp11" id="new-post-button">+ New Post</span><br><br><br><br><br>
 	 	 <div class="backcolor">
		 	 	 <p ><a href=".\?page=communityforum" class="fa fa-file-o">&nbsp;Change my device from Android to IOS<span class="forp fa fa-comment">&nbsp;132&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Odiio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;19 ds ago</span></a><br>
		 	 	 <a href=".\?page=communityforum" class="fa fa-file-o">&nbsp;How to obtain mercury powder x12 ?<span class="forp fa fa-comment">&nbsp;78&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;21 ds ago</span></a>		 	 	 
		 	 	 <a href=".\?page=communityforum" class="fa fa-file-o">&nbsp;Can I level up Revival ring from marriage to level 60 ?<span class="forp fa fa-comment">&nbsp;11&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SOC.1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 ms ago</span></a><br>
		 	 	 <a href=".\?page=communityforum" class="fa fa-file-o">&nbsp;How to unlock fashion items?<span class="forp fa fa-comment-o">&nbsp;17&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nazdum&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5 ms ago</span></a> <br>
		 	 	 <a href=".\?page=communityforum"  class="fa fa-file-o">&nbsp;How does the Squadron Marine decks works?<span class="forp fa fa-comment">&nbsp;45&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vinex&nbsp;&nbsp;7 ms ago</span></a><br>
		 	 	 <a href=".\?page=communityforum" class="fa fa-file-o">&nbsp;Lost My Characters<span class="forp fa fa-comment" >&nbsp;89&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Flying&nbsp;&nbsp;2 yrs ago</span></a><br></p>
 	 	 </div><br><br>
 	 	 <div class="col-md-2"></div>
 	 	 <div class="col-md-4">
 	 	 	<a href="" class="forp33"><span class="forp22">Next >></span></a>
 	 	 </div>
 	 	 <div class="col-md-4">
 	 	 	<a href=".\?page=community" class="forp33" ><span class="forp22"><< Prive</span></a>
 	 	 </div>
 	 	 <div class="col-md-2"></div>
 	 </div>
 
</div>



</main>
<form id="new-post" action="" method="post">
	<h1 style="color:white; padding-left:30px;">Add New Post</h1>
	<button style="position:absolute; left:600px; top:30px; font-size: 15px; " id="new-x">X</button>
	<div class="new-post-box">
		<input type="text" name="New Post" class="form-control" placeholder="Write your new post title here:">
		<textarea class="form-control" rows="5" style=" margin-top:5px;"	placeholder="Write..."></textarea>
		<button type="submit" class="btn btn-info" style=" margin-top:5px;">Submit</button><?php if(isset($this->data['login-error'])): ?>
		<p><?=$this->data['login-error']?></p>
	    <?php endif;  ?>
	 </div>
</form>

