<?php

include("includes/datalayer.php");
$list = infoListTasks($_GET["id"]);
$test = infoList($_GET["id"]);
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
    <h1><?= $test["listName"] ?> </h1>
    <button><a href="create.php">nieuwe taak toevoegen</a></button>

        <? foreach ($list as $data) { ?>
        	<ul style="margin-top: 15px;">
			<li><?= $data["name"] ?></li>
			<li><?= $data["description"] ?></li>
            <li><?= $data["time"] ?> mintuten</li>
			</ul>
            <? printf("<a class=\"btn btn-primary\" href=\"item.php?id=%u\">" , $data["taskId"]);?> Meer details</a>
    	<? } ?>
    </div>


</body>
</html>