<?php
session_start();
include 'server.php';


if (isset($_GET['updateID']))
{
    $id = $_GET['updateID'];
}

$sql_update = mysqli_query($db,"SELECT * FROM reservation WHERE id = '$id' ");



?>
<hmtl>
<head>
<link rel="stylesheet" type="text/css" href="RESERVEBUS.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
 
     <br><br><br><br>
    <center>
    <img src="resforms.png" width="60%" height="30%" style="margin-left:20px; z-index:2;">
    </center>
    
    <form action="done.php" method="post" enctype="multipart/form-data" onsubmit="return submitUserForm();">
 <br><br> 
       
 
   <div class="info">
   <?php while($row = mysqli_fetch_array($sql_update)): ?>
        <div class="input-group">
  		<p class="infos">Date&nbsp;of&nbsp;Reservation</p><br><br> 
  		<input type="date" name="date" required="required" value="<?php echo $row['Date']; ?>" placeholder="(MM/DD/YY)">
  	</div><br>
         <div class="input-group">
  		<p class="infos">Full&nbsp;Name</p><br><br> 
  		<input type="text" name="name" required="required" value="<?php echo $row['Name']; ?>" placeholder="Full Name">
  	</div><br>
  	<div class="input-group">
  		<p  class="infos">Email&nbsp;Address</p><br><br>
  		<input type="email" name="email" required="required" value="<?php echo $row['Email']; ?>" placeholder="Email Address">
  	</div><br>
    <div class="input-group">
  		<p  class="infos">Contact&nbsp;number</p><br><br>
  		<input name="contact" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number"
    maxlength = "11" required="required" value="<?php echo $row['Contact_number']; ?>" placeholder="Contact number"> 
       </div><br>
       <p  class="infos">Year&nbsp;level</p><br><br>
  	<select name="year" value="<?php echo $row['Year']; ?>" required>
        
        <option  style="font-family: 'Bahnschrift SemiBold';font-size:16px;">Grade 7</option>
        <option  style="font-family: 'Bahnschrift SemiBold';font-size:16px;">Grade 8</option>
        <option  style="font-family: 'Bahnschrift SemiBold';font-size:16px;">Grade 9</option>
        <option  style="font-family: 'Bahnschrift SemiBold'; font-size:16px;">Grade 10</option>
    </select><br><br>
        <p  class="infos">Status</p><br><br>
       <select name="stat" required>
        <option  style="font-family: 'Bahnschrift SemiBold';font-size:16px;">PENDING</option>
    </select>
    <div class="input-group">
    <input type="hidden" name="username" required="required" value="<?php echo $_SESSION['sess_user'];?>" readonly>
  	</div>
      <div class="input-group">
      <input type="hidden" name="id" required="required" value="<?php echo $id; ?>" readonly><br>
    </div>
<?php endwhile; ?>    
  	</div>

 <br><br><br><br>
 <div class="modals">
     
           <p id="myBtn" class="btn">RESERVE BOOKS</p>
        </div>
        

     <!-- 1ST MODAL GRADE 7 -->    
       
   <br><Br> 
<center>

<div id="myModal" class="modal">

  <div class="modal-content">
     
    <span class="close">&times;</span>
    <div>  
<table class="tables">  

   <tr  style="font-size:25px;">  
      <td colspan="12" align="center" style=" border: 1px solid #000; font-size:30px;">SCIENCE HIGH SCHOOL</td>
   </tr>  
   <tr>  
       <td style=" border-left: 1px solid #000;"><input type="checkbox" name="book[]" class="single-checkbox" value="SCI-Research"></td>  
      <td style="font-family: Century Gothic;">RESEARCH</td>  
       <td style=" border-left: 1px solid #000;"><input type="checkbox" name="book[]" class="single-checkbox" value="SCI-Math"></td> 
       <td style="font-family: Century Gothic; border-right: 1px solid #000;">MATHEMATICS</td>
    </tr>
    <tr>
        <td style=" border-left: 1px solid #000;"><input type="checkbox" name="book[]" class="single-checkbox" value="SCI-Bio" ></td> 
       <td style="font-family: Century Gothic;">BIOLOGY</td>
       <td style=" border-left: 1px solid #000;"><input type="checkbox" name="book[]" class="single-checkbox"  value="SCI-JOURN"></td>
      <td style="font-family: Century Gothic;border-right: 1px solid #000;">JOURNALISM</td> 
    </tr>
    <tr>
        <td style=" border-left: 1px solid #000;"><input type="checkbox" name="book[]" class="single-checkbox" value="SCI-ENG"></td>  
      <td style="font-family: Century Gothic;">ENGLISH</td>  
       <td style=" border-left: 1px solid #000;"><input type="checkbox" name="book[]" class="single-checkbox" value="SCI-VAL"></td> 
       <td style="font-family: Century Gothic;border-right: 1px solid #000;">VALUES</td>
   </tr>  
     <tr>  
      
        <td style=" border-left: 1px solid #000;"><input type="checkbox" name="book[]" class="single-checkbox" value="SCI-SCIENCE" ></td> 
       <td style="font-family: Century Gothic;">SCIENCE</td>
       <td style=" border-left: 1px solid #000;"><input type="checkbox" name="book[]" class="single-checkbox"  value="SCI-FIL"></td>
      <td style="font-family: Century Gothic;border-right: 1px solid #000;">FILIPINO</td>  
    </tr>
    <tr>
       <td   style=" border-left: 1px solid #000;"><input type="checkbox" name="book[]" class="single-checkbox" value="SCI-MAPEH"></td>  
      <td style="font-family: Century Gothic;">MAPEH</td>  
       <td style=" border-left: 1px solid #000;"><input type="checkbox" name="book[]" class="single-checkbox" value="SCI-ANIM"></td> 
       <td style="font-family: Century Gothic;border-right: 1px solid #000;">ANIMATION</td>
    </tr>
    <tr>
        <td style=" border-left: 1px solid #000;"><input type="checkbox" name="book[]" class="single-checkbox" value="SCI-SOC" ></td> 
       <td style="font-family: Century Gothic;">SOCIAL</td>
       <td style=" border-left: 1px solid #000;"><input type="checkbox" name="book[]" class="single-checkbox"  value="SCI-COMP"></td>
      <td style="font-family: Century Gothic;border-right: 1px solid #000;">COMPUTER</td> 
      
   </tr> 
       <tr>
        <td style=" border-left: 1px solid #000;"><input type="checkbox" name="book[]" class="single-checkbox" value="SCI-Bio" ></td> 
       <td style="font-family: Century Gothic;">BIOLOGY</td>
       <td style=" border-left: 1px solid #000;"><input type="checkbox" name="book[]" class="single-checkbox"  value="SCI-Chem"></td>
      <td style="font-family: Century Gothic;border-right: 1px solid #000;">CHEMISTRY</td> 
      
   </tr> 
      <tr>
        <td style=" border-left: 1px solid #000;"><input type="checkbox" name="book[]" class="single-checkbox" value="SCI-P6" ></td> 
       <td style="font-family: Century Gothic;">PHYSICS</td>
       <td style=" border-left: 1px solid #000;"><input type="checkbox" name="book[]" class="single-checkbox"  value="SCI-TLE"></td>
      <td style="font-family: Century Gothic;border-right: 1px solid #000;">ALGEBRA</td> 
      
   </tr> 
      <tr>
        <td style=" border-left: 1px solid #000;"><input type="checkbox" name="book[]" class="single-checkbox" value="SCI-envi" ></td> 
       <td style="font-family: Century Gothic;">ENVIRONMENTAL SCIENCE</td>
       <td style=" border-left: 1px solid #000;"><input type="checkbox" name="book[]" class="single-checkbox"  value="SCI-adchem"></td>
      <td style="font-family: Century Gothic;border-right: 1px solid #000;">ADVANCED CHEMISTRY</td> 
      
   </tr> 
   
  
   
   
</table>  
  
</div> 
  </div>
 
        </div>
        </center>
 
        <script src="https://code.jquery.com/jquery-3.3.1.js"> </script>   
        
        <script type="text/javascript">
            $(document).ready(function() {
                 $("input[name='book[]']").change(function() {
                     var maxAllowed = 14;
                        var cnt = $("input[name='book[]']:checked").length;
                     if (cnt > maxAllowed) {
                         $ (this).prop("checked", "");
                          alert('You have exceeded the maximum number of books you can reserve.')
                     }
                 });
            });
                          
        </script>
        <br><br>
        <div class="g-recaptcha" data-sitekey="6LfqV5oUAAAAALlcn3WTKxjnKBGFEhIoK-kkLFwE" data-callback="verifyCaptcha"></div><br><Br><Br><Br><Br>
    <div id="g-recaptcha-error"></div>

<br><br><br><br><br><br><br><br>
   <table>
<tr>
    <th><button type="submit" name="sub" class="submit" onclick="return val();">SUBMIT</button></th>
    <th><a href="index.php" class="submits"> CANCEL </a></th>
</tr>
</table>
        </Br></Br></Br></Br></Br>   
    </form> 
            
        <script type="text/javascript">

function val(){
    var book = document.getElementsByName('book[]');
    var hasChecked = false;
    for (var i = 0; i < book.length; i++)
        {
            if (book[i].checked)
                {
                    hasChecked = true;
                    break;
                }
        }
    if (hasChecked == false)
        {
            alert("Please select the books that you want to reserve.");
            return false;
        }
    return true;
}



</script>
    
    <script>
function submitUserForm() {
    var response = grecaptcha.getResponse();
    if(response.length == 0) {
        document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
        return false;
    }
    return true;
}
 
function verifyCaptcha() {
    document.getElementById('g-recaptcha-error').innerHTML = '';
}
</script>

        
       <script>

var modal = document.getElementById('myModal');


var btn = document.getElementById("myBtn");


var span = document.getElementsByClassName("close")[0];


btn.onclick = function() {
  modal.style.display = "block";
}


span.onclick = function() {
  modal.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
