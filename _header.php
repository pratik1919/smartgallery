<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 3/2/2017
 * Time: 3:41 PM
 */
?>

<!DOCTYPE html>
<html xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Smart Gallery</title>

    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css" />
    <link href="bootstrap-3.3.7-dist/css/font-awesome.css" rel="stylesheet">
    <link href="bootstrap-3.3.7-dist/css/bootstrap-social.css" rel="stylesheet">


    <!--[if lt IE 7]>
    <style type="text/css">
        #wrapper { height:100%; }
    </style>
    <![endif]-->

</head>

<body>

<div class="top-info">
    <h6 style="padding: 9px;"><i class="glyphicon glyphicon-phone"></i> Call : 985-1243865</h6>
    <h6 style="float: right;">
        <a class="btn">
            <span class="fa fa-facebook"></span>
        </a>

        <a class="btn">
            <span class="fa fa-twitter"></span>
        </a>

        <a class="btn">
            <span class="fa fa-instagram"></span>
        </a>
        <a class="btn">
            <span class="fa fa-youtube"></span>
        </a>
    </h6>
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
    <span><img src="img/logo.png" height="70px" alt=""></span>
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
