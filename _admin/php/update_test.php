<?php include '../../_php/db_config.php' ?>
<?php include '../../_php/db_connect.php' ?>
<?php include '../../_php/error.php' ?>
<?php
	//Get data in local variable
	$id = $_REQUEST["id"];
	$db = $_REQUEST["db"];
	$active = $_REQUEST["active"];

	if ($active == 1) $active = '0';
	elseif ($active == 0) $active = '1';


	$query="UPDATE $db SET testimonials_active = '$active' WHERE testimonials_id = '$id'";

	mysqli_query($connect, $query)  or die(mysql_error());
	header ('Location: ../index.php');
?>
