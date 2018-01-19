<?php
//require_once('header.php');
require_once('db.php');
$sql = "call sp_login('".$_POST['email']."',md5('".$_POST['passwd']."'), @ans)";
$result = mysqli_query($conn, $sql);
session_start();
while($row = mysqli_fetch_assoc($result)){
$_SESSION["name"] = $row['Name'];
}
if(!isset($_SESSION["name"])){
    header("Location:index.php");
}
//echo $_SESSION["name"];
header( "Location:uses.php" );
?>