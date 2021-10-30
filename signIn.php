<?php
    session_start();
    include 'config.php';
    $count=0;
             
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query="SELECT * from register where username='$username' AND password='$password'";
    $data=mysqli_query($conn,$query);
    $result= mysqli_fetch_assoc($data);
        
    $count= mysqli_num_rows($data);
    if($count==0)
    {
        echo"
        <script>alert('Invalid id or password')</script>
        <script>window.open('index.php','_Self');</script>
        ";
    }
    else
    {	
        $id=$username;
        $_SESSION['user']=$id;
        
        header("Location: welcome.php");
    }
?>