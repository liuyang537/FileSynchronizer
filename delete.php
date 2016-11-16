<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>delete</title>
</head>

<body>
<?php 

if (isset ($_POST['remve_file'])){

	$file_Name = $_POST['fileToRemove'];
	$file_Path = 'uploads/'.$file_Name;
	
	if (file_exists($file_Path))
	{
		
		if (is_file($file_Path))
		{
		unlink($file_Path);
		echo "The file $file_Name Deleted!!";
		}else{
	    rmdir($file_Path);
		echo "The folder $file_Name Deleted!!";
    	}

	
	}else{
		echo "$file_Name Not Exist!!"; 
	}
}


?>

<p>
<a href="index.php">Back to First Page</a>
</p>

</body>

</html>
