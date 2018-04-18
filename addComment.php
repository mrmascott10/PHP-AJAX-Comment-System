<?php
// Connect to database
include 'db_connection.php';
// Variables taken from form
$name = Trim(stripslashes($_POST['name']));
$comment = Trim(stripslashes($_POST['comment']));
$pageId = Trim(stripslashes($_POST['pageId']));
//Insert into database
$addComment = mysqli_query($mysqli, "INSERT INTO `addComment`(`name`, `comment`, `pageId`) VALUES ('$name', '$comment', '$pageId')");
?>