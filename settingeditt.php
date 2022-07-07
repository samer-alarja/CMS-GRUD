<?php 
    session_start(); 
    include 'db.php'; 

    if(isset($_POST['website_name']) === true && $_POST['website_name'] != ''){
         
 
            mysqli_query($link , 'UPDATE setting  
                                       SET 
                                       website_name="'.$_POST['website_name'].'",
                                       logo="'.$_POST['logo'].'",
                                       CSS="'.$_POST['CSS'].'",
                                       JS="'.$_POST['JS'].'",
                                       meta_keyword="'.$_POST['meta_keyword'].'",
                                       meta_description="'.$_POST['meta_description'].'",
                                       language="'.$_POST['language'].'"
                                       WHERE id='.$_GET['id']);
       header('location:listsettings.php');

    }
    ?> 