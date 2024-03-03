<?php
$conn =new mysqli("localhost","root","","cshori");

$nama = $_POST["nama"];

$data= mysqli_query($conn, "delete from complain where nama= '$nama'");
if ($data) {
    echo json_encode([
        'pesan' => 'sukses']);
}else {
    echo json_encode([
        'pesan' => 'gagal']);
}
?>
