<?
include("includes/datalayer.php");
$url = "index.php";
$buttonText = "Taak aanpassen";
$data = infoTask($_GET["id"]);
$dataList = infoListForm($_GET["id"]);
$list=readStatus();
$listInfo=readLists();

if($_SERVER["REQUEST_METHOD"] == "POST"){
 updateTask($_POST["name"], $_POST["description"], $_POST["time"], $_POST["statusId"], $_POST["listId"], $_GET["id"]);
 header("refresh:0; $url");
 echo '<script>alert("Taak succesvol aangepast!")</script>';
}
else{
$fieldValues=infoTask($_GET["id"]);
$fieldValueList=infoListForm($_GET["id"]);
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
    require("form.php");
    ?>

</body>
</html>

