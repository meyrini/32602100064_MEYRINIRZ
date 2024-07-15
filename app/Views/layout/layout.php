<!-- app/Views/layout/layout.php -->
 <!DOCTYPE html>
 <html>
    <head>
        <title>Website</title>
    </head>
    <body>
        <header>
            <!-- Isi header di sini -->
             <h1>Header</h1>
        </header>
        <nav>
            <!-- Isi navigasi di sini-->
             <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Skills</a></li>
             </ul>
        </nav>

        <main>
            <!-- Render konten main di sini -->
             <?= $this->renderSection('content') ?>
             <?= $this->renderSection('content')?>
        </main>

        <footer>
            <!-- Isi footer di sini -->
             <p>Footer</p>
        </footer>
    </body>
 </html>