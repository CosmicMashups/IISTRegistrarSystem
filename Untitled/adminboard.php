<html>
    <head>
        <title>DATA</title>
        <link rel="stylesheet" type="text/css" href="dataass.css">
    </head>
    <body>
    
        <br><br><br><br><br><br><br><br><br><br>
       
        
    <table class="databs" style=" border-bottom: 1px solid #fff;
    background-color: #fff;
    width: 100%;
    height: auto;
    opacity: 0.9;">
    <tr>
    <th>Date of Reservation</th>
    <th>Name</th>
        <th>Email Address</th>
        <th>Contact number</th>
        <th>Year level</th>
        <th>Books</th>
        <th>Status</th>
        <th>Delete</th>
        <th>Update</th>
    </tr> 
       
 <?php
        
        $con=mysqli_connect('localhost','root','');
        
        mysqli_select_db($con, 'registration');
        
        $sql = "SELECT * FROM reservation";
        
        $records = mysqli_query($con, $sql);
        
        while ($row =mysqli_fetch_array($records))
            {
    
    
    echo "<tr><form action=update.php method=post>";
            
     echo "<td>".$row['Date']."</td>";
    
    echo "<td>".$row['Name']."</td>";
        
    echo "<td>".$row['Email']."</td>";
        
    echo "<td>".$row['Contact_number']."</td>";
    
    echo "<td>".$row['Year']."</td>";
    
    echo "<td>".$row['Bookname']."</td>";
            
     echo "<td><select class=inst name=stat value='".$row['Status']."'><option>PENDING</option><option>RESERVED</option></td>";
            
    echo "<input type=hidden name=id value='".$row['id']."'>";
        
    echo "<td><a href=delete.php?id=".$row['id'].">DELETE</a></td>"; 
            
    echo "<td><input type=submit class=sub value=UPDATE>";
   echo "</form></tr>";
   
}
    ?>
         
        
        
        
        </table> 

        <br><br><br><br>
  
 <center>   
<footer class="footer">
     &copy;NINESTEIN-2019
</footer>
</center>
    </body>
    
</html>