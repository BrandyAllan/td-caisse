<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Caisse 2</title>
        <link rel="stylesheet" href="/css/style-<?= $caisse['id_caisse'] ?>.css">
    </head>
    <body>
        <header>
            <p>TD - SI - IHM - <?= $caisse['nom_caisse'] ?></p>
            <a href="#">Changer de caisse</a>
        </header>
        <main>
            <section class="sidebar-caisse">
                <h2>Caisse n°<?= $caisse['id_caisse'] ?></h2>
                <ul>
                    <li><a href="#">Menu 1</a></li>
                    <li><a href="#">Menu 2</a></li>
                    <li><a href="#">Menu 3</a></li>
                </ul>
            </section>
            <section class="content-caisse">
                <h1>Contenu principal</h1>
                <p>Affichage des produits, achats, etc.</p>
            </section>
        </main>
        <footer>
            <p>Copyright &copy; Caisse 2026</p>
        </footer>
    </body>
</html>