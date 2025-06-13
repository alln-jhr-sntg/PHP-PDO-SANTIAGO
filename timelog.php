<?php
// connect to the database
    $host="localhost";
    $user="root";
    $password="";
    $dbname="company_db";

    //data source name
    $dsn="mysql:host=$host;dbname=$dbname";
    
    $conn = new PDO($dsn, $user, $password);

    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    // Uncomment the desired query block to execute

    /* INSERT query
    $employee_name = "Caesar Zeppeli";
    $log_date = "2025-04-04";
    $log_time = "21:39:48";
    $type = "OUT";

    $sql = "INSERT INTO timelogs (employee_name, log_date, log_time, type) VALUES (:employee_namez, :log_datez, :log_timez, :typez)";
    $statement = $conn->prepare($sql);
    $statement->execute([
        ':employee_namez' => $employee_name,
        ':log_datez' => $log_date,
        ':log_timez' => $log_time,
        ':typez' => $type
    ]);
    // Check if the log was added successfully
    if ($statement->rowCount() > 0) {
        echo "Log added successfully!";
    } else {
        echo "Failed to add log.";
    }
    */

    /* SELECT query
    $statement = $conn->query("SELECT * FROM timelogs");
    $timelogs = $statement->fetchAll(PDO::FETCH_OBJ);
    foreach ($timelogs as $timelog) {
        echo "Employee Name: " . $timelog->employee_name . "<br />";
        echo "Log Date: " . $timelog->log_date . "<br />";
        echo "Log Time: " . $timelog->log_time . "<br />";
        echo "Type: " . $timelog->type . "<br /> <br />"; 
    }
    */

    /* UPDATE query
    $employee_name = "Dio Brando";
    $new_type = "OUT";

    $sql = "UPDATE timelogs SET type = :new_typez WHERE employee_name = :employee_namez";
    $statement = $conn->prepare($sql);
    $statement->execute([
        ':new_typez' => $new_type,
        ':employee_namez' => $employee_name
    ]);
    // Check if the log was updated successfully
    if ($statement->rowCount() > 0) {
        echo "Log updated successfully!";
    } else {
        echo "Failed to update log.";
    }
    */

    /* DELETE query
    $id_delete = 1;

    $sql = "DELETE FROM timelogs WHERE id = :idz";
    $statement = $conn->prepare($sql);
    $statement->execute([
        ':idz' => $id_delete
    ]);
    // Check if the log was deleted successfully
    if ($statement->rowCount() > 0) {
        echo "Log deleted successfully!";
    } else {
        echo "Failed to delete log.";
    }
    */
?>