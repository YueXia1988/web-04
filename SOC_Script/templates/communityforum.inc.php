<main >

<div  id="communityforum2" class="clear-float">

 	 <div class="list11 clear-float">
 	 <?php foreach ($topicsList as $list):?>
 	 		<h3 class="title" ><?= $list['title'];?></h3>

 	 		<a href="#" id="list12"><span  class="forp11" id="new-post-button-two"><i class="fa fa-share" aria-hidden="true"></i>&nbsp;Reply</span></a><br><br><br><br><br>
 	 		
           <p><span><?= $list['desription'];?></span></p>
			  		
			  <div class="backcolor row bigbox">

			  	
		 	 	<div class="col-md-1">
		 	 	 	<img src="images/images/sword.png" alt="img1">
		 	 	</div>
	 	 	 	<div class="col-md-2">
	 	 	 		<p><span><?= $list['username'];?></span><br><span>[<?= $list['guidename'];?>]</span><br><span class="span1"><?= $list['level'];?></span></p>
	 	 	 	</div>
	 	 	 	<div class="col-md-9">
	 	 	 		<p ><?= $list['comment'];?></p>
	 	 	 	</div>

 	 	 	<?php endforeach; ?>
 	 	 <!-- <div class="backcolor row bigbox">
	 	 	 <div class="col-md-1">
	 	 	 	<img src="images/images/sword.png" alt="img1">
	 	 	 </div>
 	 	 	<div class="col-md-2">
 	 	 		<p>Flying Fire<br>[WarmFire]<br><span class="span1">70 S.Master</span></p>
 	 	 	</div>
 	 	 	<div class="col-md-9">
 	 	 		<p>Whats the best way to raise your power? My power is significantly lower than other people of the same level (both VIP and non VIP). I have some red, orange and purple gear and I enhance them with gems and jewels, but the amount of power it gives is so low. It sucks when the game matches you to people similar to your level and there's a 30k power gap. How do people increase their power so much?</p>
 	 	 	</div>
 	 	 	<div class="col-md-1">
 	 	 		<img src="images/images/hunter.png" alt="img2">
 	 	 	</div>
 	 	 	<div class="col-md-2">
 	 	 		<p>Demonfang<br>[Prue]<br><span class="span2">70 B.Hunter</span></p>
 	 	 	</div>
 	 	 	<div class="col-md-9">
 	 	 		<p>First of all, could you attach a screenshot of your gear (Also star map, wing) or explain what level gear you have :3
					I could probably give you more specific advice that way!But, in general you can gain power from: Gems, Star Maps, Pets, Gear, Divination (Lv.60+), Fashion, Wings etc. You say your power is lower than people of your level, but if you look at it positively, your level may just be siginificantly higher than people with the same power!

					I'll try to give you more help once I see your gear and whatnot :D</p>
 	 	 	</div>
 	 	 	<div class="col-md-1">
 	 	 		<img src="images/images/mage.png" alt="img3">
 	 	 	</div>
 	 	 	<div class="col-md-2">
 	 	 		<p>Drede<br>[Guardian]<br><span class="span3">70 Mage</span></p>
 	 	 	</div>
 	 	 	<div class="col-md-9">
 	 	 		<p> especially Holy Swords - You'll need the Holy Stones to upgrade your wings. Also, for the first few levels on your wings, you could use white gems to speed you up.By doing royal arena everyday and claming your daily honor and star souls, you'll gradually build up your star map If you're not in one already, join a guild. Planting gems is essential to boost power!
				</p>
 	 	 	</div>
 	 	 </div> -->
 	 	 <br><br><a href=".\?page=community" class="forp33"><span class="forp22"><< Return</span></a>
 	 </div>
 
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

