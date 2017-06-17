<?php  
 $connect = mysqli_connect('127.0.0.1','root','root','jctechnology');  
 if(isset($_POST["insert"]))  
 { 
      $Car_Type=$_POST['Vehicle_Type'];
      $Car_Name=$_POST['Car_Name'];
	  $Manufacture_Name=$_POST['Manufacture_Name'];
      $Model_No=$_POST['Model_No'];
	  $Available_Purchase=$_POST['Available_Purchase'];
      $Available_Hire=$_POST['Available_Hire'];
	  $Pieces_Available=$_POST['Pieces_Available'];
      $Price_Buying=$_POST['Price_Buying'];
	  $Price_Hireing=$_POST['Price_Hireing'];
	  $Discription=$_POST['Discription'];
     
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO vehicel_details (Car_image,Car_Type,Car_Name,Manufacture_Name,Model_No,Available_Purchase,Available_Hire,Pieces_Available,Price_Buying,Price_Hireing,Discription) VALUES ('$file','$Car_Type', '$Car_Name', '$Manufacture_Name', '$Model_No', '$Available_Purchase', '$Available_Hire', '$Pieces_Available', '$Price_Buying', '$Price_Hireing', '$Discription')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Your Data Inserted Sucessfully")</script>';  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Destiny Wheels</title>  
		     <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		   
		    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="images/ico/favicon.ico">
		   
		   <link rel="stylesheet" type="text/css" href="css/Style4.css" />
		   <link rel="stylesheet" type="text/css" href="js/Style3.css" />
      </head>  
      <body>  
           <div class="row">
    <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading" style="color:black;"><center><b> Enter Vehicle Details Here</center>
			</div>
			<div class="panel-body">
				<form method="post" enctype="multipart/form-data"> 
				<div class="form-group">
						<label for="gender">2 Wheeler Type</label>
						<select name="Vehicle_Type" id="gender" class="form-control">
							<option selected>Scooty</option>
							<option>Motorcycle</option>
							
						</select>
						<span id="error_gender" class="text-danger"></span>
					</div>
				
					<div class="form-group">
						<label for="myName">Vehicle Name *</label>
						<input id="myName" name="Car_Name" class="form-control" type="text" data-validation="required">
						<span id="error_name" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="lastname">Manufacture Name*</label>
						<input id="lastname" name="Manufacture_Name" class="form-control" type="text" data-validation="required">
						<span id="error_lastname" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="lastname">Model No*</label>
						<input id="lastname" name="Model_No" class="form-control" type="text" data-validation="required">
						<span id="error_lastname" class="text-danger"></span>
					</div>
					
					
					<div class="form-group">
						<label for="gender">Available For Purchase</label>
						<select name="Available_Purchase" id="gender" class="form-control">
							<option selected>Yes</option>
							<option>No</option>
							
						</select>
						<span id="error_gender" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="gender">Available For Hire</label>
						<select name="Available_Hire" id="gender" class="form-control">
							<option selected>Yes</option>
							<option>No</option>
							
						</select>
						<span id="error_gender" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="lastname">NO of Pieces Available for Hire*</label>
						<input id="lastname" name="Pieces_Available" class="form-control" type="text" data-validation="required">
						<span id="error_lastname" class="text-danger"></span>
					</div>
					
					<div class="form-group">
						<label for="lastname">Price For Buying*</label>
						<input id="lastname" name="Price_Buying" class="form-control" type="text" data-validation="required">
						<span id="error_lastname" class="text-danger"></span>
					</div>
					
					<div class="form-group">
						<label for="lastname">Price For Hireing*</label>
						<input id="lastname" name="Price_Hireing" class="form-control" type="text" data-validation="required">
						<span id="error_lastname" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="disc">Discription</label>
						<textarea class="form-control" name="Discription" rows="3"></textarea>
					</div>
					<div class="form-group">
					<label for="disc">Choose 2 Wheeler Image </label>
					<input type="file" name="image" id="image" />  
					</div>
					
			     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
				</form>

			</div>
		</div>
	</div>
</div>
 <!--               <br />  
                <br />  
                <table class="table table-bordered">  
                     <tr>  
                     <th align="middle"><h4>Image</h4></th>  
                       
					 <th align="middle"><h4>CarName</h4></th>
                     <th align="middle"><h4>Details</h4></th>
	                </tr>
                <?php  
                $query = "SELECT * FROM vehicel_details ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
			         echo "<tr>";
                     echo '  
                            
                               "<td>"  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                               "</td>" 

                               						   
                         
                     '; 

                     echo "<td>".$row['CarName']."</td>"; 
	                 echo "<td>".$row['CarDetails']."</td>";						 
                }  
                ?>  
                </table> -->  
				<br><br><br>
			<center>	<a class="btn btn-theme btn-lg" href="http://localhost:8080/dw/AdminLogin.html">Admin Login</a></center>
           </div> 
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  