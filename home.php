<?php session_start(); ?>
<!DOCTYPE html>
<html lang-"eng">
<head>
<title> My Protfolio
</title>
<style>
label {
  display:block;
}
</style>
</head>
<body>
  <header>
    <fieldset>
      <legend> Login credentials</legend>
      <label for ="username"> User Name: </label>
      <input type="text" name="Name" placeholder="Name" id="fname">
      <label for ="password"> Password: </label>
      <input type="password" name="pwd" placeholder="pwd" id="pwd">
      <label></label>
      <button type="button" value="Log in" onclick=logIn()>Log In</button>
    </fieldset>

  </header>
  <section>
    <div id="fn"></div>
  </section>
    <script type="text/javascript">
      function logIn(){
          var uName= document.getElementById("fname").value;
          document.getElementById("fn").innerHTML=uName + ("Sussefully logged in");

    }

      </script
</body>
</html>
