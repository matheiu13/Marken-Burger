<?php
    include "connection.php";
    $id = $_GET['id'];
    $issue = $_GET['senderReview'];
  
    
    mysqli_query($link, "UPDATE tbl_feedback SET sender_review='$issue' WHERE id=$id");
    
    header('Location: admin_feedback_data.php');
    
?>



