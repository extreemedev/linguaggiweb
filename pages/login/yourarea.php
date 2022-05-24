<?php
session_start();
$sessionmail = $_SESSION["id"];
$sessioname = $_SESSION["user"];
if($sessionmail==""){
    header('location: error.php');
}
?>
<html>
<head>
  <meta http-equiv="refresh" content="" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Area personale</title>
  <link rel="icon" href="../../src/assets/img/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="../../bootstrap/css/styles.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
  <script src="rememberMe.js"></script>
  <style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 120px;
  height: 120px;
  margin: -76px 0 0 -76px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #fccf3c;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 3s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#mypage {
  display: none;
  text-align: center;
}
</style>
</head>
<body id="page-top" class="back5" onload="myLoader()">

<div id="loader"></div>
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
        <a class="logo" href="#page-top"><img src="../../src/assets/img/logo.png" width="120px" height="110px" object-fit="scale-down" alt="logo"></a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav__links navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="../../index.html">Scopri il parco</a></li>
                <li class="nav-item"><a class="nav-link" href="/pages/calendar/index.html">Calendario e tariffe + hotel</a></li>
                <li class="nav-item"><a class="nav-link" href="/pages/info/index.html">Info e contatti</a></li>
                <li class="nav-item border-bottom border-warning"><a class="nav-link" href="#">Area personale</a></li>
            </ul>
            <a style="margin-left: 50px;"  class="btn-grad" href="#">Acquista e prenota</a>
        <!--p class="menu btn-grad">-</p-->
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    </div>
</nav>
<div class="mb-custom"></div>
<div id="mypage" class="animate-bottom" >
    <div class="text"><?php echo"Benvenuto ".$sessioname?></div>
    <a class="btn-grad" style="display: initial;" href="./out.php">Logout</a>
</div>









<script>
var myVar;

function myLoader() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("mypage").style.display = "block";
}
</script>

</body>
</html>