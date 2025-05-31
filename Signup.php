<?php
     $username = $_POST['uname'];
     $email = $_POST['email'];
     $password = $_POST['pw'];
     $membership = 'free';


     //Database Connection

     $conn = mysqli_connect('localhost', 'root', '', 'Flavory');
     if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
     } else {
        $stmt = $conn->prepare("insert into Register(Uname, UEmail, Password, Membership) values (?,?,?,?)");
        $stmt->bind_param("ssss", $username, $email, $password, $membership);
        $stmt->execute();
        echo "<script>alert('Successfully registered'); window.location.href='Signup.html';</script>";
        $stmt->close();
        $conn->close();
     }

?>


