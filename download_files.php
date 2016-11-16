<?php 

//if($_GET['file']!=null){

if(isset($_GET['file']) && basename($_GET['file']) == $_GET['file']){
   $fileName = $_GET['file'];            //set file name
   $path = 'files/'.$fileName;           //set file path

 if (file_exists($path) && is_readable($path)){
   $size = filesize($path);
  
   //define file headers
   header('content-Type: applicaion/octet-stream');
   //header('Content-Description: File Transfer');
   header('Content-Length: '.$size);
   header('Content-Disposition: attachment; filename='.$fileName);
   header('content-Transfer-Encoding: binary');
   
   //open the file in read-only
   $file = @ fopen($path, 'rb');
   if ($file){
   //stream the file and exit
   		fpassthru($file);
   		exit;
   } 
  
 }
 else {
	echo " $fileName cannot be found ......";
 }
}   

?>

<!DOCTYPE html>
<html>

<head>
<title>Download</title>
</head>

<body>

<p>
<a href="index.php">Back to First Page</a>
</p>

</body>

</html>



