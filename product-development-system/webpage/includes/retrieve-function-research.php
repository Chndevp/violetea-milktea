<?php
	include_once 'db-connection.php';
	$id=$_POST['retrieve_id'];

        $sql = "UPDATE tbl_research SET archive = 'false' WHERE id = '$id'";
        mysqli_query($conn, $sql);
        header("Location: ../retrieve-research.php?retrieve=success");

?>