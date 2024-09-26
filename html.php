<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Form 2</title>
</head>
<body>
    <h2>FORM INPUT IDENTITAS MAHASISWA</h2>
    
    <form method="post" action="tampildata.php">
        NPM:<br>
        <input type="text" name="txtnpm" size="20"><br><br>
        
        NAMA:<br>
        <input type="text" name="txtnama" size="20"><br><br>
        
        JENIS KELAMIN:<br>
        <input type="radio" name="txtjeniskelamin" value="aki-aki" checked>aki-aki<br>
        <input type="radio" name="txtjeniskelamin" value="nini-nini">nini-nini<br><br>
        
        HOBI:<br>
        <input type="checkbox" name="txthobi[]" value="Nontonlagi" checked>Nontonlagi<br>
        <input type="checkbox" name="txthobi[]" value="Nonton">Nonton<br><br>
        
        <input type="submit" name="btnsubmit" value="Tampil">
    </form>
</body>
</html>