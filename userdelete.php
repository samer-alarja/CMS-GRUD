<?php 
    include 'db.php'; 
    if(isset($_GET['id']) === true && $_GET['id'] != ''){
             $val = $_GET['id'];
             mysqli_query($link , 'DELETE   
                                   FROM users   
                                   WHERE users .id = '.$val);
                header('location: listuser.php?success=2');  
    }
    ?>