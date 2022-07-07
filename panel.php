<?php 
session_start();
if(isset($_SESSION['login']) === false && $_SESSION['login'] != 'xxx'){

    header('location:login.php?error=2');
}
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title> page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.css">
    <link rel="stylesheet" href="task1.css">
</head>

<body>
    <div class="header header-area header-sticky" >
        <div class="menu-bar" >
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                    <i class="material-icons">favorite</i>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                   
                    <div class="collapse navbar-collapse right" style="justify-content: right;" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php">logout</a>
                                </li>
                                <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">artical</a>
                                 <div class="dropdown-menu">
                                   <a class="dropdown-item" href="addartical.php">add</a>
                                   <a class="dropdown-item" href="listartical.php">list</a>
                                 </div>
                               </li>
                                <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">menu</a>
                                 <div class="dropdown-menu">
                                   <a class="dropdown-item" href="addmenu.php">add</a>
                                   <a class="dropdown-item" href="listmenu.php">list</a>
                                 </div>
                               </li>
                                <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">category</a>
                                 <div class="dropdown-menu">
                                   <a class="dropdown-item" href="addcategory.php">add</a>
                                   <a class="dropdown-item" href="listcategory.php">list</a>
                                 </div>
                               </li>
                                <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">user</a>
                                 <div class="dropdown-menu">
                                   <a class="dropdown-item" href="adduser.php">add</a>
                                   <a class="dropdown-item" href="listuser.php">list</a>
                                 </div>
                               </li>
                                <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">permmisson</a>
                                 <div class="dropdown-menu">
                                   <a class="dropdown-item" href="addpermmisson.php">add</a>
                                   <a class="dropdown-item" href="listpermmisson.php">list</a>
                                 </div>
                               </li>
                               <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">settings</a>
                                 <div class="dropdown-menu">
                                   <a class="dropdown-item" href="addsettings.php">add</a>
                                   <a class="dropdown-item" href="listsettings.php">list</a>
                                 </div>
                               </li>
                        </ul>
                    
                </div>
            </nav>
        </div>
    </div>
    <div 
    style="background:url('https://picsum.photos/1200/920/?random'); background-size:cover; background-attachment:fixed; height:650px; width:auto;margin:0;">
</div>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"> </script>
    <script src="file:///C:/Users/webtrainee/Downloads/OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.js"></script>
   
</body>

</html>