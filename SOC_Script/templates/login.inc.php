<main >

  


<div  id="loginpage2" >
	<div id="midbox" class="row">
		<div id="leftbox" class="col-md-5">
			<div class="row">
				<div class="col-md-2">
					<img src="images/images/arrow.png" alt="smaller-arrow">
				</div>
				<div class="col-md-10">
					<p>Already have an account?</p>
					<h1>Log In Here</h1>
				</div>
			</div>
			<br>
			<form action="index.php?page=login.try" method="post">
				<div class="form-group">
					<i class="fa fa-user" aria-hidden="true"></i><input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
				</div>
				<div class="form-group">
					<i class="fa fa-key" aria-hidden="true"></i><input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
				</div>
				<br>
				<div class="row">
					<div class="col-md-5">
						<label><input type="checkbox" name="keepme">&nbsp;Keep me logged in</label>
					</div>
					<div class="col-md-7">
						<button type="submit" class="btn btn-info">Log In ></button><?php if(isset($this->data['login-error'])): ?>
	<p><?=$this->data['login-error']?></p>
    <?php endif;  ?><br><br>
						<a href="#">Forgot your password?</a>
					</div>
				</div>
			</form>
		</div>
		<div id="middlebox" class="col-md-2">
			<h2>or</h2>
		</div>
		<div id="rightbox" class="col-md-5">
			<div class="row">
				<div class="col-md-2">
					<img src="images/images/add.png" alt="smaller-add">
				</div>
				<div class="col-md-10">
					<p>Don't have an account?</p>
					<h1>Register Now</h1>
				</div>
				<br>
			<form id="form2" action="./?page=register.store" method="post">
				<div class="form-group">
					<i  id="newuser" class="fa fa-user" aria-hidden="true"></i><input type="text" name="username" id="username" class="form-control" placeholder="Desired Username" required>
				</div>
				<div class="form-group">
					<i class="fa fa-key" aria-hidden="true"></i><input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
				</div>
				<div class="form-group">
					<i class="fa fa-key" aria-hidden="true"></i><input type="password" name="password2"  id="password" class="form-control" placeholder="Confirm Password" required>
				</div>
				<br>
				<button type="submit" class="btn btn-info">Submit ></button><?php if(isset($this->data['login-error'])): ?>
	<p><?=$this->data['login-error']?></p>
    <?php endif;  ?>

			</form>
		</div>
	</div>
</div>


</main>