<?php include 'db.php'; ?>
<?php
session_start();
$select = mysqli_query($link, "SELECT *  FROM users 
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
                //   header('location:panel.php');
                  header('location:panel.php');
                  exit;
               }
           }else{
               header('location:login.php?error=1');   
           }

?>