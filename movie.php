<?php 
    // connect to the database
    $host="localhost";
    $user="root";
    $password="";
    $dbname="video_store";

    //data source name
    $dsn="mysql:host=$host;dbname=$dbname";
    
    $conn = new PDO($dsn, $user, $password);

    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    // Uncomment the desired query block to execute

    /*INSERT query
    $title = "Frozen";
    $director = "Chris Buck, Jennifer Lee";
    $release_year = "2013";
    $available = 0; // 1 for available, 0 for not

    $sql = "INSERT INTO movies (title, director, release_year, available) VALUES (:titlez, :directorz, :release_yearz, :availablez)";
    $statement = $conn->prepare($sql);
    $statement->execute([
        ':titlez' => $title,
        ':directorz' => $director,
        ':release_yearz' => $release_year,
        ':availablez' => $available
    ]);
    // Check if the movie was added successfully
    if ($statement->rowCount() > 0) {
        echo "Movie added successfully!";
    } else {
        echo "Failed to add movie.";
    }
    */

    /* SELECT query
    $statement = $conn->query("SELECT * FROM movies");
    $movies = $statement->fetchAll(PDO::FETCH_OBJ);
    foreach($movies as $movie) {
        echo "Title: " . $movie->title . "<br />";
        echo "Director: " . $movie->director . "<br />";
        echo "Release Year: " . $movie->release_year . "<br />";
        echo "Available: " . ($movie->available ? 'Yes' : 'No') . "<br /><br />";
    }
    */

    /* UPDATE query
    $title = "How to Train Your Dragon";
    $new_availability = 1; // 1 for available, 0 for not

    $sql = "UPDATE movies SET available = :availablez WHERE title = :titlez";
    $statement = $conn->prepare($sql);
    $statement->execute([
        ':availablez' => $new_availability,
        ':titlez' => $title
    ]);
    // Check if the movie was updated successfully
    if ($statement->rowCount() > 0) {
        echo "Movie updated successfully!";
    } else {
        echo "Failed to update movie.";
    }
    */

    /* DELETE query
    $id_delete = 2;

    $sql = "DELETE FROM movies WHERE id = :idz";
    $statement = $conn->prepare($sql);
    $statement->execute([':idz' => $id_delete]);
    // Check if the movie was deleted successfully
    if ($statement->rowCount() > 0) {
        echo "Movie deleted successfully!";
    } else {
        echo "Failed to delete movie.";
    }
    */
?>