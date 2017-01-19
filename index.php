<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Vivin Porttfolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description"content="Vivin Protfolio">
<meta name="keywords" content="html, css, jquery, css3">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="icon" type="image/ico" href="http://www.insertyourwebsite.com/favicon.ico"/>
 <!--Animate CSS-->
<link rel="stylesheet" href="css/animate.css">
</head>


<body>
<?php include ('partials/nav.php') ?>

<?php include ('partials/header.php') ?>
<!--number block-->
<div class="bgimg-5">
<div class="container-fluid Numberblock">
  <div class="MaxBlock">
    <div class="NoSmall"><span id="ctl00_ContentPlaceHolder1_ProjectC" class="no">1225</span><br />User Interface</div>
    <div class="NoSmall"><span id="ctl00_ContentPlaceHolder1_ClientC" class="no">800</span><br />Happy Clients</div>
    <div class="NoSmall"><span id="ctl00_ContentPlaceHolder1_ProductC" class="no">25</span><br />Our Products</div>
    <div class="NoSmall"><span id="ctl00_ContentPlaceHolder1_YearC" class="no">6</span><br />Experince Years</div>
    <div class="Clear"></div>
  </div>
</div>
</div>
<!-- Container (About Section) -->
<?php include ('partials/about.php') ?>

<?php include ('partials/skills.php') ?>

<!-- Container (Portfolio Section) -->


<?php include ('partials/portfolio.php') ?>


<?php include ('partials/contact.php') ?>
<!-- Footer -->
<footer class="container-fluid text-center bg-gray">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <div class="w3-xlarge w3-section">
    <a href="https://www.facebook.com/vivin.luka"><i class="fa fa-facebook-official w3-hover-text-indigo"></i></a>
    <i class="fa fa-instagram w3-hover-text-purple"></i>
    <a href="#"><i class="fa fa-twitter w3-hover-text-light-blue"></i></a>
    <a href="https://www.linkedin.com/in/vivin-lukose-56909a1b?trk=nav_responsive_tab_profile"<i class="fa fa-linkedin w3-hover-text-indigo"></i></a>
  </div>


  <p>Designed by Vivin <a href="#" title="VivProtfolio">Protfolio </a></p>
</footer>

<script src="js/jquery.mixitup.js"></script>
<script src="js/creative.js"></script>

</body>
</html>
