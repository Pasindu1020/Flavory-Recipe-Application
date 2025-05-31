<?php
   
     $useremail = $_POST['logemail'];
     $userpassword = $_POST['logpw'];

     //Database Connection

     $conn = mysqli_connect('localhost', 'root', '', 'Flavory');
     if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
     } else {
        $useremail  = mysqli_real_escape_string($conn, $useremail );
        $userpassword = mysqli_real_escape_string($conn, $userpassword);

         $sql = "SELECT * FROM Register WHERE UEmail='$useremail' AND Password='$userpassword'";
         $result = $conn->query($sql);



         

    if ($result->num_rows > 0) {
        $_SESSION['logemail'] = $useremail;
        header("Location: HomeLogged.html");
        exit;
    } else {
        echo "<script>alert('Invalid username or password'); window.location.href='HomeLogged.html';</script>";
    }

        $conn->close();
     }

?>


