<?php 
 	$name_error = $nis_error = $emailnis_error = "";
 	$name = $nis = $emailnis = "";

 	if ($_SERVER["REQUEST_METHOD"] == "POST") {
 		if(empty($_POST["name"])) {
 			$name_error = "name is required";
 		} else {
 			$name = test_input($_POST["name"]);
 			//cek inputan hanya letters & space
 			if(!preg_match("/^[a-zA-Z ]/", $name)){
 				$name_error = "Only letters and whitespace allowed";
 			}
 		}

 		if(empty($_POST["nis"])){
 			$nis_error = "nis is required";
 		} else {
 			$nis = test_input($_POST["nis"]);
 			//cek
 			if(!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i", $nis)){
 				$nis_error = "Only number allowed";
 			}
 		}

 		if(empty($_POST["emailnis"])){
 			$emailnis_error = "email nis is required";
 		} else {
 			$nis = test_input($_POST["emailnis"]);
 			//cek
 			if(!filter_var($emailnis, FILTER_VALIDATE_EMAIL)){
 				$emailnis_error = "Invalid email format";
 			}
 		}
 	}
 	function test_input($data) {
 		$data = trim($data);
 		$data = stripcslashes($data);
 		$data = htmlspecialchars($data);
 		return $data;
 	}
 ?>