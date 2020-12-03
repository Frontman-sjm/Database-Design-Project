<?php


include('database_connection.php');

$column = array("card_id", "max", "payday", "apply_date", "card_type", "client_id", "account_id");

$query = "SELECT * FROM card ";             

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE max LIKE "%'.$_POST["search"]["value"].'%"
 OR payday LIKE "%'.$_POST["search"]["value"].'%"
 OR apply_date LIKE "%'.$_POST["search"]["value"].'%"
 OR card_type LIKE "%'.$_POST["search"]["value"].'%"
 OR client_id LIKE "%'.$_POST["search"]["value"].'%"
 OR account_id LIKE "%'.$_POST["search"]["value"].'%"
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY card_id DESC ';
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
 $sub_array[] = $row['card_id'];
 $sub_array[] = $row['max'];
 $sub_array[] = $row['payday'];
 $sub_array[] = $row['apply_date'];
 $sub_array[] = $row['card_type'];
 $sub_array[] = $row['client_id'];
 $sub_array[] = $row['account_id'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM card";           
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
