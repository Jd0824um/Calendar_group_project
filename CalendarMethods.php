<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$queries = array();
parse_str($_SERVER['QUERY_STRING'], $queries);

if ($_SERVER['REQUEST_METHOD'] == 'GET' && $queries["function"] == "getStudents") {
    getStudents();
} else if ($_SERVER['REQUEST_METHOD'] == 'POST' && $queries["function"] == "addStudent") {
    addStudent();
} else if ($_SERVER['REQUEST_METHOD'] == 'POST' && $queries["function"] == "removeStudent") {
    removeStudent();
} else if ($_SERVER['REQUEST_METHOD'] == 'POST' && $queries["function"] == "addAppointment") {
    addAppointment();
} else if ($_SERVER['REQUEST_METHOD'] == 'POST' && $queries["function"] == "removeAppointment") {
    removeAppointment();
}

function addStudent()
{
    $db = new mysqli('127.0.0.1', 'root', null, 'lessons');
    if (mysqli_connect_errno()) {
        echo '<p>Error: Could not connect to database.<br/>Please try again later.</p>';
    } else {
        $query = "INSERT INTO student (studentFullName) VALUES (?);";
        $stmt = $db->prepare($query);
        $stmt->bind_param("s", $_POST["studentFullName"]);
        $stmt->execute();
        $stmt->close();
        $db->close();
    }
    header('Content-type: application/json');
    echo json_encode([]);
}

function removeStudent()
{
    $db = new mysqli('127.0.0.1', 'root', null, 'lessons');
    if (mysqli_connect_errno()) {
        echo '<p>Error: Could not connect to database.<br/>Please try again later.</p>';
    } else {
        $query = "DELETE FROM student WHERE studentFullName = ?;";
        $stmt = $db->prepare($query);
        $stmt->bind_param("s", $_POST["studentFullName"]);
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
        $query = "SELECT * FROM student s LEFT JOIN appointment a on s.studentID = a.studentID;";
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

function addAppointment()
{
    $db = new mysqli('127.0.0.1', 'root', null, 'lessons');
    if (mysqli_connect_errno()) {
        echo '<p>Error: Could not connect to database.<br/>Please try again later.</p>';
    } else {
        $query1 = "SELECT studentID FROM student WHERE studentFullName = ?;";
        $stmt1 = $db->prepare($query1);
        $stmt1->bind_param("s", $_POST["studentFullName"]);
        $stmt1->execute();
        $result = $stmt1->get_result();
        $student = $result->fetch_assoc();
        $stmt1->close();

        $query2 = "INSERT INTO appointment (studentID, appointmentNotes, appCreatedAt, timeFrom, timeTo, dateYear, dateMonth, dateDay) VALUES (?, ?, NOW(), ?, ?, ?, ?, ?);";
        $stmt2 = $db->prepare($query2);
        $stmt2->bind_param("isssiii", $student["studentID"], $_POST["appointmentNotes"], $_POST["timeFrom"], $_POST["timeTo"], $_POST["dateYear"], $_POST["dateMonth"], $_POST["dateDay"]);
        $stmt2->execute();
        $stmt2->close();
        $db->close();
    }
    header('Content-type: application/json');
    echo json_encode([]);
}

function removeAppointment()
{
    $db = new mysqli('127.0.0.1', 'root', null, 'lessons');
    if (mysqli_connect_errno()) {
        echo '<p>Error: Could not connect to database.<br/>Please try again later.</p>';
    } else {
        $query1 = "SELECT studentID FROM student WHERE studentFullName = ?;";
        $stmt1 = $db->prepare($query1);
        $stmt1->bind_param("s", $_POST["studentFullName"]);
        $stmt1->execute();
        $result = $stmt1->get_result();
        $student = $result->fetch_assoc();
        $stmt1->close();

        $query2 = "DELETE FROM appointment WHERE studentID = ? AND appointmentNotes = ? AND timeFrom = ? AND timeTo = ? AND dateYear = ? AND dateMonth = ? AND dateDay = ?;";
        $stmt2 = $db->prepare($query2);
        $stmt2->bind_param("isssiii", $student["studentID"], $_POST["appointmentNotes"], $_POST["timeFrom"], $_POST["timeTo"], $_POST["dateYear"], $_POST["dateMonth"], $_POST["dateDay"]);
        $stmt2->execute();
        $stmt2->close();
        $db->close();
    }
    header('Content-type: application/json');
    echo json_encode([]);
}
