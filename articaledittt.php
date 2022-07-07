<?php 
    session_start(); 
    include 'db.php'; 

    if(isset($_POST['name']) === true && $_POST['name'] != ''){
         
 
            mysqli_query($link , 'UPDATE artical   
                                       SET 
                                       title="'.$_POST['name'].'",
                                       body="'.$_POST['link'].'",
                                       full_image="'.$_POST['class'].'",
                                       thumbnail="'.$_POST['ahas_child'].'",
                                       category="'.$_POST['menu'].'",
                                       language="'.$_POST['parent'].'",
                                       publish="'.$_POST['publish'].'",
                                       user_id="'.$_POST['user_id'].'",
                                       featured="'.$_POST['featured'].'",
                                       meta_description="'.$_POST['meta_description'].'",
                                       meta_keyword="'.$_POST['meta_keyword'].'"
                                       WHERE id='.$_GET['id']);
                                      
       header('location:listartical.php');

    }
    ?> 