<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 3/2/2017
 * Time: 3:41 PM
 */
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Smart Gallery</title>

    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />

    <!--[if lt IE 7]>
    <style type="text/css">
        #wrapper { height:100%; }
    </style>
    <![endif]-->

</head>

<body>

<div class="row top-info">
    <h6><i class="glyphicon glyphicon-phone"></i> Call : 985-1243865</h6>
</div>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
</div>

<div id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    <span><img src="img/logo.jpg" height="70px" alt=""></span>
</div>



<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
    }
</script>

</body>
</html>
