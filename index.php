<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/style/stylesheet_global.css">
    <link rel="stylesheet" href="./assets/style/stylesheet_index.css">

    <title>Stickman game</title>
</head>
<body>
    <header>
        <h1>Bienvenue</h1>
        <p>Ce site est fortement inspirer du jeu <a href="https://www.crazygames.fr/jeu/fleeing-the-complex"><b>Fleeing the Complex</b></a> de la serie de jeu en ligne <b>Henry Stickmin</b>.</p>
    </header>

    <main>
        <form id="chooseName" action="./page/node.php" method="post">
            <fieldset>
                <input type="hidden" name="nodeNumber" value="0">

                <label for="userName">Comment t'appele-tu étranger ?</label>
                <input type="text" name="userName">
            </fieldset>
        </form>
    </main>

    <?php
        $isIndex = true;
        require "./templates/_footer.phtml";
    ?>
</body>
</html>