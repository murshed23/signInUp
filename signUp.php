<?php
error_reporting(E_ALL^E_NOTICE);
include('config.php');

$username=$_POST['username'];
$password=$_POST['password'];

if(mysqli_connect_error())
{	die('Connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{	
    $select="select username from register where username=? limit 1";
	$query="insert into register(username,password) values(?,?)";
	$stmt=$conn->prepare($select);
	$stmt->bind_param("s",$username);
	$stmt->execute();
	$stmt->bind_result($username);
	$stmt->store_result();
	$rnum=$stmt->num_rows();
	
	if($rnum==0)
	{	$stmt->close();
		$stmt=$conn->prepare($query);
		$stmt->bind_param("ss",$username,$password);
		$stmt->execute();
		header("Location: welcome.php");
	}
	else
	{	echo"
			<script>alert('Someone already registered using this username')</script>
			<script>window.location='index.php'</script>
			";	
	}
	$stmt->close();
	$conn->close();
}
?>