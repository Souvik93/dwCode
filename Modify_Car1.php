
 <!DOCTYPE html>  
 <html >  
      <head>  
           <title>Destiny Wheels</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		   
		   <link rel="stylesheet" type="text/css" href="css/Style4.css" />
		   <link rel="stylesheet" type="text/css" href="js/Style3.css" />
      </head>  
      <body background="images/background.jpg" >
<br><br>

<div class="container">
		<div class="row">
							<div class="col-lg-6">
							
	<br><br>
								<h2>Car Modify Details</h2>				


<table class='table table-hover'>
  <tr>
	   <th align="middle"><h4>2 Wheeler Name</h4></th>
	   <th align="middle"><h4>Pieces Available</h4></th>
    <th align="middle"><h4>Update</h4></th>
	  
  </tr>
 <?php




//$con=mysqli_connect('182.50.133.82:3306','jct','jct@123');

$con=mysqli_connect('127.0.0.1','root','root');

if(!$con)
{
	echo 'Not Connect to the Server';
}

 if(!@mysqli_select_db($con,'jctechnology'))
 {

	 echo 'DataBase Not Connected';
 }
 
 $sql="SELECT * FROM `tbl_images`";
 
 $records=mysqli_query($con,$sql);
 
 while($row = mysqli_fetch_array($records))
 {
	 echo "<tr>";
	 
	echo "<td>".$row['Car_Name']."</td>";
	echo "<td>".$row['Pieces_Available']."</td>";
	 echo "<td><a href=Update_Car.php?id=".$row['id'].">Update</a></td>";
	 //session_destroy();
	 
	 
 }

 
 ?>
 
</table>

</div>
</div>
</div>
</body>  
 </html>  