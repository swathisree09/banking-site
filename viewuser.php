<?php
session_start();
$con=mysqli_connect('localhost','root','','company');
//mysqli_select_db($con,'id8930489_spark');
$name1=$_SESSION['name'];
$q="select name from user where not name='$name1'";
$result=mysqli_query($con,$q);
//$var=$_POST['name'];

//echo $_SESSION['name'];
?>


<html>
<head>
   <title>
   viewUser 
    </title>
    <link rel="stylesheet" href="intern/css/style.css">
    </head>
    <body>
      <style>
  button{
    background-color:blue;
  }
  body
  {
    text-align:center;
  }
    body{
       background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgW1n8tzxD7xEuNwNLjJ5pG-o_PPrXW99toA&usqp=CAU");
      
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  
  
  }
  </style>
    <div class="view">
        <h1>Choose name for credit transfer</h1>
        <form action="transfer.php" method="post" style="position: relative; left: 40%;">
       <table>
           <th><h2>Name</h2></th>
           <?php  
     while($row = $result->fetch_assoc()) { ?>

        
   <tr>
       <td > <input type="radio" name="transfer" value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></td>
      
   </tr>
<?php }
  ?>
       <tr>
          
           <td><input type="submit" value="credit"></td>
           </tr>
        </table>
        </form>
        </div>
    </body>
</html>