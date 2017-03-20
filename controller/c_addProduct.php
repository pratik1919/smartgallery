<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 3/20/2017
 * Time: 12:54 PM
 */

session_start();

include '../common.php';

$positionID = strip_tags($_POST['positionId']);
$name = strip_tags($_POST['name']);
$price = strip_tags($_POST['price']);
$desc = strip_tags($_POST['desc']);
$photo =  $_FILES['photo']['name'];
$photo_tmp = $_FILES['photo']['tmp_name'];
move_uploaded_file($photo_tmp,"../img/$photo");
addProd($name, $price,  nl2br($desc), $photo, $positionID, $conn);

header('Location: ../index.php');