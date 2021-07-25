<?php
include "config.php";
$name = $_POST['dest_name'];
$loc = $_POST['dest_loc'];
$date = $_POST['dest_date'];
$stmt = $link->prepare("INSERT INTO attraction_logger (att_name, att_loc, att_date)
        VALUES(?, ?, ?)");
$stmt->bind_param("sss", $name, $loc, $date);
$stmt->execute();
?>
