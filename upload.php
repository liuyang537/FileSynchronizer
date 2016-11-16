<?php
$file_result = "";

if  ($_FILES["file"]["error"]>0)
{  echo "error";
  } else {
    $file_result .=
    "Upload: " . $_FILES["file"]["name"] . "<br>" .
    "Type: " . $_FILES["file"]["type"] ."<br>" .
    "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br>" .
    "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    move_uploaded_file($_FILES["file"]["tmp_name"],
    "C:\\test\\uploads" . $_FILES["file"]["name"]);
    echo "<script type='text/javascript'>alert('Uploaded Successfully!')</script>";
    exit;
  }
   ?>   
