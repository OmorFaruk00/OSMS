<?php
define('TITLE', 'Request Success');
define('PAGE', 'SubmitRequester');
include "user_header.php";
include "Database.php";

$sql = "SELECT * FROM submit_requester WHERE request_id = '".$_SESSION['last_id']."'";

$result = $conn->query($sql);

if($result->num_rows == 1){
	$row = $result->fetch_assoc();

	echo "<div class='ml-5 mt-5'>
	<table class='table'>
	<tbody>
	<tr>
	<th>Request ID</th>
	<td>".$row['request_id']. "</td>
	</tr>
	<tr>
	<th>Name</th>
	<td>".$row['request-name']. "</td>
	</tr>
	<tr>
	<th>Email ID</th>
	<td>".$row['request-email']. "</td>
	</tr>
	<tr>
	<th>Request Info</th>
	<td>".$row['request-info']. "</td>
	</tr>
	<tr>
	<th>Request Description</th>
	<td>".$row['request-desc']. "</td>
	</tr>
	<tr>
	<td>
	<form class='d-print-none'>
	<input class='btn btn-primary mr-3' type='submit' value='Print' onClick='window.print()'>
	
	</form>
	</td>
	
	</tr>
	</tbody>

	
	</table>
	</div>";

}

?>


<?php include "user_footer.php"; ?>
