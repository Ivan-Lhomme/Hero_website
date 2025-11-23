<?php
    require "../data/nodeContainer.php";
    require "../data/failContainer.php";
    require "../data/winContainer.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/style/stylesheet_global.css">
    <link rel="stylesheet" href="../assets/style/stylesheet_node.css">

    <?php if (!is_numeric($_POST["nodeNumber"])) { ?>
        <title>Gagné !</title>
    <?php } else if ($_POST["nodeNumber"] >= 0) { ?>
        <title><?= $nodeContainer[$_POST["nodeNumber"]]["name"] ?></title>
    <?php } else { ?>
        <title>Perdue !</title>
    <?php } ?>
</head>
<body>
    <?php
        if (is_numeric($_POST["nodeNumber"])) {
            require "../templates/_header.phtml";
        }
        require "../templates/_main.phtml";
        require "../templates/_footer.phtml";
    ?>
</body>
</html>