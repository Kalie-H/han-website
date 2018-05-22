<?php
function upload($file,$filePath){
	$error = $file['error'];
	switch ($error){
		case 0: 
		$fileName = $file['name'];
		echo "您上传的文件为：".$fileName."<br />";
		$fileTemp = $file['tmp_name'];
		$destination = "uploads/".$fileName;
		move_uploaded_file($fileTemp,$destination);
		echo "文件上传成功！";
		break;
		case 1: echo "文件超过upload_max_filesize上限";break;
		case 2: echo "文件超过MAX_FILE_SIZE上限";break;
		case 3: echo "文件部分上传";break;
		case 4: echo "无上传文件";break;
	}
}
?>