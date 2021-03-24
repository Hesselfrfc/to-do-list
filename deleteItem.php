<?
include("includes/datalayer.php");
$url = "index.php";
$buttonText = "Taak verwijderen";
$data = infoTask($_GET["id"]);

if($_SERVER["REQUEST_METHOD"] == "POST"){
 deleteTask($_GET["id"]);
 header("refresh:0; $url");
 echo '<script>alert("Taak succesvol verwijderd")</script>';
}
else{
 $fieldValues=infoTask($_GET["id"]);
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

