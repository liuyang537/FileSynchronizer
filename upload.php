<?php 

if (isset($_FILES['file'])){

    $file= $_FILES['file'];
    
    //File Properties
    $file_name=$file['name'];
    $file_tmp =$file ['tmp_name'];
    $file_size =$file['size'];
    $file_error =$file['error'];
    
    //Work out the file extension
    $file_ext = explode('.', $file_name); //limited extention
    $file_ext = strtolower (end($file_ext)); //lower case
    
    $allowed = array('txt', 'jpg', 'rar', 'mp3', 'bmp'); //allowed file formet
    
    if(in_array($file_ext, $allowed)) {
         if($file_error === 0){       
           
           if($file_size <= 20000000) {    //limited size 2M byte
             	
             	$file_name_new = uniqid('', true) . '.' . $file_ext;
             	$file_destination = 'uploads/' . $file_name_new;          
              
              if (move_uploaded_file($file_tmp, $file_destination)){ // move the tmp_file to the Dst
                echo "$file_name_new have been uploaded to the server!!";
              }     
                 
            }    
        	}//error
   	
    }//allow      
 
}

?>

<!DOCTYPE html>
<html>

<head>
<title>Upload</title>
</head>

<body>

<p>
<a href="index.php">Back to First Page</a>
</p>

</body>

</html>



