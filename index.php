<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Dezvoltarea aplicatiilor web</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="banner-div">
        <img src="imagini/banner.jpg " />
    </div>
    <header>
        <div class="navbar responsive">
            <a href="?page=home">Home</a>
            <a href="?page=pisici">Pisici</a>
            <a href="?page=caini">Caini</a>
            <a href="?page=produse">Produse</a>
            <a href="?page=contact">Contact</a>
        </div>
    </header>
    <div class="continut">

        <?php
        //am verificat daca parametrul 'page' din GET exista si l-am salvat in variabila,altfel am salvat null
        $getPage = !empty($_GET['page']) ? $_GET['page'] : "";
        if (!empty($getPage)) {
            require_once('pagini/' . $getPage . '.html');
        } else {
            require_once('pagini/home.html');
        }
        ?>

    </div>
    <footer>
        <h4>Alăturați-vă listei noastre de abonați pentru a primi cele mai recente actualizări.</h4>
        <input type="email" placeholder="Aici introduci email..." />
        <input type="submit" class="buton-footer" value="Aboneaza-te!" />
    </footer>
</body>

</html>