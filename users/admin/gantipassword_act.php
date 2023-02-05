<?php
    
    include '../../config/config.php';
    
    session_start();
    $id = $_SESSION['id'];
    $password = md5($_POST['password']);

    mysqli_query($con, "UPDATE user SET user_password='$password' WHERE user_id='$id'")or die(mysqli_errno());

    header("location:gantipassword.php?alert=sukses");

?>