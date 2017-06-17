<!DOCTYPE html>
<html>
<head>




<?php
$msg="";

//$con=mysqli_connect('182.50.133.82:3306','jct','jct@123');

$con=mysqli_connect('127.0.0.1','root','root');

if(!$con)
{
	echo 'Not Connect to the Server';
}


if(!mysqli_select_db($con,'jctechnology'))
{

	 echo 'DataBase Not Connected';
 }


 $sql1="Update `vehicel_details` set Pieces_Available = Pieces_Available -1   WHERE id='$_GET[id]'";
 
 
 if(!@mysqli_query($con,$sql1))
	 
	 {
	 
		 echo 'Not Inserted';
	 }
	 else
	 
	 {
		 
		 header("refresh:0 url=Modify_Car1.php");
	 }

?>
	

</body>
</html>