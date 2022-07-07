<?php 
    session_start(); 
    include 'db.php'; 

    if(isset($_POST['name']) === true && $_POST['name'] != ''){
         
 
            mysqli_query($link , 'UPDATE permmisson  
                                       SET 
                                       name="'.$_POST['name'].'",
                                       row="'.$_POST['row'].'"
                                       WHERE id='.$_GET['id']);
       header('location:listpermmisson.php');

    }
    ?> 