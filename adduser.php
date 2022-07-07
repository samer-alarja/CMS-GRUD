<?php  
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
        body{background-color: blanchedalmond; 
        }
        .container{ 
            margin-top: 30px;
        }
    </style>
</head>
<body>
<form class="container" method="post" action="insertuser.php" >
<h1 style="text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF">add accont</h1>
    &nbsp;<label>username:</label>
    <input type="text" name="username" class="form-control" style="width: 500px;" placeholder="new username .." required>
    &nbsp;<label>password:</label>
    <input type="text" name="password" class="form-control" style="width: 500px;" placeholder="new password .." required>
    
    &nbsp;<label>active:</label>
       <input  type="radio" id="javascript" name="active" value="1">
       <label for="vehicle1">1</label><br>
       <input  type="radio" id="javascript" name="active" value="0" style="margin-left: 54px;">
       <label for="vehicle2">0</label><br>

    &nbsp;<label>created_date:</label>
    <input type="text" name="created_date" class="form-control" style="width: 500px;" placeholder="new created_date .." required>
    &nbsp;<label>role:</label>
    <input type="text" name="role" class="form-control" style="width: 500px;" placeholder="new role .." required>
   <br> &nbsp;&nbsp;<button type="submit" class="btn btn-dark" style="width:100px ;">done</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>