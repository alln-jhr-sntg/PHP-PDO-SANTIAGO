<?php 
    // connect to the database
    $host="localhost";
    $user="root";
    $password="";
    $dbname="school_db";

    //data source name
    $dsn="mysql:host=$host;dbname=$dbname";
    
    $conn = new PDO($dsn, $user, $password);

    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    // Uncomment the desired query block to execute
    
    /* INSERT query
    $student_name = "Xi Jinping";
    $date = "2025-04-04";
    $status = "Present";

    $sql = "INSERT INTO attendance (student_name, date, status) VALUES (:student_namez, :datez, :statusz)";
    $statement = $conn->prepare($sql);
    $statement->execute([
        ':student_namez' => $student_name,
        ':datez' => $date,
        ':statusz' => $status
    ]);
    // Check if the attendance was added successfully
    if ($statement->rowCount() > 0) {
        echo "Attendance added successfully!";
    } else {
        echo "Failed to add attendance.";
    }
    */

    /* SELECT query
    $statement = $conn->query("SELECT * FROM attendance");
    $records = $statement->fetchAll(PDO::FETCH_OBJ);
    foreach($records as $record) {
        echo "Student Name: " . $record->student_name . "<br />";
        echo "Date: " . $record->date . "<br />";
        echo "Status: " . $record->status . "<br /><br />";
    } 
    */

    /* UPDATE query
    $student_name = "Xi Jinping";
    $new_status = "Absent";

    $sql = "UPDATE attendance SET status = :new_statusz WHERE student_name = :student_namez";
    $statement = $conn->prepare($sql);
    $statement->execute([
        ':new_statusz' => $new_status,
        ':student_namez' => $student_name
    ]);
    // Check if the attendance was updated successfully
    if ($statement->rowCount() > 0) {
        echo "Attendance updated successfully!";
    } else {
        echo "Failed to update attendance.";
    }
    */

    /* DELETE query
    $id_delete = 1;
    $sql = "DELETE FROM attendance WHERE id = :idz";
    $statement = $conn->prepare($sql);
    $statement->execute([':idz' => $id_delete]);
    // Check if the attendance was deleted successfully
    if ($statement->rowCount() > 0) {
        echo "Attendance deleted successfully!";
    } else {
        echo "Failed to delete attendance.";
    }
    */

?>