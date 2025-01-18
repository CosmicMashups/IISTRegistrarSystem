<?php
include 'server.php';
session_start();

$sql=mysqli_query($db,"SELECT * FROM reservation WHERE username = '".$_SESSION['sess_user']."'");

if(isset($_GET['delID']))
{
    $id = $_GET['delID'];

    $sql2="DELETE FROM reservation WHERE id='$id'";
    
    if (mysqli_query($db, $sql2)) 
    {  
        header('Location: reservation.php');  
    } 
  else 
    {
      echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
}
?>
<html>
<head>
<title>MY RESERVATION</title>
<link rel="stylesheet" type="text/css" href="reservations.css">
</head>
<body>
 <br><br><br><br><br><br><br>
 <center>
    <img src="myres.png" width="60%" height="30%" style="margin-left:20px; z-index:2;">
    </center>
 <br><br>
<table style=" border-bottom: 1px solid #fff;
    background-color: #fff;
    width: 100%;
    height: auto;
    opacity: 0.9;">
    <tr>
        <th>Date</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact Number</th>
        <th>Year</th>
        <th>Booknames</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
<?php while($row = mysqli_fetch_array($sql)){ ?>
    <tr>
        <td><?php echo $row['Date'];?></td>
        <td><?php echo $row['Name'];?></td>
        <td><?php echo $row['Email'];?></td>
        <td><?php echo $row['Contact_number'];?></td>
        <td><?php echo $row['Year'];?></td>
        <td><?php echo $row['Bookname'];?></td>
        <td><?php echo $row['Status'];?></td>
        <td>

        <?php $bookname = $row['Bookname'];?>

            <a href="reservation.php?delID=<?php echo $row['id']; ?>"><button  class="buttons">DELETE</button></a>

            <?php if (substr($row['Bookname'],0,3) == 'BHS'){?>
            <a href="update-reservationBHS.php?updateID=<?php echo $row['id']; ?>"><button class="buttonss">UPDATE</button></a> <?php } ?>

            <?php  if (substr($row['Bookname'],0,3) == 'SCI') {?>
            <a href="update-reservationSCI.php?updateID=<?php echo $row['id']; ?>"><button class="buttonss">UPDATE</button></a> <?php } ?>

            <?php if (substr($row['Bookname'],0,3) == 'SHS') {?>
            <a href="update-reservationSHS.php?updateID=<?php echo $row['id']; ?>"><button class="buttonss">UPDATE</button></a> <?php } ?>
        </td>
    </tr>
<?php } ?>
        
</table>
<br><br>
<a href="RESERVE1s.php" class="resmore"> RESERVE BOOKS </a>
</body>
</html>