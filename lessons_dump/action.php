<?php
require_once("connect.php");

header("charset=UTF-8");

// handling spray validation
$spray1 = isset($_POST['spray1']) ? $_POST['spray1'] : "off";
$spray2 = isset($_POST['spray2']) ? $_POST['spray2'] : "off";
$spray3 = isset($_POST['spray3']) ? $_POST['spray3'] : "off";

if ($spray1 == "off" && $spray2 == "off" && $spray3 == "off"){
	// handle spray error!
	include_once 'error_spray.php';
	exit();
}



if( isset($_POST['left']) && isset($_POST['right']) ) {
	$motorL = $_POST['left'];
	$motorR = $_POST['right'];
	
	settype($motorL, "integer");
	settype($motorR, "integer");

	$result = mysqli_query($con, "UPDATE controls SET motorL = $motorL, motorR = $motorR, spray1 = '$spray1', spray2 = '$spray2', spray3 = '$spray3' WHERE id = 1");

	if ($result) {
		$response["success"] = 1;
		$response["message"] = "Data Successfully Submitted.";
		// echo json_encode($response);
		include_once 'success.php';
	} else{
		$response["success"] = 0;
		$response["message"] = "Query didn't work";
		// echo json_encode($response);
		include_once 'error.php';
	}
} else{
	$response["success"] = 0;
	$response["message"] = "Parameter(s) are missing. Please check the request";
	// echo json_encode($response);
	include_once 'error.php';
}

$con -> close();
?>

<script>
	if( window.history.replaceState ) {
		window.history.replaceState( null, null, window.location.href );
	}
</script>