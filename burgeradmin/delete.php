<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link, "delete from tbl_product where id=$id")
?>

<script type="text/javascript">

window.location="home.php";

</script>