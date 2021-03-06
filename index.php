<?php
session_start();
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Smart Gallery</title>
    <!--    <link rel="stylesheet" type="text/css" href="style.css"/>-->
    <script src="bootstrap-3.3.7-dist/js/jssor.slider-22.2.11.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function () {

            var jssor_1_options = {
                $AutoPlay: true,
                $SlideDuration: 800,
                $SlideEasing: $Jease$.$OutQuint,
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>

    <!--[if lt IE 7]>


    <style>
        /* jssor slider loading skin oval css */

        #wrapper {
            height: 100%;
        }

        .jssorl-oval img {
            animation-name: jssorl-oval;
            animation-duration: 1.2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-oval {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        /* jssor slider bullet navigator skin 05 css */

        .jssorb05 div

        (
        normal

        )
        ;
        .jssorb05 div:hover     (normal mouseover)

        ;
        .jssorb05 .av

        (
        active

        )
        ;
        .jssorb05 .av:hover     (active mouseover)

        ;
        .jssorb05 .dn

        (
        mousedown

        )
        ;

        .jssorb05 {
            position: absolute;
        }

        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }

        .jssorb05 div {
            background-position: -7px -7px;
        }

        .jssorb05 div:hover, .jssorb05 .av:hover {
            background-position: -37px -7px;
        }

        .jssorb05 .av {
            background-position: -67px -7px;
        }

        .jssorb05 .dn, .jssorb05 .dn:hover {
            background-position: -97px -7px;
        }

        /* jssor slider arrow navigator skin 22 css */

        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('img/a22.png') center center no-repeat;
            overflow: hidden;
        }

        .jssora22l {
            background-position: -10px -31px;
        }

        .jssora22r {
            background-position: -70px -31px;
        }

        .jssora22l:hover {
            background-position: -130px -31px;
        }

        .jssora22r:hover {
            background-position: -190px -31px;
        }

        .jssora22l.jssora22ldn {
            background-position: -250px -31px;
        }

        .jssora22r.jssora22rdn {
            background-position: -310px -31px;
        }

        .jssora22l.jssora22lds {
            background-position: -10px -31px;
            opacity: .3;
            pointer-events: none;
        }

        .jssora22r.jssora22rds {
            background-position: -70px -31px;
            opacity: .3;
            pointer-events: none;
        }
    </style>


    <![endif]-->

</head>

<body>
<form action="buy.php" id="read" method="post">
    <input type="hidden" id="positionId" name="positionId"/>
    <input type="hidden" value="news" name="content"/>
</form>
<div id="wrapper">

    <div id="header">
        <?php
        include '_header.php';
        ?>
        <div id="jssor_1"
             style="position:relative;margin:0 auto;top:0px;left:0px;width:1500px;height:600px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-oval"
                 style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19.0px;position:relative;top:50%;width:38px;height:38px;" src="img/oval.svg"/>
            </div>
            <div data-u="slides"
                 style="cursor:default;position:relative;top:0px;left:0px;width:1500px;height:600px;overflow:hidden;">
                <div>
                    <img data-u="image" src="img/android.jpg"/>
                    <div style="position:absolute;top:85px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(0,0,0,0.5);">
                        <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#ffffff;line-height:40px;">
                            This is editable text Mr. Budha
                        </div>
                        <div style="position:absolute;top:60px;left:15px;width:570px;height:40px;z-index:0;font-size:22px;color:#ffffff;line-height:38px;">
                            Hahahah
                        </div>
                    </div>
                    <!--                                            <div style="position:absolute;top:370px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(255,255,255,0.5);">-->
                    <!--                                                <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#000000;line-height:40px;">Run slider on any device</div>-->
                    <!--                                                <div style="position:absolute;top:60px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#000000;line-height:38px;">windows, android, mac</div>-->
                    <!--                                            </div>-->
                </div>
                <div>
                    <img data-u="image" src="img/windows.jpg"/>
                    <div style="position:absolute;top:85px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(0,0,0,0.5);">
                        <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#ffffff;line-height:40px;">
                            Haina ta
                        </div>
                        <div style="position:absolute;top:60px;left:15px;width:570px;height:40px;z-index:0;font-size:22px;color:#ffffff;line-height:38px;">
                            haha
                        </div>
                    </div>
                    <!--                                            <div style="position:absolute;top:370px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(255,255,255,0.5);">-->
                    <!--                                                <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#000000;line-height:40px;">Run slider on any device</div>-->
                    <!--                                                <div style="position:absolute;top:60px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#000000;line-height:38px;">windows, android, mac</div>-->
                    <!--                                            </div>-->
                </div>
                <div>
                    <img data-u="image" src="img/mac.jpg"/>
                    <div style="position:absolute;top:85px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(0,0,0,0.5);">
                        <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#ffffff;line-height:40px;">
                            Ho!
                        </div>
                        <div style="position:absolute;top:60px;left:15px;width:570px;height:40px;z-index:0;font-size:22px;color:#ffffff;line-height:38px;">
                            ha
                        </div>
                    </div>
                    <!--                        <div style="position:absolute;top:370px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(255,255,255,0.5);">-->
                    <!--                            <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#000000;line-height:40px;">Run slider on any device</div>-->
                    <!--                            <div style="position:absolute;top:60px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#000000;line-height:38px;">windows, android, mac</div>-->
                    <!--                        </div>-->
                </div>
            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                <!-- bullet navigator item prototype -->
                <div data-u="prototype" style="width:16px;height:16px;"></div>
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;"
                  data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;"
                  data-autocenter="2"></span>
        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-lg-4 featured" id="featured-1" onclick="submitForm(this)">
        <?php
        $prod = getProduct("featured-1", $conn);
        $row = $prod->fetch_assoc();

        if (isset($_SESSION['login'])) {
            ?>
            <div class="changeBtnDiv">
                <button class="btn btn-default glyphicon glyphicon-pencil" data-position-id="featured-1"
                        data-toggle="modal" data-target="#addProductModal">
                </button>
            </div>
            <?php
        }
        ?>
        <img src="img/<?php echo $row['photo']; ?>" alt="">
    </div>
    <div class="col-md-4 col-sm-4 col-lg-4 featured" id="featured-2" onclick="submitForm(this)">
        <?php
        $prod = getProduct("featured-2", $conn);
        $row = $prod->fetch_assoc();

        if (isset($_SESSION['login'])) {
            ?>
            <div class="changeBtnDiv">
                <button class="btn btn-default glyphicon glyphicon-pencil" data-position-id="featured-2"
                        data-toggle="modal" data-target="#addProductModal">
                </button>
            </div>
            <?php
        }
        ?>
        <img src="img/<?php echo $row['photo']; ?>" alt="">
    </div>
    <div class="col-md-4 col-sm-4 col-lg-4 featured" id="featured-3" onclick="submitForm(this)">
        <?php
        $prod = getProduct("featured-3", $conn);
        $row = $prod->fetch_assoc();

        if (isset($_SESSION['login'])) {
            ?>
            <div class="changeBtnDiv">
                <button class="btn btn-default glyphicon glyphicon-pencil" data-position-id="featured-3"
                        data-toggle="modal" data-target="#addProductModal">
                </button>
            </div>
            <?php
        }
        ?>
        <img src="img/<?php echo $row['photo']; ?>" alt="">
    </div>
    <div id="content">

        <div class="container">
            <div class="row">
                <legend class="title">Latest Products</legend>

                <div class="col-md-4 col-sm-4 col-lg-4 pad">
                    <div class="product"
                         style="height: 300px; background-image: url('img/<?php echo $row['photo']; ?>')">
                        <?php

                        $prod = getProduct("LP-1", $conn);
                        $row = $prod->fetch_assoc();

                        if (isset($_SESSION['login'])) {
                            ?>
                            <div class="changeBtnDiv">
                                <button class="btn btn-default glyphicon glyphicon-pencil" data-position-id="LP-1"
                                        data-toggle="modal" data-target="#addProductModal">
                                </button>
                            </div>
                            <?php
                        }
                        ?>

                        <div class="overlay">
                            <h5><?php echo $row['name']; ?><br> <span
                                        style="font-size: 24px;">Rs <?php echo $row['price']; ?>/- </span><br>
                                <button class="btn btn-success" id="LP-1" onclick="submitForm(this)">Buy Now</button>
                            </h5>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-lg-4 pad">
                    <div class="product"
                         style="height: 300px; background-image: url('img/<?php echo $row['photo']; ?>')">
                        <?php

                        $prod = getProduct("LP-2", $conn);
                        $row = $prod->fetch_assoc();

                        if (isset($_SESSION['login'])) {
                            ?>
                            <div class="changeBtnDiv">
                                <button class="btn btn-default glyphicon glyphicon-pencil" data-position-id="LP-2"
                                        data-toggle="modal" data-target="#addProductModal">
                                </button>
                            </div>
                            <?php
                        }
                        ?>

                        <div class="overlay">
                            <h5><?php echo $row['name']; ?><br> <span
                                        style="font-size: 24px;">Rs <?php echo $row['price']; ?>/- </span><br>
                                <button class="btn btn-success" id="LP-2" onclick="submitForm(this)">Buy Now</button>
                            </h5>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-lg-4 pad">
                    <div class="product"
                         style="height: 300px; background-image: url('img/<?php echo $row['photo']; ?>')">
                        <?php

                        $prod = getProduct("LP-3", $conn);
                        $row = $prod->fetch_assoc();

                        if (isset($_SESSION['login'])) {
                            ?>
                            <div class="changeBtnDiv">
                                <button class="btn btn-default glyphicon glyphicon-pencil" data-position-id="LP-3"
                                        data-toggle="modal" data-target="#addProductModal">
                                </button>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="overlay">
                            <h5><?php echo $row['name']; ?><br> <span
                                        style="font-size: 24px;">Rs <?php echo $row['price']; ?>/- </span><br>
                                <button class="btn btn-success" id="LP-3" onclick="submitForm(this)">Buy Now</button>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-section">
            <legend class="title">Best Sellers</legend>

            <div class="row best-seller">
                <?php
                $prod = getProduct("BS-1", $conn);
                $row = $prod->fetch_assoc();
                if (isset($_SESSION['login'])) {
                    ?>
                    <div class="changeBtnDiv">
                        <button class="btn btn-default glyphicon glyphicon-pencil" data-position-id="BS-1"
                                data-toggle="modal" data-target="#addProductModal">
                        </button>
                    </div>
                    <?php
                }
                ?>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <h1 class="title"><?php echo $row['name']; ?><br> <span
                                style="font-size: 24px;">Rs <?php echo $row['price']; ?>/- </span><br>
                        <button class="btn btn-success" id="BS-1" onclick="submitForm(this)">Buy Now</button>
                    </h1>

                </div>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <img src="img/<?php echo $row['photo']; ?>" alt="">
                </div>
            </div>

            <div class="row best-seller">
                <?php
                $prod = getProduct("BS-2", $conn);
                $row = $prod->fetch_assoc();
                if (isset($_SESSION['login'])) {
                    ?>
                    <div class="changeBtnDiv">
                        <button class="btn btn-default glyphicon glyphicon-pencil" data-position-id="BS-2"
                                data-toggle="modal" data-target="#addProductModal">
                        </button>
                    </div>
                    <?php
                }
                ?>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <h1 class="title"><?php echo $row['name']; ?><br> <span
                                style="font-size: 24px;">Rs <?php echo $row['price']; ?>/- </span><br>
                        <button class="btn btn-success" id="BS-2" onclick="submitForm(this)">Buy Now</button>
                    </h1>

                </div>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <img src="img/<?php echo $row['photo']; ?>" alt="">
                </div>
            </div>


            <div class="row best-seller">
                <?php
                $prod = getProduct("BS-3", $conn);
                $row = $prod->fetch_assoc();
                if (isset($_SESSION['login'])) {
                    ?>
                    <div class="changeBtnDiv">
                        <button class="btn btn-default glyphicon glyphicon-pencil" data-position-id="BS-3"
                                data-toggle="modal" data-target="#addProductModal">
                        </button>
                    </div>
                    <?php
                }
                ?>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <h1 class="title"><?php echo $row['name']; ?><br> <span
                                style="font-size: 24px;">Rs <?php echo $row['price']; ?>/- </span><br>
                        <button class="btn btn-success" id="BS-3" onclick="submitForm(this)">Buy Now</button>
                    </h1>

                </div>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <img src="img/<?php echo $row['photo']; ?>" alt="">
                </div>
            </div>

            <div class="row best-seller">
                <?php
                $prod = getProduct("BS-4", $conn);
                $row = $prod->fetch_assoc();
                if (isset($_SESSION['login'])) {
                    ?>
                    <div class="changeBtnDiv">
                        <button class="btn btn-default glyphicon glyphicon-pencil" data-position-id="BS-4"
                                data-toggle="modal" data-target="#addProductModal">
                        </button>
                    </div>
                    <?php
                }
                ?>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <h1 class="title"><?php echo $row['name']; ?><br> <span
                                style="font-size: 24px;">Rs <?php echo $row['price']; ?>/- </span><br>
                        <button class="btn btn-success" id="BS-4" onclick="submitForm(this)">Buy Now</button>
                    </h1>

                </div>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <img src="img/<?php echo $row['photo']; ?>" alt="">
                </div>
            </div>


            <div class="row best-seller">
                <?php
                $prod = getProduct("BS-5", $conn);
                $row = $prod->fetch_assoc();
                if (isset($_SESSION['login'])) {
                    ?>
                    <div class="changeBtnDiv">
                        <button class="btn btn-default glyphicon glyphicon-pencil" data-position-id="BS-5"
                                data-toggle="modal" data-target="#addProductModal">
                        </button>
                    </div>
                    <?php
                }
                ?>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <h1 class="title"><?php echo $row['name']; ?><br> <span
                                style="font-size: 24px;">Rs <?php echo $row['price']; ?>/- </span><br>
                        <button class="btn btn-success" id="BS-5" onclick="submitForm(this)">Buy Now</button>
                    </h1>

                </div>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <img src="img/<?php echo $row['photo']; ?>" alt="">
                </div>
            </div>


            <div class="row best-seller">
                <?php
                $prod = getProduct("BS-6", $conn);
                $row = $prod->fetch_assoc();
                if (isset($_SESSION['login'])) {
                    ?>
                    <div class="changeBtnDiv">
                        <button class="btn btn-default glyphicon glyphicon-pencil" data-position-id="BS-6"
                                data-toggle="modal" data-target="#addProductModal">
                        </button>
                    </div>
                    <?php
                }
                ?>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <h1 class="title"><?php echo $row['name']; ?><br> <span
                                style="font-size: 24px;">Rs <?php echo $row['price']; ?>/- </span><br>
                        <button class="btn btn-success" id="BS-6" onclick="submitForm(this)">Buy Now</button>
                    </h1>

                </div>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <img src="img/<?php echo $row['photo']; ?>" alt="">
                </div>
            </div>

        </div>

        <div style="height: 100px;"></div>
    </div><!-- #content -->

    <div id="footer">
        <?php
        include '_footer.php';
        ?>
    </div><!-- #footer -->

</div><!-- #wrapper -->


<script type="text/javascript">

    jssor_1_slider_init();

    $('#addProductModal').on('show.bs.modal', function (e) {
        var positionId = $(e.relatedTarget).data('position-id');
        $(e.currentTarget).find('input[name="positionId"]').val(positionId);

    });

    function submitForm(item){
        var pos = $(item).attr("id");
        document.getElementById('positionId').value = pos;
        var id = '#read';
        $(id).submit();
    }


</script>


</body>

</html>