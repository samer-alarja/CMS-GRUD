<?php include 'db.php'; ?>
<?php
session_start();
$select = mysqli_query($link, "SELECT *  FROM login 
          WHERE 
           username = '".$_POST['username']."'
           and 
           password = '".$_POST['password']."'
           and 
           active = '1' ");
           if(mysqli_num_rows($select) > 0){
               while($exc = mysqli_fetch_assoc($select)){
                  $_SESSION['login'] = 'xxx';
                  $_SESSION['id'] = $exc['id'];
                  header('location:paneluser.php');
                  exit;
               }
           }else{
               header('location:loginuser.php?error=1');   
           }

?>