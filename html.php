<?php
// Mengambil data dari form dengan pengamanan
$npm = isset($_POST['txtnpm']) ? trim($_POST['txtnpm']) : '';
$nama = isset($_POST['txtnama']) ? trim($_POST['txtnama']) : '';
$jeniskelamin = isset($_POST['txtjeniskelamin']) ? trim($_POST['txtjeniskelamin']) : '';
$hobi = isset($_POST['txthobi']) ? $_POST['txthobi'] : [];

// Menampilkan identitas mahasiswa
echo "------------------------<br>";
echo "Identitas Mahasiswa<br>";
echo "------------------------<br>";
echo "NPM : " . htmlspecialchars($npm, ENT_QUOTES, 'UTF-8') . "<br>";
echo "Nama : " . htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') . "<br>";
echo "Jenis Kelamin : " . htmlspecialchars($jeniskelamin, ENT_QUOTES, 'UTF-8') . "<br>";

// Menampilkan hobi
if (!empty($hobi)) {
    echo "Hobi : " . implode(", ", array_map('htmlspecialchars', $hobi)) . "<br>";
} else {
    echo "Hobi : Tidak ada hobi yang dipilih<br>";
}

echo "hello world";
?>
