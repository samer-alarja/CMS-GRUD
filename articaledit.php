<?php 
    session_start(); 
    // $_SESSION['valll'] = $_GET['id'];
    include 'db.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title> page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<style>     
     body{background-color: blanchedalmond;}
        
        #fname{width: 390px;}
</style>
</head>
<body>
             
   <?php 
        $select = mysqli_query($link , 'select id ,title,body,full_image,thumbnail,category,language,publish,user_id,featured,meta_description,meta_keyword
         From artical where id = '.$_GET['id']);
        list($id ,$title,$body,$full_image,$thumbnail,$category,$language,$publish,$user_id,$featured,$meta_description,$meta_keyword)  = mysqli_fetch_row($select);
   ?>
 <?php
            if(isset($_GET['error']) === true && $_GET['error'] == 1){
                echo '<div class="alert" >Some field is missings</div>';
            }
   ?>

<form  name="myform" method="post" action="articaledittt.php?id=<?php echo $_GET['id']?>">
<div  class="container">
     <div class="row" >
  <div class="col-6">
  <h1 style="text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF">edit </h1> 

                     <label class="form-label" for="firstname">
                      title:
                     </label>
                     <input type="text" id="fname" value="<?php echo $title ?>" class="form-control" name="name" />
                   
                    <label class="form-label" for="firstname">
                    body:
                        </label>
                        <input type="text" id="fname" value="<?php echo $body ?>" class="form-control" name="link" />
             
                    <label class="form-label" for="firstname">
                    full_image:
                        </label>
                        <input type="text" id="fname" value="<?php echo $full_image?>" class="form-control" name="class" accept=".jpg, .jpeg, .png"/>
                 
                    <label class="form-label" for="firstname">
                    thumbnail:
                        </label>
                        <input type="text" id="fname" value="<?php echo $thumbnail ?>" class="form-control" name="ahas_child" />

                    <label class="form-label" for="firstname">
                    category:
                        </label>
                        <input type="text" id="fname" value="<?php echo $category ?>" class="form-control" name="menu" />
                    
                    <label class="form-label" for="firstname">
                    language:
                        </label>
                        <input type="text" id="fname" value="<?php echo $language ?>" class="form-control" name="parent" />
                        </div>
  <div class="col-6" style="margin-top: 60px;">
                    <label class="form-label" for="firstname">
                    publish:
                        </label>
                        <input type="text" id="fname" value="<?php echo $publish ?>" class="form-control" name="publish" />
                   
                    <label class="form-label" for="firstname">
                    user_id:
                        </label>
                        <input type="text" id="fname" value="<?php echo $user_id ?>" class="form-control" name="user_id" />
                        <label class="form-label" for="firstname">
                        featured:
                        </label>
                        <input type="text" id="fname" value="<?php echo $featured ?>" class="form-control" name="featured" />                
                            <label class="form-label" for="firstname">
                        meta_description:
                        </label>
                        <input type="text" id="fname" value="<?php echo $meta_description ?>" class="form-control" name="meta_description" />               
                             <label class="form-label" for="firstname">
                        meta_keyword:
                        </label>
                        <input type="text" id="fname" value="<?php echo $meta_keyword ?>" class="form-control" name="meta_keyword" /><br>
                        <button type="submit" class="btn btn-dark" style="width:100px ;">done</button>
                    </div>  </div> </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body> 
</html>