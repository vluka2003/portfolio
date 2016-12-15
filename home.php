<?php session_start(); ?>
<!DOCTYPE html>
<html lang-"eng">
<head>
<title> My Protfolio
</title>
<style>
body {
    margin:0 auto;
}
header{
  background-image: url("img/program_bg.jpg");
  background-size: cover;

}
label {
  display:block;
}
 form {
  padding:400px;
}
#fn {
  color:#fff;
  font-size: 25px;
  padding: 20px;
}
</style>
</head>
<body>
  <header>
    <form>
    <fieldset>
      <legend> Login credentials</legend>
      <label for ="username"> User Name: </label>
      <input type="text" name="Name" placeholder="Name" id="fname">
      <label for ="password"> Password: </label>
      <input type="password" name="pwd" placeholder="pwd" id="pwd">
      <label></label>
      <button type="button" value="Log in" onclick=logIn()>Log In</button>
    </fieldset>
    <div id="fn"></div>
  </form>



</header>
    <script type="text/javascript">
      function logIn(){
          var uName= document.getElementById("fname").value;
          document.getElementById("fn").innerHTML=uName +" " +("Sussefully logged in");

    }

      </script
</body>
</html>
