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
        body{background-color: blanchedalmond; }
        .container{ 
            margin-top: 30px;
        }
    </style>
</head>
<body>
<form class="container" method="post" action="insertseting.php" >
<h1 style="text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF">add accont</h1>
    &nbsp;<label>website_name:</label>
    <input type="text" name="website_name" class="form-control" style="width: 500px;" placeholder="new website_name .." required>
    &nbsp;<label>logo:</label>
    <input type="text" name="logo" class="form-control" style="width: 500px;" placeholder="new logo .." required>
    &nbsp;<label>CSS:</label>
    <input type="text" name="CSS" class="form-control" style="width: 500px;" placeholder="new CSS .." required>
    &nbsp;<label>JS:</label>
    <input type="text" name="JS" class="form-control" style="width: 500px;" placeholder="new JS .." required>
    &nbsp;<label>meta_keyword:</label>
    <input type="text" name="meta_keyword" class="form-control" style="width: 500px;" placeholder="new meta_keyword .." required>
    &nbsp;<label>meta_description:</label>
    <input type="text" name="meta_description" class="form-control" style="width: 500px;" placeholder="new meta_description .." required>
    &nbsp;<label>language:</label>
    <input type="text" name="language" class="form-control" style="width: 500px;" placeholder="new language .." required>
   <br> &nbsp;&nbsp;<button type="submit" class="btn btn-dark" style="width:100px ;">done</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>