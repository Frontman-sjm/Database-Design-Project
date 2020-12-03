<?php


include('database_connection.php');

$column = array("account_id", "trans_date", "trans_id", "trans_type", "trans_contents", "trans_price", "balance");

$query = "SELECT * FROM transaction ";             

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE trans_date LIKE "%'.$_POST["search"]["value"].'%"
 OR trans_id LIKE "%'.$_POST["search"]["value"].'%"
 OR trans_type LIKE "%'.$_POST["search"]["value"].'%"
 OR trans_contents LIKE "%'.$_POST["search"]["value"].'%"
 OR trans_price LIKE "%'.$_POST["search"]["value"].'%"
 OR balance LIKE "%'.$_POST["search"]["value"].'%"
 ';
}

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
 $sub_array[] = $row['trans_date'];
 $sub_array[] = $row['trans_id'];
 $sub_array[] = $row['trans_type'];
 $sub_array[] = $row['trans_contents'];
 $sub_array[] = $row['trans_price'];
 $sub_array[] = $row['balance'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM transaction";           
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
