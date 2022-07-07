<?php 
session_start();

include 'db.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    
    <script src="https://kit.fontawesome.com/93c76a4947.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/css/app.css">
    <!-- w3logoo -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style> body 
   { margin: 0;
   }
ul.topnav {
  list-style-type: none;
  margin: 0;
  padding:0;
  background-color:rgb(31, 31, 96);
  width: 100%;
  height: 75px;
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
  padding: 14px 16px;
  text-decoration: none;
  margin: 10px 25px 0 0 ;
}
ul.topnav li a:hover:not(.active) {
  background-color: #111;}
.a{float:right;
  border-radius: 42px;
  background-color:aqua ; 
  margin-right: 70px;
  
}
.change{width: 50px;
  text-align: center ;}
 


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
</style>
</head>
<body>  
<ul class="topnav">
<li><a  class="a" style="color: black;">buy Tickets</a></li>


<li><a href="llistartical.php" style="float:right">News</a></li>
<li><a href="llistcategory.php" style="float:right">about</a></li>
<li><a href="welcome.php" style="float:right">home</a></li>


<i class='fab fa-monero' style='font-size:48px;color:aqua;float:left;margin:10px 0 50px 100px;'></i>

  <lo><a style="color:aqua; margin:10px 0 50px 30px; float:left;">LEADERSHIP<br> EVENT</a></li>

</ul>

    <div style="margin-top: 10px;">
<h1 style="text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF">artical table</h1>

<div class="col-12">
<table class="table">
  <tr>
          <th>id</th>
          <th>title</th>
          <th>body</th>
          <th>full_image</th>
          <th>thumbnail</th>
          <th>category</th>
          <th>language</th>
          <th>publish</th>
          <th>user_id</th>
          <th>featured</th>
          <th>meta_description</th>
          <th>meta_keyword</th>
      
          <th></th>
        </tr>
<?php 
$select_menu = mysqli_query($link , ' SELECT * from artical');
                    while($exc = mysqli_fetch_assoc($select_menu)){
                      echo '<Tr>';
                      echo '<Td>'.$exc['id'].'</td>';
                      echo '<Td>'.$exc['title'].'</td>';
                      echo '<Td>'.$exc['body'].'</td>';
                      echo '<Td><div class="alb"><img src="uploads/'.$exc['full_image'].'" width="80px" ></div></td>';
                      echo '<Td>'.$exc['thumbnail'].'</td>';
                      echo '<Td>'.$exc['category'].'</td>';
                      echo '<Td>'.$exc['language'].'</td>';
                      echo '<Td>'.$exc['publish'].'</td>';
                      echo '<Td>'.$exc['user_id'].'</td>';
                      echo '<Td>'.$exc['featured'].'</td>';
                      echo '<Td>'.$exc['meta_description'].'</td>';
                      echo '<Td>'.$exc['meta_keyword'].'</td>';
                       echo '</tr>';
                    }
?>
</table>
</div>
</div></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"> </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>