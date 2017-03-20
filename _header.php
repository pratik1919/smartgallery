<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 3/2/2017
 * Time: 3:41 PM
 */

include "common.php";
include "dbConnect.php";
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
    <script src="bootstrap-3.3.7-dist/js/jquery-1.11.3.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <script src="bootstrap-3.3.7-dist/js/script.js"></script>
    <!--[if lt IE 7]>
    <style type="text/css">
        #wrapper { height:100%; }
    </style>
    <![endif]-->

</head>

<body>

<!--    add product model-->
<div id="addProductModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Product</h4>
            </div>
            <div class="modal-body">
                <form class="form" action="controller/c_addProduct.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="positionId"/>

                    <div class="form-group">
                        <label for="">Name</label>
                        <input class="form-control" type="text" name="name" required=""/>
                    </div>

                    <div class="form-group">
                        <label for="">Price</label>
                        <input class="form-control" type="text" name="price" required=""/>
                    </div>


                    <div class="form-group">
                        <label for="">Description</label><br/>
                        <textarea style="width: 100%;white-space: pre-wrap;" name="desc" id="" cols="30" rows="10"
                                  required=""></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Photo</label><br/>
                        <input type="file" name="photo" required/>
                    </div>

                    <input type="submit" value="Add" class="btn btn-success btn-block"/>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


<div class="top-info">
    <h6 style="padding: 9px;"><i class="glyphicon glyphicon-phone"></i> Call : 985-1243865</h6>
    <h6 class="pull-right">
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
    <?php
    if(isset($_SESSION['login'])){
        ?>
        <a href="controller/c_logout.php">Logout</a>
        <a href="controller/c_logout.php">Change Password</a>
        <?php
    }
    ?>

    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
</div>
<div id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    <span><img src="img/logo.png" height="70px" alt=""></span>
</div>

<div class="social-media">
<div>
    <a class="btn btn-facebook">
        <span class="fa fa-facebook"></span>
    </a>

    <a class="btn btn-twitter">
        <span class="fa fa-twitter"></span>
    </a>

    <a class="btn btn-instagram">
        <span class="fa fa-instagram"></span>
    </a>

    <a class="btn btn-google">
        <span class="fa fa-youtube"></span>
    </a>
</div>
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

    $(document).ready(function(){$("#main").fixedScrollPosition("50px")})
</script>

</body>
</html>
