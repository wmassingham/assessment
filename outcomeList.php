<?php

	require_once('control/connection.php');
	require_once('control/startSession.php');

	if (!isset($_SESSION['userID'])) { header("Location: login.php"); exit("Not logged in"); }
	if ($_SESSION['roleID'] != 1) { header("HTTP/1.0 403 Forbidden"); die("Unauthorized"); }
	
	$page_title = 'Manage outcomes';
	include('includes/header.php');
	
	echo '<h1>'.$page_title.'</h1>
		<a href="outcomeAdd.php">Add new outcome</a>
		<table class="dataTable">
		<tr><th>#</th><th>Heading name</th><th>Active</th><th>Edit</th>';
	
	$evenodd = false;
	$result = mysqli_query($dbc, "select otchID, otchActive, otchName from outcomeheading") or die('Error querying for outcome headings: ' . mysqli_error($dbc));
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<tr class="'.($evenodd?"even":"odd").'"><td>'.$row['otchID'].'</td><td>'.$row['otchName'].'</td><td>'.$row['otchActive'].'<td><a href="outcomeManage.php?id='.$row['otchID'].'">edit</a></td></tr>';
		$evenodd = !$evenodd;
	}
	
	echo '</table>';
	
	include("includes/footer.php");

?>
