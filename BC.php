<?php  
 $connect = mysqli_connect('127.0.0.1','root','root','jctechnology');  
 if(isset($_POST["insert"]))  
 { 
     
	  $id=$_POST['Car_Name'];
      
      $query ="Update vehicel_details set Pieces_Available = Pieces_Available -1   WHERE id='$id'";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Your Data Inserted Sucessfully")</script>';  
      }  
 }  
 ?>  




<html>
    <head>
    <title>Dynamic Drop Down List</title>
    </head>
    <body >
       <form method="post" enctype="multipart/form-data"> 
<select name="Car_Name">
<?php

$conn = new mysqli('127.0.0.1', 'root', 'root', 'jctechnology') 
or die ('Cannot connect to db');

    $result = $conn->query("select 	id, Car_Name from 	vehicel_details");

   
   

    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['id'];
                  $name = $row['Car_Name']; 
                 echo "<option value='". $row['id']."'>".$row['Car_Name'].'</option>';
				 
				  

}

   
?> 
</select>

<input type="submit" name="insert" id="insert" value="Insert"/> 
</form>
</body>
</html>