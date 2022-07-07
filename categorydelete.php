<?php 
    include 'db.php'; 
    if(isset($_GET['id']) === true && $_GET['id'] != ''){
             $val = $_GET['id'];
             mysqli_query($link , 'DELETE   
                                   FROM category  
                                   WHERE category .id = '.$val);
                header('location: listcategory.php?success=2');  
    }
    ?>