<?php  
 $connect = mysqli_connect('127.0.0.1','root','root','jctechnology');  
 if(isset($_POST["insert"]))  
 { 
     
	  $id=$_POST['wheeler_name'];
      
      $query ="Update wheelers_details set pieces_available = pieces_available -1   WHERE id='$id'";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Your Data Inserted Sucessfully")</script>';  
      }  
 }  
 ?>  




<html>
    <head>
    <title>DW</title>
    </head>
    <body >
       <form method="post" enctype="multipart/form-data"> 
<select name="wheeler_name">
<?php

$conn = new mysqli('127.0.0.1', 'root', 'root', 'jctechnology') 
or die ('Cannot connect to db');

    $result = $conn->query("select id,wheeler_name from wheelers_details");

   
   

    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['id'];
                  $name = $row['wheeler_name']; 
                 echo "<option value='". $row['id']."'>".$row['wheeler_name'].'</option>';
				 
				  

}

   
?> 
</select>

<input type="submit" name="insert" id="insert" value="Insert"/> 
</form>
</body>
</html>