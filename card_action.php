
<?php

include('database_connection.php');

if($_POST['action'] == 'edit')
{
 $data = array(
  ':card_id'  => $_POST['card_id'],
  ':max'  => $_POST['max'],
  ':payday'   => $_POST['payday'],
  ':apply_date'   => $_POST['apply_date'],
  ':card_type'   => $_POST['card_type'],
  ':client_id'    => $_POST['client_id'],
  ':account_id'   => $_POST['account_id']
 );

 $query = "
 UPDATE card                  
 SET max = :max,
 payday = :payday
 WHERE card_id = :card_id or apply_date = :apply_date or card_type = :card_type or client_id = :client_id or account_id = :account_id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 DELETE FROM card           
 WHERE card_id = '".$_POST["card_id"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>
