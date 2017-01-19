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

<div class="container-fluid Numberblock">
  <div class="MaxBlock">
    <div class="NoSmall"><span id="ctl00_ContentPlaceHolder1_ProjectC" class="no">1225</span><br />User Interface</div>
    <div class="NoSmall"><span id="ctl00_ContentPlaceHolder1_ClientC" class="no">800</span><br />Happy Clients</div>
    <div class="NoSmall"><span id="ctl00_ContentPlaceHolder1_ProductC" class="no">25</span><br />Our Products</div>
    <div class="NoSmall"><span id="ctl00_ContentPlaceHolder1_YearC" class="no">6</span><br />Experince Years</div>
    <div class="Clear"></div>
  </div>
</div>
<!-- Container (About Section) -->
<?php include ('partials/about.php') ?>

<section id="skills" class="bgimg-2">
  <div class="container">
    <div class="row">
    <div class="col-sm-12 contact_page">
          <h1 class="subtitle text-center title section-heading"> Skill Set </h1>
          <hr>

      <div class="hi-icon-wrap hi-icon-effect-6 w3-dark-grey animated">
					<a href="#set-6"><img class="hi-icon" src="img/html.png"/></a>
          <a href="#set-6"><img class="hi-icon" src="img/css.png"/></a>
          <a href="#set-6"><img class="hi-icon" src="img/jquery.png"/></a>
          <a href="#set-6"><img class="hi-icon" src="img/php.png"/></a>
          <a href="#set-6"><img class="hi-icon" src="img/bootstrap.png"/></a>
          <a href="#set-6"><img class="hi-icon" src="img/git.png"/></a><br>
          <a href="#set-6"><img class="hi-icon" src="img/sql.png"/></a>
          <a href="#set-6"><img class="hi-icon" src="img/ruby.png"/></a>
          <a href="#set-6"><img class="hi-icon" src="img/react.png"/></a>
          <a href="#set-6"><img class="hi-icon" src="img/angular-tile.png"/></a>

				</div>
    </div>
  </div>
</div>
</section>

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
<script>
$(document).ready(function(){
  $('.maps').click(function () {
    $('.maps iframe').css("pointer-events", "auto");
  });

  $( ".maps" ).mouseleave(function() {
    $('.maps iframe').css("pointer-events", "none");
  });
});
// Change style of navbar on scroll
//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 150) {
        $("nav").addClass("top-nav-collapse");
    } else {
        $("nav").removeClass("top-nav-collapse");
    }
});
</script>

</body>
</html>
