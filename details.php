<?php
require_once 'config.php';

if (isset($_GET['movie'])) {
    $movieId = $_GET['movie'];

    $sql = "SELECT * FROM movies WHERE id = $movieId";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $movie = $result->fetch_assoc();

        echo "<h2>Movie Details</h2>";
        echo "<p>Title: " . $movie['mname'] . "</p>";

    } else {

        echo "Movie not found.";
    }
} else {

    echo "Invalid request.";
}
?>
