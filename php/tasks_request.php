<?php
header('Access-Control-Allow-Origin: *');
require("bdd.php");

$request = $db->prepare("SELECT * FROM task"); // Preparing the request to grab everything from the task table
$request->execute(); 
// http://127.0.0.1:8888/todo-list/php/tasks_request.php

$response = $request->fetchAll(PDO::FETCH_ASSOC); // Fetching data from the request

echo json_encode($response); // Encoding it in JSON and sending it back to the AJAX script for display

?>