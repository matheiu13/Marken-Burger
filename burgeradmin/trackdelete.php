<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link, "delete from tbl_order where id=$id")
?>

<script type="text/javascript">

window.location="tracking.php";

</script>