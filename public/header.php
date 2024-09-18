<?php    
require_once "session.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> <?php $title ?> </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="./bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
        <script src="./public/jquery-3.7.1.min"></script>
    </head>
    <body >

    <nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">EasyChat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
  <?php 
    if(!isset($_COOKIE['username'])){
        echo "กรุณา login";
    }
    else {
        
        echo "hi  ".$_COOKIE['Nickname'];
    }
  
  
  
  
  
  
  ?>
    </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
     
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
     
       
        </ul>
        <form class="d-flex mt-3" role="search">
      <?php   if(isset($_COOKIE['main_userid'])){ ?>
        <button type="button" class="btn btn-danger"><a class="dropdown-item" href="logout.php">Logout</a></button>
        
    <?php    }else{?>
        <button type="button" class="btn btn-success"><a class="dropdown-item" href="login.php">Login</a></button>
        <?php    }?>
        </form>
      </div>
    </div>
  </div>
</nav>
