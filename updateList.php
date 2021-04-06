<?php

include("includes/datalayer.php");
$url = "index.php";
$buttonText = "Lijst aanpassen";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    updateList($_POST["listName"], ($_GET["id"]));
    header("refresh:0; $url");
    echo '<script>alert("Lijst succesvol aangepast")</script>';   
}else {
    $fieldValues=infoList($_GET["id"]);
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

    <?
    require("formList.php");
    ?>

</body>
</html>