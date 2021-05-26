<?php

include("includes/datalayer.php");
$list = infoListTasks($_GET["id"]);
$timeAsc = filterOnTimeAsc($_GET["id"]);
$timeDesc = filterOnTimeDesc($_GET["id"]);
$statusNotFinished = filterOnStatusNotFinished($_GET["id"]);
$statusBusy= filterOnStatusBusy($_GET["id"]);
$statusFinished = filterOnStatusFinished($_GET["id"]);
$test = infoList($_GET["id"]);


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="includes/style.css"></link>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

    <div class="container">
    <h1><?= $test["listName"] ?> </h1>
    <a href="create.php">nieuwe taak toevoegen</a><br/>

    <p>Filter: </p><select id="filterTasks">
        <option id="showAllTasks" value="0">Laat alle taken zien</option>
        <option id="filterByTimeAsc" value="1">Filter op tijd oplopend</option>
        <option id="filterByTimeDesc" value="2">Filter op tijd aflopend</option>
        <option id="filterByNotFinished" value="3">Filter op status: niet afgerond</option>
        <option id="filterByBusy" value="4">Filter op status: bezig</option>
        <option id="filterByFinished" value="5">Filter op status: afgerond</option>
    </select>

        <div class="listContainer">
            <div id="allTasks">
                <div class="container">
                    <div class="row">
                        <? foreach ($list as $data) { ?>
                            <div class="list-item col-sm rounded" style="border: 1px solid grey; margin-bottom: 25px; margin-right: 25px; padding: 15px;">
                                <ul style="">
                                <li>Naam: <?= $data["name"] ?></li>
                                <li>Omschrijving: <?= $data["description"] ?></li>
                                <li>Duur: <?= $data["time"] ?> mintuten</li>
                                <li>Status: <?= $data["statusName"] ?></li>
                                </ul>
                                <? printf("<a class=\"btn btn-primary\" href=\"item.php?id=%u\">" , $data["taskId"]);?> Meer details</a>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </div>

            <div id="taskByTimeAsc" class="hidden">
                <div class="container">
                    <div class="row">
                        <? foreach ($timeAsc as $data) { ?>
                            <div class="list-item col-sm rounded" style="border: 1px solid grey; margin-bottom: 25px; margin-right: 25px; padding: 15px;">
                                <ul style="">
                                <li>Naam: <?= $data["name"] ?></li>
                                <li>Omschrijving: <?= $data["description"] ?></li>
                                <li>Duur: <?= $data["time"] ?> mintuten</li>
                                <li>Status: <?= $data["statusName"] ?></li>
                                </ul>
                                <? printf("<a class=\"btn btn-primary\" href=\"item.php?id=%u\">" , $data["taskId"]);?> Meer details</a>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </div>

            <div id="taskByTimeDesc" class="hidden">
                <div class="container">
                    <div class="row">
                        <? foreach ($timeDesc as $data) { ?>
                            <div class="list-item col-sm rounded" style="border: 1px solid grey; margin-bottom: 25px; margin-right: 25px; padding: 15px;">
                                <ul style="">
                                <li>Naam: <?= $data["name"] ?></li>
                                <li>Omschrijving: <?= $data["description"] ?></li>
                                <li>Duur: <?= $data["time"] ?> mintuten</li>
                                <li>Status: <?= $data["statusName"] ?></li>
                                </ul>
                                <? printf("<a class=\"btn btn-primary\" href=\"item.php?id=%u\">" , $data["taskId"]);?> Meer details</a>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </div>

            <div id="taskNotFinished" class="hidden">
                <div class="container">
                    <div class="row">
                        <? foreach ($statusNotFinished as $data) { ?>
                            <div class="list-item col-sm rounded" style="border: 1px solid grey; margin-bottom: 25px; margin-right: 25px; padding: 15px;">
                                <ul style="">
                                <li>Naam: <?= $data["name"] ?></li>
                                <li>Omschrijving: <?= $data["description"] ?></li>
                                <li>Duur: <?= $data["time"] ?> mintuten</li>
                                <li>Status: <?= $data["statusName"] ?></li>
                                </ul>
                                <? printf("<a class=\"btn btn-primary\" href=\"item.php?id=%u\">" , $data["taskId"]);?> Meer details</a>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </div>

            <div id="taskBusy" class="hidden">
                <div class="container">
                    <div class="row">
                        <? foreach ($statusBusy as $data) { ?>
                            <div class="list-item col-sm rounded" style="border: 1px solid grey; margin-bottom: 25px; margin-right: 25px; padding: 15px;">
                                <ul style="">
                                <li>Naam: <?= $data["name"] ?></li>
                                <li>Omschrijving: <?= $data["description"] ?></li>
                                <li>Duur: <?= $data["time"] ?> mintuten</li>
                                <li>Status: <?= $data["statusName"] ?></li>
                                </ul>
                                <? printf("<a class=\"btn btn-primary\" href=\"item.php?id=%u\">" , $data["taskId"]);?> Meer details</a>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </div>

            <div id="taskFinished" class="hidden">
                <div class="container">
                    <div class="row">
                        <? foreach ($statusFinished as $data) { ?>
                            <div class="list-item col-sm rounded" style="border: 1px solid grey; margin-bottom: 25px; margin-right: 25px; padding: 15px;">
                                <ul style="">
                                <li>Naam: <?= $data["name"] ?></li>
                                <li>Omschrijving: <?= $data["description"] ?></li>
                                <li>Duur: <?= $data["time"] ?> mintuten</li>
                                <li>Status: <?= $data["statusName"] ?></li>
                                </ul>
                                <? printf("<a class=\"btn btn-primary\" href=\"item.php?id=%u\">" , $data["taskId"]);?> Meer details</a>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


</body>
<script src="includes/toDoList.js"></script>
</html>