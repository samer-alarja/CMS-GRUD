<?php 
    session_start(); 
    include 'db.php'; 

    if(isset($_POST['name']) === true && $_POST['name'] != ''){
         
 
            mysqli_query($link , 'UPDATE category   
                                       SET 
                                       name="'.$_POST['name'].'"
                                       WHERE id='.$_GET['id']);
                                      
       header('location:listcategory.php');

    }
    ?> 