<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Movie</title>
    <style>

body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ccc;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #eded;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="file"],
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            background-color: rgba(76,68,182,0.808);
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }
        button:hover {
            background-color: rgba(76,68,182,0.400);
        }
        h2 {
            text-align: center;
            margin-top: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 20px;
        }
        img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Add Movie</h1>
    <form id="addMovieForm" action="index.php" method="post" enctype="multipart/form-data">
        <label for="movieTitle">Movie Title:</label>
        <input type="text" id="movieTitle" name="movieTitle" required><br><br>
        <label for="releaseDate">Release Date:</label>
        <input type="text" id="releaseDate" name="releaseDate" required><br><br>
        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" required><br><br>
        <label for="imageUpload">Upload Image:</label>
        <input type="file" id="imageUpload" name="imageUpload" accept="image/*" required><br><br>
        <button type="submit">Add Movie</button>
    </form>

    <ul id="movieList">
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            foreach ($_FILES["imageUpload"]["name"] as $key => $value) {
                
                $title = $_POST["movieTitle"][$key];
                $releaseDate = $_POST["releaseDate"][$key];
                $genre = $_POST["genre"][$key];

                
                $imageFileName = $_FILES["imageUpload"]["name"][$key];
                $imageTmpName = $_FILES["imageUpload"]["tmp_name"][$key];
                $imageUploadPath = "movies/" . $imageFileName;
                move_uploaded_file($imageTmpName, $imageUploadPath);

                
                echo '<li class="movie-card">';
                echo '<img src="' . htmlspecialchars($imageUploadPath) . '" alt="' . htmlspecialchars($title) . '">';
                echo '<div class="movie-title">' . $title . '</div>';
                echo '<p>Release Date: ' . $releaseDate . '</p>';
                echo '<p>Genre: ' . $genre . '</p>';
                echo '</li>';
            }
        }
        ?>
    </ul>

   
</body>
</html>

