<?php
$conn=new mysqli("localhost","root","","cshori");
$No = $_POST["No"];
$c_date = $_POST["c_date"];
$nama = $_POST["nama"];
$bagian = $_POST["bagian"];
$c_desc = $_POST["c_desc"];
$data= mysqli_query($conn, "update complain set c_date='$c_date', nama='$nama', bagian='$bagian', c_desc='$c_desc' WHERE No='$No' " );

if ($data) {
    echo json_encode([
        'pesan' => 'sukses'
    ]);
} else {
    echo json_encode([
        'pesan' => 'gagal'
    ]);
}
?>
