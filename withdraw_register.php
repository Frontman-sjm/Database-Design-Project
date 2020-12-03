<?php

function createWithdrawId() {
    $conn=mysqli_connect("", "", "", ""); // IP, ID, Password, DB
    $sql = "SELECT * from transaction WHERE trans_id LIKE '%-W' ORDER BY trans_id DESC";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    $tid = intval($row['trans_id']);
    $tid++;

    $tid = $tid.'-W';

    return $tid;
  }

$anum = $_POST['anum'];
$datetime = date("Y-m-d H:i:s");
$type = '출금';
$contents = NULL;
$withdraw = $_POST['withdraw'];

$conn=mysqli_connect("", "", "", ""); // IP, ID, Password, DB
$check="SELECT * from account WHERE account.account_id='$anum'";
$result=$conn->query($check);

if($result->num_rows==0)
{
    echo "<script>alert('존재하지 않는 계좌입니다.'); history.back(); </script>";
    exit();
}

if($withdraw <= 0)
{
    echo "<script>alert('출금할 수 없는 금액입니다.'); history.back(); </script>";
    exit();
}

$result=$conn->query($check);
$row = $result->fetch_assoc();

if($row['balance'] < intval($withdraw))
{
    echo "<script>alert('잔액이 부족합니다.'); history.back(); </script>";
    exit();
}

$update=mysqli_query($conn,"UPDATE account SET balance = balance - '$withdraw' WHERE account.account_id = '$anum'");

$result=$conn->query($check);
$row = $result->fetch_assoc();

$tid = createWithdrawId();
$balance = $row['balance'];

$register=mysqli_query($conn, "INSERT INTO transaction VALUES('$anum', '$datetime', '$tid', '$type', '$contents', '$withdraw', '$balance')");

if($update && $register)
{
    echo "<script>alert('출금이 완료되었습니다.'); </script>";
    header('Refresh: 0; URL = mjubank.php');  
}

?>