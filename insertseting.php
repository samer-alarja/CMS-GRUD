<?php 
include "db.php";


    $insert_product = mysqli_query($link , 'INSERT INTO setting(website_name,logo,CSS,JS,meta_keyword,meta_description,language) 
                                VALUES ( "'.$_POST['website_name'].'","'. $_POST['logo'].'",
                                         "'.$_POST['CSS'].'","'.$_POST['JS'].'",
                                         "'.$_POST['meta_keyword'].'","'.$_POST['meta_description'].'",
                                         "'.$_POST['language'].'")');


header('location:panel.php')
?>