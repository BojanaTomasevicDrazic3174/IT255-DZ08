<?php
require_once("konektor.php");
session_start();
$err = "";
 ?>
<html>
<head>
    <!-- Meta -->
  <meta charset="UTF-8">
  <meta name="description" content="HTML, CSS Template za pronalazak soba">
  <meta name="keywords" content="HTML,CSS">
  <meta name="author" content="Bojana Tomasevic">
    <!-- Title -->
  <title>BIM | Hotel sa 5 zvezdica</title>
    <!-- CSS i JS i Bootstrap-->
	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/my-css.css" rel="stylesheet">
  <script src="js/my-js.js"> </script>
   <script src="js/main.js"> </script>
</head>




<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">BIM HOTEL</a>
    </div>
    <ul class="nav navbar-nav ">
      <li class="active"><a href="#">Pocetna</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Usluge hotela<span class="label label-info"></span></a>
        <ul class="dropdown-menu">
        <li><a href="#">Sobe</a></li>
          <li><a href="#">Spa & Wellness </a></li>
          <li><a href="#">Restorani</a></li>
          <li><a href="#">Kutak za decu</a></li>
        </ul>
      </li>
      <li><a href="#">Galerija</a></li>
      <li><a href="#">Kontakt</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>



          <div class="container-fluid">


            <?php

              if(isset($_POST['submit'])){
                if(!empty($_POST['username'])){
                    $username = $_POST['username'];

                    }else{
                    $err .= "-- Morate uneti Vas username ";
                  }
                  if(!empty($_POST['password'])){
                    $password = $_POST['password'];
                  }else{
                    $err .= "-- Morate uneti Vase password ";
                  }
                  if($err <> ""){
                    echo $err;
                  }else{

                            $qLogin = "SELECT * FROM  `korisnici`
                                          WHERE `username`  = :username  AND `password` = :password
                                          ";

                                          $provera = $konektor -> prepare($qLogin);
                                          $provera -> execute(array(
                                            ':username' => $username,
                                            ':password' => $password


                                          ));
                                          if($provera -> rowCount() == 0){
                                            $err .= " --- Pogresno uneti podaci";
                                            echo $err;
                                          }
                                          else {
                                          $_SESSION['user']=$username;
                                          }

                  }


              }
              if(isset($_SESSION['user']))
              {
              header("location:index.php");
              }
              else {
            ?>
            <form class="form-horizontal" method="post" action="login.php">
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-10">
      <input name="username" type="text" class="form-control" id="inputEmail3" placeholder="username">
    </div>
    </div>
    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button name="submit" type="submit" class="btn btn-default">Sign in</button>
    </div>
    </div>
    </form>
    <?php
  }
    ?>


	    </div>

	   <footer class="main-footer">
    <!-- Container -->
    <div class="container clearfix">
    <ul class="soc-net list-reset">
    <li><a href="http://www.facebook.com" target="_blank" class="facebook">facebook</a></li>
    <li><a href="http://www.twitter.com" target="_blank" class="twitter">twitter</a></li>
    <li><a href="http://www.linkedin.com" target="_blank" class="linked-in">linkedin</a></li>

    </ul>
    <div class="col-lg-12">
      <p><small>HTML5 - CSS3 Template <a href="#" target="_blank">By BojanaT</a></small></p><br>
	   <small>2016 &copy;Sva prava zadrzana</small>
    </div>

    </div>
    <!-- Container END -->
    </footer>
      <!-- MAIN Footer END-->

<!--	  </div>  -->




</body>
</html>
