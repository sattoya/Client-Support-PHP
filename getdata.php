<?php
include_once 'connect.php';

$sql = "select * from complain ORDER BY No DESC";
$get_data = mysqli_query($con, $sql);

$data_table = array();

while($row_table =mysqli_fetch_array($get_data)){
    $data_table[] = $row_table;
}

echo json_encode($data_table);
?>