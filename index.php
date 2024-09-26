<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 2</title>
</head>
<body>
    <h2>FORM INPUT IDENTITAS MAHASISWA</h2>
    
    <form method="post" action="tampildata.php">
        <label for="npm">NPM:</label><br>
        <input type="text" id="npm" name="txtnpm" size="20" required><br><br>
        
        <label for="nama">NAMA:</label><br>
        <input type="text" id="nama" name="txtnama" size="20" required><br><br>
        
        <span>JENIS KELAMIN:</span><br>
        <input type="radio" id="aki" name="txtjeniskelamin" value="aki-aki" checked>
        <label for="aki">Aki-aki</label><br>
        <input type="radio" id="nini" name="txtjeniskelamin" value="nini-nini">
        <label for="nini">Nini-nini</label><br><br>
        
        <span>HOBI:</span><br>
        <input type="checkbox" id="hobi1" name="txthobi[]" value="Nontonlagi" checked>
        <label for="hobi1">Nontonlagi</label><br>
        <input type="checkbox" id="hobi2" name="txthobi[]" value="Nonton">
        <label for="hobi2">Nonton</label><br><br>
        
        <input type="submit" name="btnsubmit" value="Tampil">
    </form>
</body>
</html>

