<?php
include 'database.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    if(isset($_POST['profile'])){
        $firstName=$_POST['firstname'];
        $lastName=$_POST['lastname'];
        $matric=$_POST['matric'];
        $department=$_POST['department'];
        $age=$_POST['age'];
        $college=$_POST['college'];
        $dateofbirth=$_POST['dateofbirth'];
    }

    // combining the first and last name into a name field
    $name = $data['firstname'] . ' ' . $data['lastname'];

    // Assuming you have a table named 'profile'
    $sql = "INSERT INTO profile (name, age, level, matricNo, department, college) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $data['name'], $data['age'], $data['level'], $data['matricNo'], $data['department'], $data['college']);

    if ($stmt->execute()) {
        echo json_encode(['message' => 'Record inserted successfully']);
    } else {
        echo json_encode(['error' => 'Error inserting record']);
    }

    $stmt->close();
} else {
    echo json_encode(['error' => 'Invalid request']);
}

$conn->close();