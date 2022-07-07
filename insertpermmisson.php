<?php 
include "db.php";


    $insert_product = mysqli_query($link , 'INSERT INTO permmisson(name,row) 
                                VALUES ( "'.$_POST['name'].'","'. $_POST['row'].'")');


header('location:listpermmisson.php')
?>