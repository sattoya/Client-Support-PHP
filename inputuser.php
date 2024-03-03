<?php
require "connect.php";
if (!$con) {
    echo "connection error";
}

$c_date = $_POST['c_date'];
$nama = $_POST['nama'];
$bagian = $_POST['bagian'];
$c_desc = $_POST['c_desc'];
$Cause = $_POST['Cause'];
$Action = $_POST['Action'];
$Req = $_POST['Req'];
$f_date = $_POST['f_date'];
$Waktu_perbaikan = $_POST['Waktu_perbaikan'];
$Status = $_POST['Status'];

// Lakukan sanitasi data untuk mencegah SQL injection (opsional, tetapi sangat dianjurkan)
$c_date= mysqli_real_escape_string($con, $c_date);
$nama = mysqli_real_escape_string($con, $nama);
$bagian = mysqli_real_escape_string($con, $bagian);
$c_desc = mysqli_real_escape_string($con, $c_desc);
$Req = mysqli_real_escape_string($con, $Req);
$Status = mysqli_real_escape_string($con, $Status);

// Query untuk melakukan INSERT data baru
$insert = "INSERT INTO complain(c_date, nama, bagian, c_desc, Cause, Action, Req , f_date, Waktu_perbaikan, Status) VALUES ('$c_date', '$nama', '$bagian', '$c_desc', '$Cause', '$Action', '$Req', '$f_date', '$Waktu_perbaikan','$Status')";
$query = mysqli_query($con, $insert);

if ($query) {
    echo json_encode('Succeed');
} else {
    echo json_encode('Failed to insert data');
}
?>
