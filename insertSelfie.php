<?php 
require_once("themes/config.php");
if(isset($_SESSION["user_complete_id"])){
	if(isset($_FILES["webcam"]["tmp_name"])){
		
		$tmpName = $_FILES["webcam"]["tmp_name"];
		$imageName = date("Y.m.d") . " - " . date("h.i.sa") . ' .jpeg';
		
		move_uploaded_file($tmpName, 'assets/img/profile_img/' . $imageName);
		
		$user_idPhoto = $_SESSION["user_complete_id"]; 
		$query = "INSERT INTO `tbl_user_profile_img`(`user_id`, `image`) VALUES (?,?)";
		$stmt = $conn->prepare($query);
		$stmt->execute([$user_idPhoto,$imageName]);
	}
} 
?>

  






