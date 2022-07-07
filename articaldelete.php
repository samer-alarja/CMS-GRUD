<?php 
    include 'db.php'; 
    if(isset($_GET['id']) === true && $_GET['id'] != ''){
             $val = $_GET['id'];
             mysqli_query($link , 'DELETE   
                                   FROM artical   
                                   WHERE artical .id = '.$val);
                header('location: listartical.php?success=2');  
    }
    ?>