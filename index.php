<?php
session_start();
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

      <?php
      if(isset($_SESSION['user']))
      {
        echo "<li style='color: white;'>";
        echo $_SESSION['user'];

        echo "<a href=odjava.php>Odjava</a>";
        echo "</li>";
      }
      else {
       ?>
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <?php
    }
      ?>
    </ul>

  </div>
</nav>











    <!--HEDER END -->








<!--<div class="container-fluid">-->

  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom: 0;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>



  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/lirote.jpg" alt="lirote">
      <div class="carousel-caption">
          <div id="drugidiv" ">
             <p id="sitetitle"><span style="text-shadow: 5px 5px 5px;"> BIM </span><br>
               <span class="subTitle">Ekskluzivna usluga za vas odmor</span> <br>
               <a href="#"><span onclick="pronadjiSobu()" id="findMore">PRONADJITE SOBU</span></a>
             </p>
         </div>
      </div>
    </div>

    <div class="item">
      <img src="img/prva.jpg" alt="prva" class="responsive">
      <div class="carousel-caption">
          <div id="drugidiv" ">
             <p id="sitetitle"><span style="text-shadow: 5px 5px 5px;"> BIM </span><br>
               <span class="subTitle">Ekskluzivna usluga za vas odmor</span> <br>
               <a href="#"><span onclick="pronadjiSobu()" id="findMore">PRONADJITE SOBU</span></a>
             </p>
         </div>
      </div>
    </div>

    <div class="item">
      <img src="img/04.jpg" alt="04" class="responsive" >
      <div class="carousel-caption">
        <div id="drugidiv" ">
             <p id="sitetitle"><span style="text-shadow: 5px 5px 5px;"> BIM </span><br>
               <span class="subTitle">Ekskluzivna usluga za vas odmor</span> <br>
               <a href="#"><span onclick="pronadjiSobu()" id="findMore">PRONADJITE SOBU</span></a>
             </p>
         </div>
      </div>
    </div>

    <div class="item">
      <img src="img/sedma.jpg" alt="sedma" class="responsive">
      <div class="carousel-caption">
          <div id="drugidiv" ">
             <p id="sitetitle"><span style="text-shadow: 5px 5px 5px;"> BIM </span><br>
               <span class="subTitle">Ekskluzivna usluga za vas odmor</span> <br>
               <a href="#"><span onclick="pronadjiSobu()" id="findMore">PRONADJITE SOBU</span></a>
             </p>
         </div>
      </div>
    </div>
  </div>

     <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

  <div class="well col-lg-12">

    <article>
                       <h3>Dobrodošli u BIM hotel!</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis sagittis nibh et finibus. In hac habitasse platea dictumst. Nulla sit amet luctus eros. Aliquam vehicula nibh sed nisl cursus, ut dapibus est pharetra. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>

    </article>



   </div>

          <div class="container-fluid">
	      <div class="row">
	     <div class="col-lg-4">
		  <div class="panel">
		    <div class="panel-body">
			  <h2 class="text-center">Sobe</h2>
			    <a href="#"><img src="img/01.jpg" alt="" class="img-responsive img-thumbnail img-circle"> </a><br><br>
			        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis sagittis nibh et finibus. In hac habitasse platea dictumst. Nulla sit amet luctus eros. Aliquam vehicula nibh sed nisl cursus, ut dapibus est pharetra. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>

					<button onclick="opisSadrzaja('panel-body')" class="btn btn-primary">Saznaj vise</button>
			</div>

		  </div>

		 </div>



		  <div class="col-lg-4">
		   <div class="panel">
		    <div class="panel-body">
			  <h2 class="text-center">Spa & Wellness</h2>
			   <a href="#"><img src="img/spa/04.jpg" alt="" class="img-responsive img-thumbnail img-circle"></a><br><br>
			     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis sagittis nibh et finibus. In hac habitasse platea dictumst. Nulla sit amet luctus eros. Aliquam vehicula nibh sed nisl cursus, ut dapibus est pharetra. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; .</p>
				<button onclick="opisSadrzaja('panel-body')" class="btn btn-primary">Saznaj vise</button>
			</div>

		  </div>

		  </div>
            <div class="col-lg-4">
				<div class="panel">
					<div class="panel-body">
						<h2 class="text-center">Restorani</h2>
			               <a href="#"><img src="img/restoran.jpg" alt="" class="img-responsive img-thumbnail img-circle"></a><br><br>
			                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis sagittis nibh et finibus. In hac habitasse platea dictumst. Nulla sit amet luctus eros. Aliquam vehicula nibh sed nisl cursus, ut dapibus est pharetra. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>
							<button onclick="opisSadrzaja('panel')" class="btn btn-primary">Saznaj vise</button>

					</div>

				</div>
			</div>


	  </div>
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
