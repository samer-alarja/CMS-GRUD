<?php 
include "db.php";


    $insert_product = mysqli_query($link , 'INSERT INTO category(name) 
                                VALUES ( "'.$_POST['name'].'")');


header('location:listcategory.php')
?>