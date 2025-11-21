<?php
    require "../controllers/nodeContainer.php";

    $nodeNumber = 0;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/style/stylesheet_global.css">
    <link rel="stylesheet" href="../assets/style/stylesheet_node.css">

    <title><?= $nodeContainer[$nodeNumber]["name"] ?></title>
</head>
<body>
    <?php
        require "../templates/_header.phtml";
        require "../templates/_main.phtml";
        require "../templates/_footer.phtml";
    ?>
</body>
</html>