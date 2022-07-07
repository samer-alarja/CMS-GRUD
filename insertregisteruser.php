<?php include "Config.php"; ?>
<?php
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>registeer</title>
 </head>
 <body>
 <div style="background:white; background-size:cover; background-attachment:fixed; height:800px;padding:100px">
  <form method="post" action="userinsertregiter.php" style=" border-radius: 25px;background-color: #f2f2f2;width:600px;margin:0 0 0 300px;padding:40px"> 
  <h2 style="margin-top: 0;">register</h2>
  <hr style="height:1px;border-width:0;background-color:gray">

    <label for="lemail">new username:</label><br>
    <input type="text" id="lname" name="username" placeholder="Your username..">

    <br><label for="country">new password:</label><br>
    <input type="password" id="pass" name="password" placeholder="Your password..">
 <br>
    &nbsp;<label> active:</label><br>
    <input type="text" id="country" name="active" value="0" readonly>
       <!-- <input  type="radio" id="javascript" name="active" value="1">
       <label for="vehicle1">1</label><br>
    <input  type="radio" id="javascript" name="active" value="0" style="margin-left: 86px;">
       <label for="vehicle2">0</label> -->
    
    <br><label for="country">new created_date:</label><br>
    <input type="text" id="pass" name="created_date" placeholder="Your created_date..">  
    
    <br><label for="country">new role:</label><br>
    <input type="text" id="pass" name="role" placeholder="Your role..">

    <br><br><input type="submit" class="btn btn-primary" value="sign in" style="margin-left: 25px;">

  </form>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>