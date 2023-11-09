//
<?php 
  include("dbconn.php");
  
   $first_name = $_POST['name'];
  
   $sql = "SELECT * FROM patients_table1 WHERE first_name LIKE '$first_name%'";  
   $query = mysqli_query($conn,$sql);
   $data='';
   while($row = mysqli_fetch_assoc($query))
   {
       $data .=  "<tr><td>".$row['id']."</td><td>".$row['first_name']."</td><td>".$row['active_gmail']."</td></tr>";
   }
    echo $data;
 ?>