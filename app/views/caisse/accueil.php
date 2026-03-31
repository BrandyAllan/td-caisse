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
        <h2 class="title-content">Initialisation de la Session</h2>
        
        <form action="valider-caisse" method="POST" class="form-selection">
            <div class="form-group-caisse">
                <label for="caisse">Choisir Caisse [cite: 37]</label>
                <select name="id_caisse" id="caisse" required>
                    <option value="">-- Sélectionner une caisse --</option>
                    <option value="1">Caisse 01</option>
                    <option value="2">Caisse 02</option>
                </select>
            </div>

            <button type="submit" class="btn-valider-caisse">Valider [cite: 38, 47]</button>
        </form>
    </div>
</section>
    </main>
</body>
</html>