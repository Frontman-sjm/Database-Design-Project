<?php

function createAccountId($length = 10) {
  $characters = '0123456789';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}


$anum=createAccountId();
$atype=$_POST['atype'];
$card=$_POST['card'];
$odate=$_POST['odate'];
$cnum=$_POST['cnum'];

$conn=mysqli_connect("", "", "", ""); // IP, ID, Password, DB
$check="SELECT * from account WHERE account.account_id='$anum'";
$result=$conn->query($check);

while($result->num_rows==1)
{
  $anum=createAccountId();
}


$check="SELECT * from client WHERE client.client_id='$cnum'";
$result=$conn->query($check);

if($result->num_rows==0)
{
  echo "<script>alert('고객이 아닙니다.'); history.back(); </script>";
  exit();
}

$information="SELECT * FROM client WHERE client.client_id='$cnum'";
$result=$conn->query($information);
$row = $result->fetch_assoc();

$name=$row['name'];
$phone=$row['phone'];
$email=$row['email'];

$register=mysqli_query($conn, "INSERT INTO account VALUES('$anum', '$atype', 0, '$card', '$odate', '$name', '$phone', '$email', '$cnum')");
if($register){
  echo "<script>alert('계좌 개설에 성공했습니다.'); </script>";
  header('Refresh: 0; URL = mjubank.php');
}
?>