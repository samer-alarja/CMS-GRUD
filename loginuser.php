<?php include "Config.php"; ?>
<?php
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
 <?php if (isset($_GET['error']) === true &&  $_GET['error'] == 1 ) { ?>
    <div class="alert">Invalid login: Please try again </div>
<?php } ?>
    <?php if (isset($_GET['error']) === true &&  $_GET['error'] == 2 ) { ?>
    <div class="alert"> You can`t access this page without login. </div>
<?php } ?>
 <div style="background:white; background-size:cover; background-attachment:fixed; height:800px;padding:100px">
  <form method="post" action="checkloginn.php" style=" border-radius: 25px;background-color: #f2f2f2;width:600px;margin:0 0 0 400px;padding:50px"> 
  <h2 style="margin-top: 0;">you accont</h2>
  <hr style="height:1px;border-width:0;background-color:gray">
    <label for="lemail">username:</label>
    <input type="text" id="lname" name="username" placeholder="Your username..">

    <br><label for="country">password:</label>
    <input type="password" id="pass" name="password" placeholder="Your password..">

    <br><input type="submit" value="sign in" style="margin-left: 75px;">
    <br>
    <a href="insertregisteruser.php" style="margin-left: 75px;">create new account</a>
    <br>
  </form>
</div>
</body>
</html>