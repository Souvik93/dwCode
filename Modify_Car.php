
<?php  
 $connect = mysqli_connect('127.0.0.1','root','root','jctechnology');  
 if(isset($_POST["insert"]))  
 { 
     
	  $id=$_POST['Car_Name'];
      
      $query ="Update vehicel_details set Pieces_Available = Pieces_Available -1   WHERE id='$id'";
     if(mysqli_query($connect, $query))  
      {  
          
      }
  
 }  
 ?>  

<?php  
 $connect = mysqli_connect('127.0.0.1','root','root','jctechnology');  
 if(isset($_POST["insert"]))  
 {

      $Fast_Name=$_POST['Fast_Name'];
      $Last_Name=$_POST['Last_Name'];
	  $Address=$_POST['Address'];
      $City=$_POST['City'];
	  $State=$_POST['State'];
      $Zip=$_POST['Zip'];
	  $Phone_No=$_POST['Phone_No'];
      $Email=$_POST['Email'];
	  $Car_Name=$_POST['Car_Name'];
	  $Rentel_or_Buy=$_POST['Rentel_or_Buy'];
	  $Price=$_POST['Price'];
	  
      $query1 = "INSERT INTO customer (Fast_Name,Last_Name,Address,City,State,Zip,Phone_No,Email,Car_Name,Rentel_or_Buy,Price) VALUES ('$Fast_Name','$Last_Name', '$Address', '$City', '$State', '$Zip', '$Phone_No', '$Email', '$Car_Name', '$Rentel_or_Buy', '$Price')";  
      if(mysqli_query($connect, $query1))  
      {  
           echo '<script>alert("Your Data Inserted Sucessfully")</script>';  
      }

 }
 ?>






<!DOCTYPE html>  
 <html>  

      <head>  
           <title>Destiny Wheels</title>  
		   
		   <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="images/ico/favicon.ico">
		
            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script> 
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		   
		   <link rel="stylesheet" type="text/css" href="css/Style4.css" />
		   <link rel="stylesheet" type="text/css" href="css/Style5.css" />
		   <link rel="stylesheet" type="text/css" href="js/Style3.css" />
		   
      </head>  
      <body  background="images/background.jpg">
	  <br>
	  <div class="container">
   
	<div class="col-lg-12 well">
	<div class="row">
	<div class="col-sm-4 form-group">
	</div>
							<div class="col-sm-4 form-group">
							
								<center>
								<label>Select 2 Wheeler Purpose</label>
	 <select id='purpose' class="form-control" >
<option value="0" selected>Rental</option>
<option value="1">Buy</option>

</select>
						</center>
							</div>
							<div class="col-sm-4 form-group">
	</div>
							</div></div></div>
<div id="Rental">
 
<div class="container">
<center>
    <h2 class="well">2 Wheeler Rental Registration Form</h2>
	</center>
	<div class="col-lg-12 well">
	<div class="row">
	<form method="post" enctype="multipart/form-data"> 
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" name="Fast_Name" placeholder="Enter First Name Here.." class="form-control" required>
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" name="Last_Name" placeholder="Enter Last Name Here.." class="form-control" required>
							</div>
						</div>					
						<div class="form-group">
							<label>Address</label>
							<textarea placeholder="Enter Address Here.." name="Address" rows="3" class="form-control" required></textarea>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>City</label>
								<input type="text" name="City" placeholder="Enter City Name Here.." class="form-control" required>
							</div>	
							<div class="col-sm-4 form-group">
								<label>State</label>
								<input type="text" name="State" placeholder="Enter State Name Here.." class="form-control" required>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Zip</label>
								<input type="text" name="Zip" placeholder="Enter Zip Code Here.." class="form-control" required>
							</div>		
						</div>				
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" name="Phone_No" placeholder="Enter Phone Number Here.." class="form-control" required>
					</div>		
					<div class="form-group">
						<label>Email Address</label>
						<input type="email" name="Email" placeholder="Enter Email Address Here.." class="form-control" required>
					</div>	
					<div class="row">
							
							<div class="col-sm-6 form-group">
								<label>2 Wheeler Model Number </label>
								<select name="Car_Name" class="form-control" required>
<?php

$conn = new mysqli('127.0.0.1', 'root', 'root', 'jctechnology') 
or die ('Cannot connect to db');

    $result = $conn->query("select 	id, Car_Name from vehicel_details");

   
   

    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['id'];
                  $name = $row['Car_Name']; 
                 echo "<option value='". $row['id']."'>".$row['Car_Name'].'</option>';
				 
				  

}

   
?> 
</select>
							</div>
							<div class="col-sm-6 form-group">
								<label>2 Wheeler Rental Price</label>
								<input type="text" name="Price" placeholder="2 Wheeler Rental Price Here.." class="form-control" required>
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Rental Start Date</label>
								<input type="Date" name="Rental_Start_Date"  class="form-control" required>
							</div>
							<div class="col-sm-6 form-group">
								<label>Rental End Date</label>
								<input type="Date" name="Rental_End_Date"  class="form-control" required>
							</div>
						</div>	
					
					<input value="Rent" type="hidden" name="Rentel_or_Buy">
					<div class="col-sm-4 form-group">
	</div>
							<div class="col-sm-4 form-group">
								<center>
	<input type="submit" name="insert" id="insert" value="Submit" class="btn btn-lg btn-info"/>
						</center>
							</div>
							<div class="col-sm-4 form-group">
	</div>
					
					 					
					</div>
					
					
					
				</form> 
				</div>
	</div>
	</div>
</div>

<div id="Buy" style="display: none"> 
<div class="container">
<center>
    <h2 class="well">2 Wheeler Buying Registration Form</h2>
	</center>
	<div class="col-lg-12 well">
	<div class="row">
	<form method="post" enctype="multipart/form-data"> 
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" name="Fast_Name" placeholder="Enter First Name Here.." class="form-control" required>
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" name="Last_Name" placeholder="Enter Last Name Here.." class="form-control" required>
							</div>
						</div>					
						<div class="form-group">
							<label>Address</label>
							<textarea placeholder="Enter Address Here.." name="Address" rows="3" class="form-control" required></textarea>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>City</label>
								<input type="text" name="City" placeholder="Enter City Name Here.." class="form-control" required>
							</div>	
							<div class="col-sm-4 form-group">
								<label>State</label>
								<input type="text" name="State" placeholder="Enter State Name Here.." class="form-control" required>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Zip</label>
								<input type="text" name="Zip" placeholder="Enter Zip Code Here.." class="form-control" required>
							</div>		
						</div>				
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" name="Phone_No" placeholder="Enter Phone Number Here.." class="form-control" required>
					</div>		
					<div class="form-group">
						<label>Email Address</label>
						<input type="email" name="Email" placeholder="Enter Email Address Here.." class="form-control" required>
					</div>	
					<div class="row">
							
							<div class="col-sm-4 form-group">
								<label>2 Wheeler Model Number</label>
								<select name="Car_Name" class="form-control" required>
<?php

$conn = new mysqli('127.0.0.1', 'root', 'root', 'jctechnology') 
or die ('Cannot connect to db');

    $result = $conn->query("select 	id, Car_Name from vehicel_details");

   
   

    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['id'];
                  $name = $row['Car_Name']; 
                 echo "<option value='". $row['id']."'>".$row['Car_Name'].'</option>';
				 
				  

}

   
?> 
</select>
							</div>
							<div class="col-sm-4 form-group">
								<label>2 Wheeler Buying Price</label>
								<input type="text" name="Price" placeholder="2 Wheeler Buying Price Here.." class="form-control" required>
							</div>
							
							<div class="col-sm-4 form-group">
								<label>Buying Date</label>
								<input type="Date" name="Buying_Date"  class="form-control" required>
							</div>
							
						</div>
					
					<input value="Buy" type="hidden" name="Rentel_or_Buy">
					<div class="col-sm-4 form-group">
	</div>
							<div class="col-sm-4 form-group">
								<center>
	<input type="submit" name="insert" id="insert" value="Submit" class="btn btn-lg btn-info"/>
						</center>
							</div>
							<div class="col-sm-4 form-group">
	</div>
					
					 					
					</div>
					
					
					
				</form>
<br>
			
				</div>
	</div>
	</div>
</div>
<center>	<a class="btn btn-theme btn-lg" style="color:black;" href="http://localhost:8080/dw/AdminHome.html">Admin Home</a></center>	
</body>  
</html> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script>
$(document).ready(function(){
    $('#purpose').on('change', function() {
      if ( this.value == '0')
      {
           $("#Buy").hide();
        $("#Rental").show();
      }
       if ( this.value == '1')
      {
          $("#Rental").hide();
        $("#Buy").show();
      }
      
    });
});
</script>


 