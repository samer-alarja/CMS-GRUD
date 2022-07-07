<?php 
session_start();
include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
    <style>
        body{background-color: blanchedalmond; }
        .container{ 
            margin-top: 30px;
        }
    </style>
</head>
<body>
<?php 
            $select_product = mysqli_query($link , ' SELECT name  as cat_name FROM  category ');
 ?>
<form class="container" method="post" action="insertartisan.php" enctype="multipart/form-data">
<h1 style="text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF">insert to the table</h1>
<div class="container"><div class="row"> <div class="col-6">
    &nbsp;<label>title:</label>
    <input type="text" name="title" class="form-control" style="width: 500px;" placeholder="new title .." required>

    &nbsp;<label>body:</label>
    <textarea rows="4" name="body" class="form-control" style="width: 500px;" placeholder="new body .." required></textarea>

    &nbsp;<label>full_image:</label>
    <input type="file" name="full_image" class="form-control" style="width: 500px;" placeholder="new full_image .." required>

    &nbsp;<label>thumbnail:</label>
    <input type="text" name="thumbnail" class="form-control" style="width: 500px;" placeholder="new thumbnail .." required>

    <label for="cars">category:</label><br>
                   <?php echo '<select name="category" id="cars" style="width: 94%;">';
                    while($exc = mysqli_fetch_assoc($select_product)){
                       echo '<option value= '.$exc['cat_name'].' name:"category">'.$exc['cat_name'].'</option>';
                                   }
                       echo '</select>';?><br><br>

&nbsp;<label>language:</label>
<select name="language" id="cars">
  <option value="english">english</option>
  <option value="arabic">arabic</option>
  <option value="other_language">other_language</option>
</select>


    </div> <div class="col-6">

    &nbsp;<label>publish:</label>
       <input  type="radio" id="javascript" name="publish" value="yes">
       <label for="vehicle1">yes</label><br>
    &nbsp;&nbsp;<input  type="radio" id="javascript" name="publish" value="no" style="margin-left: 54px;">
       <label for="vehicle2">no</label><br>

    &nbsp;<label>user_id:</label>

    <input type="text"  name="user_id" class="form-control" style="width: 500px;" value="<?php echo $_SESSION['id']?>" readonly >

  
    &nbsp;<label>featured:</label>
       <input  type="radio" id="javascript" name="featured" value="yes">
       <label for="vehicle1">yes</label><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<input  type="radio" id="javascript" name="featured" value="no" style="margin-left: 54px;">
       <label for="vehicle2">no</label><br>

    &nbsp;<label>meta_description:</label>
    <textarea type="text" rows="4" name="meta_description" class="form-control" style="width: 500px;" placeholder="new meta_description .." required></textarea>

    &nbsp;<label>meta_keyword:</label>
    <input type="text" name="meta_keyword" class="form-control" style="width: 500px;" placeholder="new meta_keyword .." required>

    <br></div></div></div><br>
    &nbsp;&nbsp;<button type="submit" class="btn btn-dark" style="width:100px ;">done</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>
