<?php

include("includes/datalayer.php");
$url = "index.php";
$buttonText = "Taak toevoegen";
$list=readStatus();
$listInfo=readLists();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    addTask($_POST["name"], $_POST["description"], $_POST["time"], $_POST["statusId"], $_POST["listId"]);
    header("refresh:0; $url");
    echo '<script>alert("Taak succesvol toegevoegd")</script>';
   }
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<h1>HOI</h1>

    <?
    require("form.php");
    ?>

</body>
</html>