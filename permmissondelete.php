<?php 
    include 'db.php'; 
    if(isset($_GET['id']) === true && $_GET['id'] != ''){
             $val = $_GET['id'];
             mysqli_query($link , 'DELETE   
                                   FROM permmisson   
                                   WHERE permmisson .id = '.$val);
                header('location: listpermmisson.php?success=2');  
    }
    ?>