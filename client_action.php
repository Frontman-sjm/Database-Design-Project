
<?php

include('database_connection.php');

if($_POST['action'] == 'edit')
{
 $data = array(
  ':name'  => $_POST['name'],
  ':address'  => $_POST['address'],
  ':birth'   => $_POST['birth'],
  ':email'   => $_POST['email'],
  ':phone'   => $_POST['phone'],
  ':job'   => $_POST['job'],
  ':client_id'    => $_POST['client_id']
 );

 $query = "
 UPDATE client                   
 SET name = :name,
 address = :address,
 email = :email,
 phone = :phone,
 job = :job
 WHERE client_id = :client_id or birth = :birth;
 UPDATE account
 SET name = :name,
 phone = :phone,
 email = :email
 WHERE account.client_id = :client_id;
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 DELETE FROM client           
 WHERE client_id = '".$_POST["client_id"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>
