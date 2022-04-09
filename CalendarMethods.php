<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$queries = array();
parse_str($_SERVER['QUERY_STRING'], $queries);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $queries["function"] == "addStudent") {
    addStudent($_POST["studentFullName"]);
} else if ($_SERVER['REQUEST_METHOD'] == 'POST' && $queries["function"] == "removeStudent") {
    removeStudent($_POST["studentFullName"]);
} else if ($_SERVER['REQUEST_METHOD'] == 'GET' && $queries["function"] == "getStudents") {
    getStudents();
}

function addStudent($studentFullName)
{
    $db = new mysqli('127.0.0.1', 'root', null, 'lessons');
    if (mysqli_connect_errno()) {
        echo '<p>Error: Could not connect to database.<br/>Please try again later.</p>';
    } else {
        $query = "INSERT INTO student (studentFullName) VALUES (?);";
        $stmt = $db->prepare($query);
        $stmt->bind_param("s", $studentFullName);
        $stmt->execute();
        $stmt->close();
        $db->close();
    }
    header('Content-type: application/json');
    echo json_encode([]);
}

function removeStudent($studentFullName)
{
    $db = new mysqli('127.0.0.1', 'root', null, 'lessons');
    if (mysqli_connect_errno()) {
        echo '<p>Error: Could not connect to database.<br/>Please try again later.</p>';
    } else {
        $query = "DELETE FROM student where studentFullName = ?;";
        $stmt = $db->prepare($query);
        $stmt->bind_param("s", $studentFullName);
        $stmt->execute();
        $stmt->close();
        $db->close();
    }
    header('Content-type: application/json');
    echo json_encode([]);
}

function getStudents()
{
    $db = new mysqli('127.0.0.1', 'root', null, 'lessons');
    if (mysqli_connect_errno()) {
        echo '<p>Error: Could not connect to database.<br/>Please try again later.</p>';
    } else {
        $query = "SELECT studentFullName from Student";
        $results = mysqli_query($db, $query);

        $rows = [];

        while ($row = mysqli_fetch_assoc($results)) {
            $rows[] = $row;
        }
        $db->close();
        header('Content-type: application/json');
        echo json_encode($rows);
    }
}
