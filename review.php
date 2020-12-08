<?php
if(isset($_POST['sub'])){
echo $m_id = $_POST['movie_id'];
echo $user_id=$_POST['user_id'];
$comment=$_POST['comment'];
$con= mysqli_connect("localhost","root","","star") or die ("cannot connect to database");
$insert = "INSERT INTO review VALUES(NULL,'$user_id','$m_id','$comment')";

$run_insert=mysqli_query($con,$insert);
		if ($run_insert)
{
	echo "<script>alert('team added!')</script>";
	echo "<script>window.open('addteam.php','_self')</script>";
}
else 
{
	echo "<script>alert('sorry data cannot inserted')</script>";
	exit();
}
}
?>