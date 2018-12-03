<?php 
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'userregistration');

if (isset($_POST['user'])){
$name = $_POST['user'];

$c = " SELECT * FROM usertable WHERE name = '$name'";

$check = mysqli_query($con, $c);
$check_num_rows = mysqli_num_rows($check);

if ($name==NULL)
echo "";
else if(strlen ($name)<=3)
echo "<p style='color:red;'>Too Short &#10008;</p>";
else{
    if ($check_num_rows==0)
    echo "";
    else if ($check_num_rows==1)
    echo "<p style='color:red;'>Username has already been taken &#10008;</p>";
}
}
?>