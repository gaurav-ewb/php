
<body>

<?php require('connection.php');
require('session.php');
?>
<?php $email=$_SESSION["email"];
?>
<?php $query="select * from user where email='$email'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
?>

<div class="container">
    <div class="row login_box">
        <div class="col-md-12 col-xs-12" align="center">
            
          <label>first name:</label>  <?php echo $row["fname"];?></br>
           <label>Last name:</label> <?php echo $row["lname"];?><br>
                
            <label>Email:</label><?php echo $row["email"];?> <br>
            <label>Phone:</label><?php echo $row["phone"];?><br>
             <label>address:</label> <?php echo $row["address"];?><br>

                            <a href="logout.php" class="btn btn-lg btn-primary btn-block btn-signin" name="btn" type="submit">logout</button>
                        <!-- Split button -->
                        </div>
                    </div>
                </div>
         
       