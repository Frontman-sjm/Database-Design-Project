<?php

function createCardId($length = 15) {
  $characters = '0123456789';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}

$cardnum=createCardId();
$regday=$_POST['regday'];
$ctype=$_POST['ctype'];
$cnum=$_POST['cnum'];
$anum=$_POST['anum'];

$conn=mysqli_connect("", "", "", ""); // IP, ID, Password, DB

$check="SELECT * from client WHERE client.client_id='$cnum'";
$result=$conn->query($check);

if($result->num_rows==0)
{
  echo "<script>alert('고객이 아닙니다.'); history.back(); </script>";
  exit();
}

$check="SELECT * from account WHERE account.account_id='$anum' && account.client_id='$cnum'";
$result=$conn->query($check);

if($result->num_rows==0)
{
  echo "<script>alert('등록된 계좌가 아닙니다.'); history.back(); </script>";
  exit();
}

$row = $result->fetch_assoc();

if($row['card_apply']!='신청') {
    echo "<script>alert('카드신청 여부를 확인주세요.'); history.back(); </script>";
    exit();
}

$check="SELECT * from card WHERE card.card_id='$cardnum'";
$result=$conn->query($check);

while($result->num_rows==1)
{
  $anum=createCardId();
}

if($ctype==0) {
  $signup=mysqli_query($conn, "INSERT INTO card VALUES('$cardnum', NULL, NULL, '$regday', '체크카드', '$cnum', '$anum')");

  if($signup){
    echo "<script>alert('체크카드 등록에 성공했습니다.'); </script>";
    header('Refresh: 0; URL = mjubank.php');
  }
} else {
  $max=$_POST['max'];
  $payday=$_POST['payday'];

  $signup=mysqli_query($conn, "INSERT INTO card VALUES('$cardnum', '$max', '$payday', '$regday', '신용카드', '$cnum', '$anum')");
  if($signup){
   echo "<script>alert('신용카드 등록에 성공했습니다.'); </script>";
    header('Refresh: 0; URL = mjubank.php');
  }
}


?>