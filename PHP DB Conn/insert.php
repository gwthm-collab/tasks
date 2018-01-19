<?php
require_once('db.php');
$sql = "call sp_ins('".$_POST['uname']."','".$_POST['email']."','".$_POST['gender']."','".$_POST['loc']."')";
if(mysqli_query($conn, $sql)){
    echo "Inserted";
header( "refresh:5;url=uses.php" );
}
?>