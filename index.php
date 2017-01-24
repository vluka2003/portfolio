<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Vivin Porttfolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description"content="Vivin Protfolio">
<meta name="keywords" content="html, css, jquery, css3">

<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
<link rel="icon" href="../img/favicon.ico" type="image/x-icon">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
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
  <?php include ('partials/footer.php') ?>

<script src="js/jquery.mixitup.js"></script>
<script src="js/creative.js"></script>
<script>
if (screen && screen.width > 767) {
document.write('<script src="js/jquery.superscrollorama.js"><\/script>');
}
else {
$('#profile').hide();
}
</script>
<script src="js/agency.min.js"></script>
<script>
    $(document).ready(function() {

        /*$('#exampleModal, #myModal1, #myModal2, #myModal3, #myModal4, #myModal5, #myModal6, #myModal7, #myModal8').appendTo("body");*/

        var controller = $.superscrollorama();


        var scrollDuration = 110;

        // individual element tween examples
        // controller.addTween('#fade-it', TweenMax.from( $('#fade-it'), .5, {css:{opacity: 0}}), scrollDuration);
        controller.addTween('.fly-right', TweenMax.from( $('.fly-right'), .25, {css:{left:'500px',opacity:-1,height:'25px'}, ease:Quad.easeInOut}), scrollDuration);
        controller.addTween('.fly-left', TweenMax.from( $('.fly-left'), .25, {css:{right:'500px',opacity:-1,height:'25px'}, ease:Quad.easeInOut}), scrollDuration);
        controller.addTween('.fade-it,.fade-it_top', TweenMax.from( $('.fade-it,.fade-it_top'), .7, {css:{opacity:-.06,height:'35px'}}), scrollDuration);
        $('.hidden').removeClass('hidden').hide();
        $('.toggle-text').click(function() {
            $(this).find('span').each(function() { $(this).toggle(); });
        });
    });
</script>
</body>
</html>
