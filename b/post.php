<?php
    include "../inc/settings.php";
	$msg = "";

    if (isset($_POST['submit']) && !empty($_FILES['file']['name'])) {
		$allowFileTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf', 'webm', 'mp4');
        $target = "src/";
		$targetFileName = basename($_FILES['file']['name']);
		$targetFilePath = $target . $targetFileName;
		$targetFileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        $name = mysqli_real_escape_string($db, stripslashes($_POST['name']));
        $email = mysqli_real_escape_string($db, stripslashes($_POST['email']));
        $subject = mysqli_real_escape_string($db, stripslashes($_POST['subject']));
        $message = mysqli_real_escape_string($db, stripslashes($_POST['message']));
        $file = $_FILES['file']['name'];
        $password = mysqli_real_escape_string($db, stripslashes($_POST['password']));
		
		if (empty($_POST['name'])) {
			$name = "" . $anonName . "";
		}

        $sql = "INSERT INTO posts_b (name, email, subject, message, file, password, date) VALUES ('$name', '$email', '$subject', '$message', '$file', '$password', NOW())";
        mysqli_query($db, $sql);

        if (in_array($targetFileType, $allowFileTypes)) {
			
			if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
				
				$msg = "Post made successfully!";
			
			} else {
			
				$msg = "File could not be uploaded.";

			}
			
		}
		
    }
	
	echo $msg;
?>