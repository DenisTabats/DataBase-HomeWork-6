<?php
include "functions.php";
updateInfo($_POST['IDclient'], $_POST['fio'], $_POST['passport'], $_POST['visa'], $_POST['status'], $_POST['dateVisa']);
header("Location:index.php");
?>