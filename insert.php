<?php 
include "db.php";


    $insert_product = mysqli_query($link , 'INSERT INTO menu_item(name,link,class,ahas_child,menu,parent,publish,language) 
                                VALUES ( "'.$_POST['name'].'","'. $_POST['link'].'",
                                         "'.$_POST['class'].'","'.$_POST['has_child'].'",
                                         "'.$_POST['menu'].'","'.$_POST['parent'].'",
                                          "'.$_POST['publish'].'","'.$_POST['language'].'")');


header('location:listmenu.php')
?>