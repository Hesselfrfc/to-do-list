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

//hier staan de functies voor een lijst

function readLists(){
    $dbConnection = creatDatabaseConnection();
	$stmt = $dbConnection->prepare("SELECT * FROM lists ORDER BY listName ASC");
	$stmt->execute();
	$result = $stmt->fetchAll();
	$dbConnection = null;
	return $result;
}

function infoList($id){
    $dbConnection = creatDatabaseConnection();
	$stmt = $dbConnection->prepare("SELECT * FROM lists WHERE id=:id");
    $stmt->bindParam(':id', $id);
	$stmt->execute();
	$result = $stmt->fetch();
	$dbConnection = null;
	return $result;
}

function addList($listName){
    $dbConnection = creatDatabaseConnection();
    $stmt = $dbConnection->prepare("INSERT INTO lists (listName) VALUES (:listName)");
    $stmt->bindParam(':listName', $listName);
    $result = $stmt->execute();
    $dbConnection = null;
    return $result;
}

function infoListTasks($id){
	$dbConnection = creatDatabaseConnection();
	$stmt = $dbConnection->prepare("SELECT tasks.*, lists.* from tasks LEFT JOIN lists on tasks.listId = lists.id WHERE listId=:id");
	$stmt->bindParam(':id', $id);
	$stmt->execute();
	$result = $stmt->fetchAll();
	$dbConnection = null;
	return $result;
}

function infoListForm($id){
	$dbConnection = creatDatabaseConnection();
	$stmt = $dbConnection->prepare("SELECT tasks.*, lists.* from tasks LEFT JOIN lists on tasks.listId = lists.id WHERE taskId=:id");
	$stmt->bindParam(':id', $id);
	$stmt->execute();
	$result = $stmt->fetch();
	$dbConnection = null;
	return $result;
}


// einde functies lijst

// hier staan de functies van taken

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

function deleteTask($id){
    $dbConnection = creatDatabaseConnection();
    $stmt = $dbConnection->prepare("DELETE FROM tasks WHERE taskId=:id");
    $stmt->bindParam(':id', $id);
    $result = $stmt->execute(); 
    $dbConnection = null;
    return $result;
}

function updateTask($name, $description, $time, $statusId, $listId, $id){
    $dbConnection = creatDatabaseConnection();
    $stmt = $dbConnection->prepare("UPDATE tasks SET name=:name, description=:description, time=:time, statusId=:statusId, listId=:listId WHERE taskId=:id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':time', $time);
	$stmt->bindParam(':statusId', $statusId);
    $stmt->bindParam(':listId', $listId);
    $stmt->bindParam(':id', $id);
    $result = $stmt->execute();
    $dbConnection = null;
    return $result;
}

function addTask($name, $description, $time, $statusId, $listId){
    $dbConnection = creatDatabaseConnection();
    $stmt = $dbConnection->prepare("INSERT INTO tasks (name, description, time, statusId, listId) VALUES (:name, :description, :time, :statusId, :listId)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':time', $time);
	$stmt->bindParam(':statusId', $statusId);
    $stmt->bindParam(':listId', $listId);
    $result = $stmt->execute();
    $dbConnection = null;
    return $result;
}

// einde functies taken


?>