<?php
    echo count($caisses);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/accueil.css">
    <title>Document</title>
</head>
<body>
    <main>
        <section class="main-content">
    <div class="selection-caisse-container">
        <h2 class="title-content">Bienvenue dans la caisse</h2>
        
        <form action="caisse" method="POST" class="form-selection">
            <div class="form-group-caisse">
                <label for="caisse">Choisir Caisse</label>
                <select name="id_caisse" id="caisse" required>
                    <option value="">-- Sélectionner une caisse --</option>
                    <?php 
                        foreach ($caisses as $c) {
                    ?>
                        <option value="<?= $c['id_caisse'] ?>">Caisse <?= $c['id_caisse'] ?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>

            <button type="submit" class="btn-valider-caisse">Valider [cite: 38, 47]</button>
        </form>
    </div>
</section>
    </main>
</body>
</html>