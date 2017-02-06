<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Sword of Chaos <?php echo "|".$title; ?></title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/e549bece36.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    
  </head>
  <body>
    
      <nav class="primary-color  navbar navbar-default" id="nav_bar">

        <div class="container-fluid row">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <a href=".\?page=home">
              <img src="images/logo.png" class="logo col-md-2"><!-- <span class="sr-only">(current)</span> -->
            </a>
            <img src="images/headerbg.png" class="logo2 col-md-3">
            <a class="navbar-brand" href="#">     </a>
            <a class="navbar-brand" href="#"></a>
            <a class="navbar-brand" href="#"></a>
            <a class="navbar-brand" href="#"></a>
          </div>


        
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav col-md-7" id="nav_ul">
              <li<?php if($page === "gameinfo."):?> class="active" <?php endif; ?>><a href=".\?page=gameinfo">GAME INFO. <span class="sr-only">(current)</span></a></li>
              <li<?php if($page === "community"):?> class="active" <?php endif; ?>><a href=".\?page=community">COMMUNITY <span class="sr-only">(current)</span></a></li>
              <li<?php if($page === "gallery"):?> class="active" <?php endif; ?>><a href=".\?page=gallery">GALLERY <span class="sr-only">(current)</span></a></li>

              <?php if(isset($_SESSION['user_id'])): ?>
                <li<?php if($page === "logout"):?> class="active" <?php endif; ?>><a href=".\?page=logout">LOG OUT <span class="sr-only">(current)</span></a></li>
              <?php else: ?>
               <li<?php if($page === "login"):?> class="active" <?php endif; ?>><a href=".\?page=login">LOG IN <span class="sr-only">(current)</span></a></li>
              <?php endif; ?>



            </ul>      
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

  



      <?php $this->content();?>

      
      <footer>
       <p class="text-center">&copy;  Copyrights Reserved By <img src="images/mylogo.png" >
        <?php echo date('l jS F Y');?> SWORD OF CHAOS</p>
      </footer>
     

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/new-post-popup.js"></script>
  </body>
</html>