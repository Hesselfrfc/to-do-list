<?php

function creatDatabaseConnection(){
	$servername = "localhost";
	$username = "root";
	$dbname = "test";

	try {
    	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username);
    	// set the PDO error mode to exception
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	return $conn;
 	}
	catch(PDOException $e){
    	echo "Connection failed: " . $e->getMessage();
    }
}


function readTasks(){
	$dbConnection = creatDatabaseConnection();
	$stmt = $dbConnection->prepare("SELECT * FROM tasks ORDER BY name ASC");
	$stmt->execute();
	$result = $stmt->fetchAll();
	$dbConnection = null;
	return $result;
}

function readStatus(){
    $dbConnection = creatDatabaseConnection();
    $stmt = $dbConnection->prepare("SELECT * from status ORDER BY id ASC");
    $stmt->execute();
    $result = $stmt->fetchAll();
    $dbConnection = null;
    return $result;
}

function infoTasks(){
    $dbConnection = creatDatabaseConnection();
    $stmt = $dbConnection->prepare("SELECT tasks.*, status.* from tasks LEFT JOIN status on tasks.statusId = status.id");
    $stmt->execute();
    $result = $stmt->fetch();
    $dbConnection = null;
    return $result;
}

function infoTask($id){
	$dbConnection = creatDatabaseConnection();
	$stmt = $dbConnection->prepare("SELECT tasks.*, status.* from tasks LEFT JOIN status on tasks.statusId = status.id WHERE taskId=:id");
	$stmt->bindParam(':id', $id);
	$stmt->execute();
	$result = $stmt->fetch();
	$dbConnection = null;
	return $result;
}

function addTask($name, $description, $time, $statusId){
    $dbConnection = creatDatabaseConnection();
    $stmt = $dbConnection->prepare("INSERT INTO tasks (name, description, time, statusId) VALUES (:name, :description, :time, :statusId)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':time', $time);
	$stmt->bindParam(':statusId', $statusId);
    $result = $stmt->execute();
    $dbConnection = null;
    return $result;
}


function deleteTask($id){
    $dbConnection = creatDatabaseConnection();
    $stmt = $dbConnection->prepare("DELETE FROM tasks WHERE taskId=:id");
    $stmt->bindParam(':id', $id);
    $result = $stmt->execute(); 
    $dbConnection = null;
    return $result;
}

function updateTask($name, $description, $time, $statusId, $id){
    $dbConnection = creatDatabaseConnection();
    $stmt = $dbConnection->prepare("UPDATE tasks SET name=:name, description=:description, time=:time, statusId=:statusId WHERE taskId=:id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':time', $time);
	$stmt->bindParam(':statusId', $statusId);
    $stmt->bindParam(':id', $id);
    $result = $stmt->execute();
    $dbConnection = null;
    return $result;
}

?>