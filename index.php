<?php
$npm = isset($_POST['txtnpm']) ? $_POST['txtnpm'] : '';
$nama = isset($_POST['txtnama']) ? $_POST['txtnama'] : '';
$jeniskelamin = isset($_POST['txtjeniskelamin']) ? $_POST['txtjeniskelamin'] : '';
$hobi = isset($_POST['txthobi']) ? $_POST['txthobi'] : [];

echo "------------------------<br>";
echo "Identitas Mahasiswa<br>";
echo "------------------------<br>";
echo "NPM : " . htmlspecialchars($npm) . "<br>";
echo "Nama : " . htmlspecialchars($nama) . "<br>";
echo "Jenis Kelamin : " . htmlspecialchars($jeniskelamin) . "<br>";

if (!empty($hobi)) {
    echo "Hobi : " . implode(", ", array_map('htmlspecialchars', $hobi)) . "<br>";
} else {
    echo "Hobi : Tidak ada hobi yang dipilih<br>";
}
echo "hello world";
?>