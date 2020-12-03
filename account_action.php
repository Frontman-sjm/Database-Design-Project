<?php

include('database_connection.php');

if($_POST['action'] == 'edit')
{
 $data = array(
  ':account_id'  => $_POST['account_id'],
  ':account_type'  => $_POST['account_type'],
  ':balance'   => $_POST['balance'],
  ':card_apply'   => $_POST['card_apply'],
  ':make_date'   => $_POST['make_date'],
  ':name'   => $_POST['name'],
  ':phone'   => $_POST['phone'],
  ':email'   => $_POST['email'],
  ':client_id'    => $_POST['client_id']
 );

 $query = "
 UPDATE account
 SET card_apply = :card_apply
 WHERE account_id = :account_id or account_type = :account_type or balance = :balance or make_date = :make_date or name = :name or phone = :phone or email = :email or client_id = :client_id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 DELETE FROM account           
 WHERE account_id = '".$_POST["account_id"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>
