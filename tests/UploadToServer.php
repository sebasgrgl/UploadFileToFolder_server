<?php
    $path = $_FILES['uploaded_file']['name'];
	$ext = pathinfo($path, PATHINFO_EXTENSION);
	error_log($ext);
	if(($ext=="jpg")or($ext=="png")){
	$file_path = "uploads/images/";
	}else if(($ext=="mp3")){
	$file_path = "uploads/audio/";
	}else if((($ext=="mpg")or($ext=="mp4"))or($ext=="3gp")){
	$file_path = "uploads/video/";
	}else{
	$file_path = "uploads/others/";
	}
	$file_path = $file_path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path)) {
        echo "success";
    } else{
        echo "fail";
    }
 ?>