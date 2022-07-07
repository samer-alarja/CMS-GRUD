<?php 
session_start();
if(isset($_SESSION['login']) === false && $_SESSION['login'] != 'xxx'){

    header('location:login.php?error=2');
}
include 'db.php'; 
?>
<!DOCTYPE html>
<html lang="en">
   <style>
 body{background-color: blanchedalmond;}
        
 ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  border: 1px solid #555;
  height:800px;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li {
  text-align: center;
  border-bottom: 1px solid #555;
  
}

li:last-child {
  border-bottom: none;
  
}



li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
#id {  height:800px ;}
tr:nth-child(even) {background-color: #f2f2f2;}
</style>
<head>
<title>list page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
  
    </script>
</head>
<body>  
<h1 style="text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF">user accont</h1>

<div class="col-12">
<table class="table">
  <tr>
          <th>username</th>
          <th>password</th>
          <th>active</th>
          <th>created_date</th>
          <th>role</th>
          <th></th>
        </tr>
<?php 
$select_menu = mysqli_query($link , ' SELECT * from users');
                    while($exc = mysqli_fetch_assoc($select_menu)){
                      echo '<Tr>';
                      echo '<Td>'.$exc['username'].'</td>';
                      echo '<Td>'.$exc['password'].'</td>';
                      echo '<Td>'.$exc['active'].'</td>';
                      echo '<Td>'.$exc['created_date'].'</td>';
                      echo '<Td>'.$exc['role'].'</td>';
      
                      echo '<Td><a href="useredit.php?id='.$exc['id'].'" class="btn btn-primary">Edit</a>
                                <a href="userdelete.php?id='.$exc['id'].'" class="btn btn-primary">Delete</a></td>';
                      echo '</tr>';
                    }
?>
</table>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>