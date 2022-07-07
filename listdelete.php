<?php 
    include 'db.php'; 
    if(isset($_GET['id']) === true && $_GET['id'] != ''){
             $val = $_GET['id'];
             mysqli_query($link , 'DELETE   
                                   FROM menu_item   
                                   WHERE menu_item .id = '.$val);
                header('location: listmenu.php?success=2');  
    }
    ?>