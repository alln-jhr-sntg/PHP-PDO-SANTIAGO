<?php 
    // connect to the database
    $host="localhost";
    $user="root";
    $password="";
    $dbname="library_db";

    //data source name
    $dsn="mysql:host=$host;dbname=$dbname";
    
    $conn = new PDO($dsn, $user, $password);

    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    // Uncomment the desired query block to execute

    /*INSERT query
    $title = "Scout's Guide to the Galaxy";
    $author = "Douglas Adams";
    $genre = "Science Fiction";
    $published_year = "1979";

    $sql = "INSERT INTO books (title, author, genre, published_year) VALUES (:titlez, :authorz, :genrez, :published_yearz)";
    $statement = $conn->prepare($sql);

    $statement->execute([
        ':titlez' => $title,
        ':authorz' => $author,
        ':genrez' => $genre,
        ':published_yearz' => $published_year
    ]);
    // Check if the book was added successfully
    if ($statement->rowCount() > 0) {
        echo "Book added successfully!";
    } else {
        echo "Failed to add book.";
    }
    */

    /* SELECT query
    $statement = $conn->query("SELECT * FROM books");
    $books = $statement->fetchAll(PDO::FETCH_OBJ);
    foreach($books as $book) {
        echo "Title: " . $book->title . "<br />";
        echo "Author: " . $book->author . "<br />";
        echo "Genre: " . $book->genre . "<br />";
        echo "Published Year: " . $book->published_year . "<br /><br />";
    }
    */

    /* UPDATE query
    $author = "Douglas Adams";
    $new_title = "The Hitchhiker's Guide to the Galaxy";

    $sql = "UPDATE books SET title = :titlez WHERE author = :authorz";
    $statement = $conn->prepare($sql);
    $statement->execute([
        ':titlez' => $new_title,
        ':authorz' => $author
    ]);
    // Check if the book was updated successfully
    if ($statement->rowCount() > 0) {
        echo "Book updated successfully!";
    } else {
        echo "Failed to update book.";
    }
    */

    /* DELETE query
    $id_delete = 4;
    
    $sql = "DELETE FROM books WHERE id = :idz";
    $statement = $conn->prepare($sql);
    $statement->execute([':idz' => $id_delete]);
    // Check if the book was deleted successfully
    if ($statement->rowCount() > 0) {
        echo "Book deleted successfully!";
    } else {
        echo "Failed to delete book.";
    }
    */
?>