<?php session_start(); ?>


<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Portfolio - Tom Ruiz</title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
   <link rel="stylesheet" href="css/csslogin.css">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="css/magnific-popup.css">

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" >

</head>

<body>


      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

        <ul id="nav" class="nav">
           <li><a href="index.html">Accueil</a></li>
           <li><a href="about.html">A Propos</a></li>
           <li><a href="resume.html">CV</a></li>
           <li><a href="portfolio.html">Portfolio</a></li>
           <li><a href="contact.html">Contact</a></li>
           <li class="current"><a href="main.php">Login</a></li>

        </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <section id="contact">
<div class="row section-head">

  <div class="ten columns">

    <div class="row">

<h1>LOGIN<h1>
<?php
  if (isset($_SESSION['pseudo']) && (isset($_SESSION['email'])))
    {
        ?>

        <h2>Bienvenue <?php echo $_SESSION['pseudo']; ?><h2>
        <h2>Votre mail : <?php echo $_SESSION['email']; ?><h2>

        <?php

    }else{

    }

?>



<h2>Veuillez vous connecter<h2>


    <form action='include/login.php' method='post'>
      <input type="email" name="lemail" id="lemail" placeholder="Adresse mail" required><br/>
      <input type="password" name="lpassword" id="lpassword" placeholder="Mot de passe" required><br/>
      <input type="submit" name="formlogin" id="formlogin" value="Login">

    </form>

  </div>
  </div>
</div>

</section>
  </body>
</html>
