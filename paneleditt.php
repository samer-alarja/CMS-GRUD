<?php 
    session_start(); 
    include 'db.php'; 

    if(isset($_POST['name']) === true && $_POST['name'] != ''){
         
 
            mysqli_query($link , 'UPDATE menu_item   
                                       SET 
                                       name="'.$_POST['name'].'",
                                       link="'.$_POST['link'].'",
                                       class="'.$_POST['class'].'",
                                       ahas_child="'.$_POST['ahas_child'].'",
                                       menu="'.$_POST['menu'].'",
                                       parent="'.$_POST['parent'].'",
                                       publish="'.$_POST['publish'].'",
                                       language="'.$_POST['language'].'"
                                       WHERE id='.$_GET['id']);
                                      
       header('location:listmenu.php');

    }
    ?> 