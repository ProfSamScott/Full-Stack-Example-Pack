<?php 
/** 
 * Advances the customer in line
 * Sam Scott, McMaster University, 2025
 */
header('Content-Type: application/json');
session_start();

if (isset($_SESSION["number"])) {
	// session is good, advance the customer
	$num = $_SESSION["number"];
	$moved = rand(0, $_SESSION["number"]);
	$num -= $moved;
	if ($num === 0) {
		session_destroy();
	} else {
		$_SESSION["number"] = $num;
	}
	// echo the result as an object with two fields
	echo json_encode(["movedup" => $moved, "position" => $num]);
} else {
	// session is not good. echo an error code.
	echo json_encode(-1);
}
