<?php
$con=mysqli_connect('localhost','root','','company');
//mysqli_select_db($con,'id8930489_spark');
$q="select name from user";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
       <link rel="stylesheet" href="intern/css/style.css">
</head>



<body>
   



<form  action="userdetail.php" method="post">
    <h1> Select User from list</h1>
    <table class="flat-table flat-table-1">


    
    <?php 
session_start();
$con=mysqli_connect('localhost','root','','company');

$q="select * from user ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
//echo $_SESSION['name'];

?>
<style>
  button{
    background-color:blue;
  }
  body
  {
    text-align:center;
  }
    body{
       background-image:url("data:image/jpeg;base64,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");
      
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  
  
  }
  </style>




	<thead>
		<th>Name</th>
		<th>Email</th>
		<th>Credit</th>
		
	</thead>
	<tbody>
		<tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

		</tr>
		<tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        
	</tbody>
</table>


    <div class="view">

<table cellspacing=50px style="position: relative; left: 40%;">
  <tr>
      <td> <h2>Select User</h2></td>
   
<td>

<?php
$con=mysqli_connect('localhost','root','','company');
//mysqli_select_db($con,'id8930489_spark');
$q="select name from user";
$result=mysqli_query($con,$q);
?>


  <select name="name" onchange="this.form.submit()">
      <option>--Select--</option>
   <?php  
     while($row = $result->fetch_assoc()) { ?>

      <option value="<?php echo $row['name']; ?>"> <?php echo $row["name"]; ?></option>

<?php }
  ?>
  
        </select>
      </td>
    </tr>
       <tr>
           <td></td>
           <!--<td><input type="submit" value="submit"></td>-->
    </tr>
        </table>
</div>
    </form> 
</body>
</html>