<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 3/20/2017
 * Time: 12:57 PM
 */
include 'dbConnect.php';
function addProd($name, $price, $desc, $photo, $pos, $conn){

    $stmt = $conn->prepare("SELECT * FROM `product` WHERE `position_id` = ?");
    $stmt->bind_param("s", $pos);
    $stmt->execute();
    while ($stmt->fetch()) {
    }

    if ($stmt->num_rows > 0) {
        $stmt2 = $conn->prepare("DELETE FROM `product` WHERE `position_id` = ?");
        $stmt2->bind_param("s", $pos);
        $stmt2->execute();
    }

    $stmt4 = $conn->prepare("INSERT INTO `product`(`name`, `price`, `description`, `position_id`, `photo`) VALUES (?,?,?,?,?)");
    $stmt4->bind_param("sssss", $name, $price, $desc, $pos, $photo);
    $stmt4->execute();
}


function getProduct($position, $conn)
{

    $select = $conn->prepare("SELECT * FROM `product` WHERE `position_id` = ?");
    $select->bind_param("s", $position);
    $select->execute();
    $r = $select->get_result();
    return $r;
}
