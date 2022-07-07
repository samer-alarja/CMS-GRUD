<?php 
    include 'db.php'; 
    if(isset($_GET['id']) === true && $_GET['id'] != ''){
             $val = $_GET['id'];
             mysqli_query($link , 'DELETE   
                                   FROM setting   
                                   WHERE setting .id = '.$val);
                header('location: listsettings.php?success=2');  
    }
    ?>