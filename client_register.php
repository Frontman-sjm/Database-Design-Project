<?php
$name=$_POST['name'];
$address=$_POST['address'];
$birth=$_POST['birth'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$job=$_POST['job'];
$cnum=$_POST['cnum'];

$conn=mysqli_connect("", "", "", ""); // IP, ID, Password, DB
$check="SELECT * from client WHERE client.client_id='$cnum'";
$result=$conn->query($check);

if($result->num_rows==1)
{
  echo "<script>alert('이미 등록된 고객입니다.'); history.back(); </script>";
  exit();
}

$signup=mysqli_query($conn, "INSERT INTO client VALUES('$name', '$address', '$birth', '$email', '$phone', '$job', '$cnum')");
if($signup){
  echo "<script>alert('등록에 성공했습니다.'); </script>";
  header('Refresh: 0; URL = mjubank.php');
}
?>