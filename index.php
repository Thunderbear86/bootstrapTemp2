<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Fenris</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">



    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<!-- Her skal sidens indhold ligge -->

<!-- Header -->

<header>
    <img src="cover-picture.jpg" alt="Cover Picture">
</header>

<!-- Navbar -->

<nav>
    <ul>
        <li><a href="#">Hjem</a></li>
        <li><a href="#">Om</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Kontakt</a></li>
    </ul>
</nav>

<!-- Image Grid -->

<div class="image-grid">
    <img src="image1.jpg" alt="Image 1">
    <img src="image2.jpg" alt="Image 2">
    <img src="image3.jpg" alt="Image 3">
    <img src="image4.jpg" alt="Image 4">
    <img src="image5.jpg" alt="Image 5">
    <img src="image6.jpg" alt="Image 6">
</div>

<!-- Referencer -->

<section class="references">
    <div class="reference-card">
        <img src="reference1.jpg" alt="Reference 1">
        <h3>Reference 1</h3>
        <p>Description of Reference 1</p>
    </div>
    <div class="reference-card">
        <img src="reference2.jpg" alt="Reference 2">
        <h3>Reference 2</h3>
        <p>Description of Reference 2</p>
    </div>
    <div class="reference-card">
        <img src="reference3.jpg" alt="Reference 3">
        <h3>Reference 3</h3>
        <p>Description of Reference 3</p>
    </div>
    <div class="reference-card">
        <img src="reference4.jpg" alt="Reference 4">
        <h3>Reference 4</h3>
        <p>Description of Reference 4</p>
    </div>
    <div class="reference-card">
        <img src="reference5.jpg" alt="Reference 5">
        <h3>Reference 5</h3>
        <p>Description of Reference 5</p>
    </div>
    <div class="reference-card">
        <img src="reference6.jpg" alt="Reference 6">
        <h3>Reference 6</h3>
        <p>Description of Reference 6</p>
    </div>
</section>

<script src=node_modules/bootstrap/dist/js/bootstrap.bundle.min.js”></script>

</body>
</html>
