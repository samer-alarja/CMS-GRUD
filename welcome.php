<?php 
include"db.php";
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    
    <script src="https://kit.fontawesome.com/93c76a4947.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/css/app.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
body { 
    margin: 0;
    padding: 0;
    background-color:rgb(230, 255, 255);
    box-sizing: border-box;
  }
ul.topnav {
  list-style-type: none;
  margin: 0;
  padding:0;
  background-color:rgb(31, 31, 96);
  width: 100%;
  height: 65px;
  position: sticky;
  top: 0;
  font-size: 18px;
  z-index: 1;
  overflow: hidden;
 
}
ul.topnav li a {
  font-size:large;
  display: block;
  color: white;
  text-align: center;
  padding: 8px 6px;
  text-decoration: none;
  margin: 10px 25px 0 0 ;
}
ul.topnav li a:hover:not(.active) {
  color: red;
}
.a{float:right;
  border-radius: 42px;
  background-color:aqua ; 
  margin-right: 70px;
  
}
.change{width: 50px;
  text-align: center ;}
 
h1{font-size: 60px;
  color: white;
  margin-top: 80px;}
table, td, th {  
  border: 2px solid white;
  text-align: center;
  padding: 10px;
  border-collapse: collapse;
  width:25%;
  color: white;
  margin:40px 0 0 37% ;
}
input[type=text],input[type=password], select {
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 24px;
  box-sizing: border-box;
  width: 100%;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 24px;
  cursor: pointer;
  width: 100%;
 
}
input[type=submit]:hover {
  background-color: #45a049;
}
.samer:hover{
  background-color: blueviolet;
}

</style>
    <title>my page</title>
</head>
<ul class="topnav">
<li><a  class="a" style="color: black;">buy Tickets</a></li>


<li><a href="llistartical.php" style="float:right">News</a></li>
<li><a href="llistcategory.php" style="float:right">about</a></li>
<li><a href="welcome.php" style="float:right">home</a></li>
<li class="samer"><a href="loginuser.php" style="float:right"><i class="fa fa-user-o" style="font-size:16px"></i></a></li>


<i class='fab fa-monero' style='font-size:48px;color:aqua;float:left;margin:10px 0 50px 100px;'></i>

  <lo><a style="color:aqua; margin:10px 0 50px 30px; float:left;">LEADERSHIP<br> EVENT</a></li>

</ul>

<div
style="background:url('https://picsum.photos/1200/920/?random'); background-size:cover; background-attachment:fixed; height:800px;  top: 50%;   padding: 80px;">
<h1 class="heading mt-5 pt-5 text-center -bottom-3 "><ins style="color: aqua;">LEADERSHIP</ins> CONFERENCE<br>2022</h1>

<div class="container" style="color:aqua;margin-top:40px;">
   <div class="row justify-content-center">
    <div style="border: aqua solid; border-right:0;padding: 5px;  background-color:rgba(0, 204, 255, 0.3);width:120px;height:60px;"><b>July 12 to 18,2022</b></div>
    <div style="border: aqua solid; padding: 5px; background-color:rgba(0, 204, 255, 0.3);width:120px;height:60px;"><b>Times Square,NY</b></div>
</div>
</div></div>


<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-inner">
<?php 
$select_menu = mysqli_query($link , ' SELECT * from artical WHERE publish ="yes"');
               $i = 0 ;     while($exc = mysqli_fetch_assoc($select_menu)){
                $active = ($i == 0 ) ? 'active' : '';
                  echo '<div class="carousel-item '.$active.'">
                  <img id="id" src="uploads/'.$exc['full_image'].'" class="d-block w-100" style="height:700px ;">
                  </div>';
                   $i++;}
?>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
<div class="container-fluid">
<div class="row" style="background-color: white;margin-top:0;">
<h1 class="header mb-5 center text-center" style="margin-top:0; color:aqua"> artical</h1>

<?php 
$select_menu = mysqli_query($link , ' SELECT * from artical WHERE publish ="yes"');
                    while($exc = mysqli_fetch_assoc($select_menu)){

                      echo '<div class="col-6" style="margin-bottom:30px;float: left;">';
                      echo '<div ><img src="uploads/'.$exc['full_image'].'" style="width:110px;float: left;margin-right:3px;height:110px;" ></div>';
                      echo '<div>'.$exc['title'].'</div>';
                      echo '<div>'.$exc['body'].'</div>';
                      echo '<div>'.$exc['category'].'</div>';
                      echo '<div>'.$exc['user_id'].'</div>';
                      echo '</div><br>'; 
                    }
?>
</div>
</div>  
  <div class="row" style="text-align:center">
    <div class="col-md-6">
<iframe  src="https://www.youtube-nocookie.com/embed/BGkL2Pq-g3A?start=51" title="YouTube video player" frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width:750px;height:350px"></iframe>
    </div>
    <div class="col-md-6">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3383.998006639631!2d35.91790585329754!3d31.98806950136607!2m3!1f0!2f0!3f0!3m2!1i
      1024!2i768!4f13.1!3m3!1m2!1s0x151b60007211256b%3A0x50e874e23772e562!2zWFdROCsyUVjYjCDYudmF2ZHYp9mG!5e0!3m2!1sar!2sjo!4v1652209046379!5m2!1sar!2sjo"
       width="750px" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
</div></div></div>
<div style="background:url('https://picsum.photos/1200/920/?random'); background-size:cover; background-attachment:fixed; height:800px;padding:100px">
  <form method="post" action="checklogin.php" style=" border-radius: 25px;background-color: #f2f2f2;width:600px;margin:90px 0 0 300px;padding:50px">
  
  <h2 style="margin-top: 0;">admin accont</h2>
  <hr style="height:1px;border-width:0;background-color:gray">

  <label for="lname">username:</label>
    <input type="text" id="lname" name="username" placeholder="Your name..">

    <label for="country">password:</label>
    <input type="password" id="pass" name="password" placeholder="Your password..">
    <input type="submit" value="sign in">
<a href="register.php" style="margin: 50px 0 0 180px;color:royalblue">create new account</a>
  </form>
</div>
<footer style="height:60px"> 
    <div class="row" style=" text-align:center ;margin-top:30px; ">
        <div class="col-md-6 w3-opacity" style="font-size:larger"><div class="w3-col  w3-large ">
        <i class="fa fa-map-marker" style="width:30px"></i> amman, jordan<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +796583374<br>
        <i class="fa fa-envelope " style="width:30px"> </i> Email: sameralarja12@gmail.com<br>
      </div></div>
       
        <div class="col-md-6 w3-opacity">tiitle</div>

    </div>
    <hr class="mt-3" style=" width:87%;margin:auto;background:rgb(200,200,200)">
    <div class="row w3-opacity" >
        <pre class="col-md-6" style="font-family: 'Courier New', monospace;font-size:15px;text-align: center;margin-top:60px;"> Our Story   Code of Conduct   Privacy and Terms   Contact</pre>
        <div class="col-md-6">
        <pre style="margin:30px 0 0 110px ;font-family: Verdana, sans-serif;">        Copyright © 2022 Leadership Event Co., Ltd.
        All Rights Reserved.

        Design: TemplateMo</pre>
  </div> 

<div style="margin:auto; height:10px" class="w3-container w3-padding-64 w3-center w3-opacity  w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <i class="fa fa-envelope w3-hover-opacity"></i>

 </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"> </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"> </script>
</body>
</html>