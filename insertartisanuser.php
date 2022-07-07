<?php 
include "db.php";
if (isset($GET['error'])){echo $GET['error']; }
$img_name = $_FILES['full_image']['name'];
$img_size = $_FILES['full_image']['size'];
$tmp_name = $_FILES['full_image']['tmp_name'];
$error = $_FILES['full_image']['error'];
 
  if($error ===0){
    if ($img_size > 325000){
        $em = "Sorry , your file is too larger.";
        header('location:listartical.php?error=$em');
    }else{
     $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
     $img_ex_lc = strtolower($img_ex);
     $allowed_exs = array("jpg", "jpeg", "png");
    }
     if(in_array($img_ex_lc,$allowed_exs)){
        $new_img_name = uniqid("IMG-", true) .'.'.$img_ex_lc;
        $img_upload_path = 'uploads/'.$new_img_name;
        move_uploaded_file($tmp_name, $img_upload_path);
        $sql = 'INSERT INTO artical(title,body,full_image,thumbnail,category,`language`,publish,user_id,featured,meta_description,meta_keyword) 
        VALUES ( "'.$_POST['title'].'",
                 "'. $_POST['body'].'",
                 "'.$new_img_name.'",
                 "'.$_POST['thumbnail'].'",
                 "'.$_POST['category'].'",
                 "'.$_POST['language'].'",
                 "'.$_POST['publish'].'",
                 "'.$_POST['user_id'].'",
                 "'.$_POST['featured'].'",
                 "'.$_POST['meta_description'].'",
                 "'.$_POST['meta_keyword'].'")';
        $insert_product = mysqli_query($link , $sql);
                
                
                header('location:welcome.php');
  }else {
        $em ="unknown error occurred";
        header('location:show.php?error=$em');

    }

  }
?>