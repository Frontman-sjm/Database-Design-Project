
<?php

include('database_connection.php');

if($_POST['action'] == 'edit')
{
 $data = array(
  ':account_id'  => $_POST['account_id'],
  ':trans_date'  => $_POST['trans_date'],
  ':trans_id'   => $_POST['trans_id'],
  ':trans_type'   => $_POST['trans_type'],
  ':trans_contents'   => $_POST['trans_contents'],
  ':trans_price'   => $_POST['trans_price'],
  ':balance'    => $_POST['balance']
 );

 $query = "
 UPDATE transaction                   
 SET name = :name,
 trans_date = :trans_date,
 trans_id = :trans_id,
 trans_type = :trans_type,
 trans_contents = :trans_contents,
 trans_price = :trans_price,
 balance = :balance
 WHERE account_id = :account_id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 DELETE FROM transaction           
 WHERE account_id = '".$_POST["account_id"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>
