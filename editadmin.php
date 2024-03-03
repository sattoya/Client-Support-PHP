<?php
$conn=new mysqli("localhost","root","","cshori");
$No = $_POST["No"];
$c_date = $_POST["c_date"];
$nama = $_POST["nama"];
$bagian = $_POST["bagian"];
$c_desc = $_POST["c_desc"];
$Cause = $_POST["Cause"];
$Action = $_POST["Action"];
$Req = $_POST["Req"];
$f_date = $_POST["f_date"];
$Waktu_perbaikan = $_POST["Waktu_perbaikan"];
$Status = $_POST["Status"];
$data= mysqli_query($conn, "update complain set c_date='$c_date', nama='$nama', bagian='$bagian', c_desc='$c_desc', Cause='$Cause', Action='$Action',Req='$Req',f_date='$f_date',Waktu_perbaikan='$Waktu_perbaikan', Status='$Status' WHERE No='$No' " );

if ($data) {
    echo json_encode([
        'pesan' => 'sukses'
    ]);
} else {
    echo json_encode([
        'pesan' => 'gagal'
    ]);
}
