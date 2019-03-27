<?php

require("bdd.php");

if (isset($_GET["action"])) { // Checking if "action" exists as a GET parameter
	$action = $_GET["action"]; // Grabbing its value
	
	switch ($action) { // Checking the value of the action variable
		case "add":
			// Adding an element
			if (isset($_GET["content"])) { // Checking if a content was added to the GET request
				$content = htmlspecialchars($_GET["content"]); // Grabbing content's value + SQL injections proofing
				$content = $db->quote($content); // Putting the content in quotes just to avoid troubles
			//	$date = $db->quote($_GET["date"]); // Doing the same with the task's date
				$date = "2019-03-22 00:00:00";	
				$prepare = "INSERT INTO task (date, content) VALUES (:date, :content)"; // Storing the request in a string variable
				$add = $db->prepare($prepare); // Preparing the request
				$add->bindValue(':date', $date);
				$add->bindValue(':content', $content);	
				$add->execute(); // Executing the request
			}
		//  http://127.0.0.1:8888/todo-list/php/tasks_action.php?action=add&content=Bonjour 

		break;

		case "update":
			// Editing an element
			if (isset($_GET["id"]) && isset($_GET["edit-content"])) { // Checking if "id" and "content" exists as a GET parameter
				$content = htmlspecialchars($_GET["edit-content"]); // Grabbing their values (+ SQL injection proofing the content)
				$content = $db->quote($content);
				$id = $_GET["id"];
			/*	$date = $_GET["edit-date"];
				$date = substr($date, 0, -3);
				$date = $db->quote($date); */
				$date = "2019-03-22 00:00:00";
				$prepare = "UPDATE task SET content = :content, date = :date WHERE id = :id";
				$add = $db->prepare($prepare); // Preparing the request
				$add->bindValue(':content', $content);
				$add->bindValue(':date', $date);
				$add->bindValue(':id', $id);
				try {
					$add->execute(); // Executing the request
				} catch(PDOException $e) { // If the database connection failed...
				    echo $e->getMessage(); // ...throw and error message
				}
			}
			// http://127.0.0.1:8888/todo-list/php/tasks_action.php?action=update&id=7&edit-content=image
			break;
			
		case "remove":
			// Removing an element
			if (isset($_GET["id"])) { // Checking if "id" exists as a GET parameter
				$id = $_GET["id"]; // Grabbing its value
				$remove = $db->prepare("DELETE FROM task WHERE id = :id"); // Preparing the request
				$remove->bindValue(":id", $id); // Binding values
				$remove->execute(); // Executing the request
			}
			// http://127.0.0.1:8888/todo-list/php/tasks_action.php?action=remove&id=9
			break;
	}
}

?>