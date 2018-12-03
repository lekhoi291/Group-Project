<?php
session_start();
// header('location:login.php');
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$name = "";
$pass = "";
$email = "";
$phone = "";

if (isset($_POST['register'])){
	$name = $_POST['user'];
    $pass = $_POST ['password'];
    $email = $_POST['mail'];
	$phone = $_POST['phone'];

	$s = " SELECT * FROM usertable WHERE name = '$name'";

	$result = mysqli_query($con, $s) or die(mysqli_error($con));

	$num = mysqli_num_rows($result);

	$reg = "INSERT INTO usertable(name, password, email, phone ) 
	values ('$name', '$pass','$email', '$phone')";
	$result = mysqli_query($con, $reg) or die(mysqli_error($con));
	echo 'Saved!';
	header('location:login.php');
}

// $name = $_POST['user'];
// $pass = $_POST ['password'];
// $email = $_POST['mail'];
// $phone = $_POST['phone'];

// $s = " SELECT * FROM usertable WHERE name = '$name'";

// $result = mysqli_query($con, $s);

// $num = mysqli_num_rows($result);

// if ($num >= 1){
// 	$message="User already taken";
// 	echo "<script type='text/javascript'> alert('$message');
// 	window.location.replace(\"login.php\");
// 	</script>";
// }else {
// 	$reg = "INSERT INTO usertable(name, password, email, phone ) values ('$name', '$pass','$email', '$phone')";
// 	mysqli_query($con, $reg);
// 	echo"Registration successfull";
// }
?>

<!-- if ($result = mysqli_query($con, $s)){
	if(mysqli_num_rows($result)==1){
		$message="User already taken";
		echo "<script type='text/javascript'> alert('$message');</script>";
}else {
	$reg = "INSERT INTO usertable(name, password, email, phone ) values ('$name', '$pass','$email', '$phone')";/*, '$email','$phone'*/
	mysqli_query($con, $reg);
	echo"Registration successfull";
}
} -->