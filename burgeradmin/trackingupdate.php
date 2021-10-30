<?php
    include "connection.php";
    $id = $_GET['id'];
    $issue = $_GET['userStatus'];
  
    
    mysqli_query($link, "UPDATE tbl_order SET userStatus='$issue' WHERE id=$id");
    
    header('Location: tracking.php');
    
?>



