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
	<div id = "container">
	</div>

	<div id = "container">
		<button><a href="createList.php">nieuwe lijst toevoegen</a></button>

			<? foreach ($test as $data) { ?>
				<div class="list_item" style="margin-top: 35px;">
					<ul>
					<li><?= $data["listName"] ?></li>
					</ul>
					<? printf("<a class=\"btn btn-primary\" href=\"list.php?id=%u\">" , $data["id"]);?> Meer details</a>
				</div>
    		<? } ?>
		
	</div>
</body>
</html>