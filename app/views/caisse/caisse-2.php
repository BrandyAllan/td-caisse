<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Caisse 2</title>
        <link rel="stylesheet" href="css/style-2.css">
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
            <h2 class="title-content">Nouvelle Achat</h2>

            <div class="saisie-achat">
                <form action="<?= Flight::get('flight.views.path') ?>/ajouter-produit" method="POST">
                    
                    <div class="form-group titre-achat">
                        <h3>Achat Numéro :</h3>
                        <p>001</p>
                    </div>

                    <div class="form-group">
                        <h3>Produit</h3>
                        <select name="id_produit" id="produit" required>
                            <option value="">-- Choisir un produit --</option>
                            <option value="1">Biscuit (1000)</option>
                            <option value="2">Pain (400)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <h3 for="quantite">Quantité</h3>
                        <input type="number" name="quantite" id="quantite" min="1" required>
                    </div>

                    <button type="submit" class="btn-valider">Valider</button>
                </form>
            </div>

            <hr>

            <div class="affichage-achats">
                <table>
                    <thead>
                        <tr>
                            <th>Produit</th>
                            <th>Prix Unit</th>
                            <th>Qté</th>
                            <th>Montant</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Biscuit</td>
                            <td>1000</td>
                            <td>12</td>
                            <td>12000</td>
                        </tr>
                        <tr>
                            <td>Pain</td>
                            <td>400</td>
                            <td>2</td>
                            <td>800</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" style="text-align: right;"><strong>Total</strong></td>
                            <td><strong>12800</strong></td>
                        </tr>
                    </tfoot>
                </table>

                <div class="actions-finales">
                    <form action="<?= Flight::get('flight.views.path') ?>/cloturer" method="POST">
                        <button type="submit" class="btn-cloturer">Clôturer achat</button>
                    </form>
                </div>
            </div>
        </section>

        </main>
        <footer>
            <p>Copyright &copy; Caisse 2026</p>
        </footer>
    </body>
</html>