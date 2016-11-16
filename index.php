<!DOCTYPE html>
<html>

<head>
<title>Download</title>
<link type="text/css" rel="stylesheet" href="CSS/index.css">
</head>

<body bgcolor="MintCream">


<!--  Title Funtion -->
<div id="tittle">
<h1>Personal Mini-Drive </h1>
</div>



<!--  leftside ......................... -->

<div id="leftside">

<div id="menu">
<!--  Upload Funtion -->
<br>
<h>Please choose a file to <span style="color:green">Upload</span> : (no more than <span style="color:red">2MB</span>)</h><br>
<!--upload1-->
<form action="upload1.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" >
<input type="submit" value="Upload"  style="width: 50px; height: 25px"><br><br>
</form>
  
<!--  Create Folder Funtion -->
<h>Please type a folder name to <span style="color:blue">Create</span> :</h><br>
<form action="CreateFolder.php" method="post">
<input type="text" name="folderToCreate" style="width: 198px;"> <!--  input bland -->
<input type="submit" name="creat_folder" value="Create"  style="width: 50px; height: 25px"><br><br>
</form>

<!--  Delete Funtion -->
<h>Please type a file/folder name to <span style="color:red">Delete</span> :</h><br>
<form action="delete.php" method="post">
<input type="text" name="fileToRemove" style="width: 198px;">
<input type="submit" name="remve_file" value="Delete"  style="width: 50px; height: 25px"><br><br>
</form>
</div>


<br><br>
<h>Please use the menu  to <span style="color:green">Modify</span> :</h>

<!--  upload List  -->
<br>
<table style="background-color:beige;width:100%">
<tr>
  <th>
   Uploaded File ....
  </th>
</tr>
  
   <tr>
   <td>
<?php
 $resource2 = opendir("uploads");
  while(($entry2 = readdir($resource2)) !== FALSE){
  echo $entry2."<br/>";
}
?>
   </td>
   </tr>
</table>

<br>
</div>


<!--  -----------------------right side---------------------- -->

<div id="rightside">

<!--  The Logo -->
<div id="logo">
<br>
<img src="images/front.bmp" width="484" height="180">

<blockquote>
<ul style="list-style-type:circle">
<li><a href="download_images.php?file=Group14.bmp">Click to Downlaod the Group Logo</a> : Group14.bmp </li>
</ul>
</blockquote>
</div>

<!--  Download Funtion -->
<br>
<h>Click a file to <span style="color:Peru">Download</span> :</h>


<!--  Download List  -->
<table style="background-color:whitesmoke;width:100%">
<tr>
  <th>
   Available File to Download ....
  </th>
</tr>
  
   <tr>
   <td>
<?php
 $resource = opendir("files");
  while(($entry = readdir($resource)) !== FALSE){
  $file_Path = 'files/'.$entry; 
 
  if (is_file($file_Path))
		{
		    	//echo $entry."<br/>";
    	//echo "$entry";
    	echo '<a href="download_files.php?file=' . $entry . '"> ' . $entry . ' </a><br/>';
    	}  	
 }

 $resource = opendir("uploads");
  while(($entry = readdir($resource)) !== FALSE){
  $file_Path = 'uploads/'.$entry; 
 
  if (is_file($file_Path))
		{
    	echo '<a href="download_uploads.php?file=' . $entry . '"> ' . $entry . ' </a><br/>';
    	}  	
 }

?>
   </td>
   </tr>
</table>

<br>
</div>



<!--  -----------------------copy right---------------------- -->

<div id="footer">
<?php
echo "<p>Copyright &copy; 2016-" . date("Y") . " Designed by Croup14</p>";
?>
</div>

</body>

</html>



