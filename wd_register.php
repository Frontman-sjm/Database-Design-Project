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

$withdraw = $_POST['withdraw'];
$deposit = $_POST['deposit'];
$transfer = $_POST['transfer'];
$contents = '계좌이체';

//출금 계좌 확인
$conn=mysqli_connect("", "", "", ""); // IP, ID, Password, DB
$check_w="SELECT * from account WHERE account.account_id='$withdraw'";
$result_w=$conn->query($check_w);

if($result_w->num_rows==0)
{
    echo "<script>alert('존재하지 않는 출금 계좌입니다.'); history.back(); </script>";
    exit();
}
//출금 계좌 확인 완료

//입금 계좌 확인
$check_d="SELECT * from account WHERE account.account_id='$deposit'";
$result_d=$conn->query($check_d);

if($result_d->num_rows==0)
{
    echo "<script>alert('존재하지 않는 입금 계좌입니다.'); history.back(); </script>";
    exit();
}
//입금 계좌 확인 완료

if($withdraw == $deposit) 
{
    echo "<script>alert('같은 계좌번호입니다.'); history.back(); </script>";
    exit();
}

if($transfer <= 0)
{
    echo "<script>alert('금액을 다시 입력해주세요.'); history.back(); </script>";
    exit();
}

//트랜젝션
$transaction = 'strat transaction';
$start=$conn->query($transaction);

//출금
$datetime_w = date("Y-m-d H:i:s");
$type_w = '출금';

$result_w=$conn->query($check_w);
$row = $result_w->fetch_assoc();

if($row['balance'] < intval($transfer))
{
    echo "<script>alert('잔액이 부족합니다.'); history.back(); </script>";
    exit();
}

$update_w=mysqli_query($conn,"UPDATE account SET balance = balance - '$transfer' WHERE account.account_id = '$withdraw'");

$result_w=$conn->query($check_w);
$row = $result_w->fetch_assoc();

$tid_w = createWithdrawId();
$balance_w = $row['balance'];

$register_w=mysqli_query($conn, "INSERT INTO transaction VALUES('$withdraw', '$datetime_w', '$tid_w', '$type_w', '$contents', '$transfer', '$balance_w')");
//출금 완료

//입금 시작
$datetime_d = date("Y-m-d H:i:s");
$type_d = '입금';

$result_d=$conn->query($check_d);
$row = $result_d->fetch_assoc();

$update_d=mysqli_query($conn,"UPDATE account SET balance = balance + '$transfer' WHERE account.account_id = '$deposit'");

$result_d=$conn->query($check_d);
$row = $result_d->fetch_assoc();

$tid_d = createDepositId();
$balance_d = $row['balance'];

$register_d=mysqli_query($conn, "INSERT INTO transaction VALUES('$deposit', '$datetime_d', '$tid_d', '$type_d', '$contents', '$transfer', '$balance_d')");

if($update_w && $register_w && $update_d && $register_d)
{
    $commit = 'commit';
    $end=$conn->query($commit);
    echo "<script>alert('계좌 이체가 완료되었습니다.'); </script>";
    header('Refresh: 0; URL = mjubank.php');
} else {
    $rollback = 'rollback';
    $end=$conn->query($rollback);
    exit();
}

?>