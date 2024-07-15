<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layouting</title>
</head>
<body>
    <div class="navbar">
        <div class="navbar-page">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="navbar-sosmed">
            <ul>
                <li>LinkedIn</li>
                <li>Instagram</li>
                <li>Facebook</li>
                <li>WhatsApp</li>
            </ul>
        </div>
    </div>
    <div class="banner">
        <span class="name">
            Mey Rini Rz
        </span><br>
        <span class="description">
            Mahasiswa lulusan Teknik Informatika Jurusan Teknik Informatika angkatan sesuai dengan angkatan anda
        </span>
    </div>
    <?= $this->renderSection('content') ?>
</body>
</html>

