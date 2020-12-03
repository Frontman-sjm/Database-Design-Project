<?php


include('database_connection.php');

$column = array("account_id", "account_type", "balance", "card_apply", "make_date", "name", "phone", "email", "client_id");

$query = "SELECT * FROM account";             

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE account_id LIKE "%'.$_POST["search"]["value"].'%"
 OR account_type LIKE "%'.$_POST["search"]["value"].'%"
 OR balance LIKE "%'.$_POST["search"]["value"].'%"
 OR card_apply LIKE "%'.$_POST["search"]["value"].'%"
 OR make_date LIKE "%'.$_POST["search"]["value"].'%"
 OR name LIKE "%'.$_POST["search"]["value"].'%"
 OR phone LIKE "%'.$_POST["search"]["value"].'%"
 OR email LIKE "%'.$_POST["search"]["value"].'%"
 ';
}

//OR client_id LIKE "%'.$_POST["search"]["value"].'%"

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY account_id DESC ';
}
$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['account_id'];
 $sub_array[] = $row['account_type'];
 $sub_array[] = $row['balance'];
 $sub_array[] = $row['card_apply'];
 $sub_array[] = $row['make_date'];
 $sub_array[] = $row['name'];
 $sub_array[] = $row['phone'];
 $sub_array[] = $row['email'];
 $sub_array[] = $row['client_id'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM account";           
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 'draw'   => intval($_POST['draw']),
 'recordsTotal' => count_all_data($connect),
 'recordsFiltered' => $number_filter_row,
 'data'   => $data
);

echo json_encode($output);

?>
