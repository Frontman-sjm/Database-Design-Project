<?php

function createDepositId() {
    $conn=mysqli_connect("", "", "", ""); // IP, ID, Password, DB
    $sql = "SELECT * from transaction WHERE trans_id LIKE '%-D' ORDER BY trans_id DESC";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    $tid = intval($row['trans_id']);
    $tid++;

    $tid = $tid.'-D';

    return $tid;
  }

$anum = $_POST['anum'];
$datetime = date("Y-m-d H:i:s");
$type = '입금';
$contents = NULL;
$deposit = $_POST['deposit'];

$conn=mysqli_connect("", "", "", ""); // IP, ID, Password, DB
$check="SELECT * from account WHERE account.account_id='$anum'";
$result=$conn->query($check);

if($result->num_rows==0)
{
    echo "<script>alert('존재하지 않는 계좌입니다.'); history.back(); </script>";
    exit();
}

if($deposit <= 0)
{
    echo "<script>alert('입금할 수 없는 금액입니다.'); history.back(); </script>";
    exit();
}

$update=mysqli_query($conn,"UPDATE account SET balance = balance + '$deposit' WHERE account.account_id = '$anum'");

$result=$conn->query($check);
$row = $result->fetch_assoc();

$tid = createDepositId();
$balance = $row['balance'];

$register=mysqli_query($conn, "INSERT INTO transaction VALUES('$anum', '$datetime', '$tid', '$type', '$contents', '$deposit', '$balance')");

if($update && $register)
{
    echo "<script>alert('입금이 완료되었습니다.'); </script>";
    header('Refresh: 0; URL = mjubank.php');  
}

?>