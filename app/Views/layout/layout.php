<!DOCTYPE html>
<html>
<head>
    <title>BAB 3</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
    <header>
        <!-- Header Anda -->
         <h1>Gusmix Mubarok</h1>
        <header>

        <nav>
        <!-- Navisgasi Anda -->
         <ul>
            <li><a href="/profile">Halaman Profile</a></li>
            <li><a href="/experience">Halaman Pengalaman</a></li>
        </ul>
</nav>

<main>
    <!-- Konten Utama akan dirender di sini -->
     <?=$this->renderSection('content')?>
</main>
<footer>
    <!-- Footer Anda -->
     <p>Dibuat oleh Gusmix Mubarok</p>
</footer>

</body>
</html>