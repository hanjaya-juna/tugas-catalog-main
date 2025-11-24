<<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran</title>
</head>
<body>
    <h2>Form Pendaftaran</h2>

    <form action="proses.php" method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="gender" value="Laki-laki" required> Laki-laki
        <input type="radio" name="gender" value="Perempuan"> Perempuan <br><br>

        <label>Pesan:</label><br>
        <textarea name="pesan" rows="4" cols="40"></textarea><br><br>

        <input type="submit" value="Kirim Data">
    </form>
</body>
</html>
