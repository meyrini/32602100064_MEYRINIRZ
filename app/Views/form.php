<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
</head>
<body>
    <form action="/formmahasiswa/prosesForm" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br><br>
        
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim"><br><br>

        <label for="kelas">Kelas:</label>
        <input type="text" id="kelas" name="kelas"><br><br>

        <label for="matakuliah">Mata Kuliah:</label>
        <input type="text" id="matakuliah" name="matakuliah"><br><br>

        <label for="dosen">Dosen Pengampu:</label>
        <input type="text" id="dosen" name="dosen"><br><br>

        <label for="asisten">Asisten Praktikum:</label>
        <input type="text" id="asisten" name="asisten"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
