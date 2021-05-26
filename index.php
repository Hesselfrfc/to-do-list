<?php

include("includes/datalayer.php");
$list=readTasks();
$test=readLists();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

	<div class= "container">
		<a class="btn btn-primary" href="createList.php">nieuwe lijst toevoegen</a>

		<div class="container">
			<div class="row">
				<? foreach ($test as $data) { ?>
					<div class="list_item col-sm rounded" style="margin-top: 35px; border: 1px solid grey; padding: 15px; margin-right: 25px;">
						<ul>
						<li><?= $data["listName"] ?></li>
						</ul>
						<? printf("<a class=\"btn btn-primary\" href=\"list.php?id=%u\">" , $data["id"]);?> Meer details</a>
						<? printf("<a class=\"btn btn-warning\" href=\"updateList.php?id=%u\">" , $data["id"]);?>Lijst aanpassen</a>
						<? printf("<a class=\"btn btn-danger\" href=\"deleteList.php?id=%u\">" , $data["id"]);?>Lijst verwijderen</a>
					</div>
				<? } ?>
			</div>
		</div>
		
	</div>
</body>
</html>