<?php

namespace App\Controllers;
  

  //If there is "page " in the  address bar then $page =that page,
//otherwise $page o= home
  $page =  isset($_GET['page']) ?   $_GET['page'] : "home";

  switch ($page) {
    
    case 'home':

      $controller = new HomeController();
      $controller->show();
      break;

    case 'gameinfo':

      $controller = new GameinfoController();
      $controller->show();
      break;

    case 'community':

      $controller = new CommunityController();
      $controller->showAll();
      break;

     case 'communitypage2':

      $controller = new Communitypage2Controller();
      $controller->show();
      break;

    case 'communityforum':

      $controller = new CommunityforumController();
      $controller->show();
      break;

    case 'communitys':

      $controller = new CommunityController();
      $controller->showAll();
      break;

    case 'community.create':

      $controller = new CommunityController();
      $controller->create();
      break;

    case 'community.edit':

      $controller = new CommunityController();
      $controller->edit();
      break;


    case 'community.delete':

      $controller = new CommunityController();
      $controller->delete();
      break;

    case 'community.store':

      $controller = new CommunityController();
      $controller->store();
      break;

    case 'comment.create':

      $controller = new CommunityController();
      $controller->storeComments();
      break;

     case 'community.update':

      $controller = new CommunityController();
      $controller->update();
      header("Location:./?page=featuredcommunity&id=".$community->id);
      break;

    case 'gallery':

      $controller = new GalleryController();
      $controller->show();
      break;

    case 'comment.create':

      $controller = new CommunityController();
      $controller->storeComments();
      break;

    case 'login':

      $controller = new LoginController();
      $controller->show();
      break; 

      
     case 'register':

     $controller = new RegisterController();
      $controller->show();   
     break;

      case 'register.store':
      $controller = new RegisterController();
      $controller->store(); 
     break;

      case 'account':
        if(isset($_SESSION['user_id'])) {
          $controller = new AccountController();
          $controller->show();
        }else{
          header('Location: index.php?page=login');
        }
     break;

      case 'logout':
        unset($_SESSION['user_id']);
        unset($_SESSION['privilege']);
        header('Location: index.php');
     break;

      case 'login':
        $controller = new AccountController();
        $controller->showLoginForm();
     break;

       case 'login.try':
        $controller = new AccountController();
        $controller->processLoginForm();
     break; 
    
    default:
      echo "Error 404 ! Page not found !";
      break;
  }











