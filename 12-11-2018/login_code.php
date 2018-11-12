<?php
	require('connection.php');
    session_start();
    ?>
    <?php
    if(isset($_POST['email'], $_POST['password'])){
        $email =$_POST['email'];
        $pws = $_POST['password'];
        if(!empty($email) && !empty($pws)){
            $pws = ($pws);
            $query= mysqli_query($con,"SELECT * FROM user WHERE email = '$email' AND password = '$pws'") or die(mysqli_error());
           $row = mysqli_num_rows($query);
            $data = mysqli_fetch_array($query);
            if($row == 0){
                echo "Invalid pws or email combination";
            } else {
                $_SESSION['id'] = $data['id'];
                $_SESSION['email'] = $data['email'];
                //header("location:dashboard.php");
            }
            
        } else {
            echo("Please All fields are required");
        }
        header('Location: dashboard.php');
    }
    ?>