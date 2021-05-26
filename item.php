<?php

include("includes/datalayer.php");
$data = infoTask($_GET["id"]);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <ul>
        <h4>Dit zijn de gegevens van <?= $data["name"] ?></h4>
			<li>Naam: <?= $data["name"] ?></li>
			<li>Omschrijving: <?= $data["description"] ?></li>
			<li>Duur: <?= $data["time"] ?> minuten</li>
            <li>Status: <?= $data["statusName"] ?></li>
		</ul>

        <a class="btn-lg btn-danger text-white" href="deleteItem.php?id=<?= $data["taskId"] ?>">delete item</a>
        <a class="btn-lg btn-warning text-white" href="updateItem.php?id=<?= $data["taskId"] ?>">update item</a>
    </div>


</body>
</html>