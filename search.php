<?php
$movieImages = array(
    'Doka' => 'movies/doka.jpg',
    'Kiya' => 'movies/kiya.jpg',
    'Kerbe' => 'movies/kerbe.jpg',
    'Taza' => 'movies/taza.jpg',
    'Rebuni' => 'movies/rebuni.jpg',
    'Adinas' => 'movies/adinas.jpg',
    'Ensaro' => 'movies/ensaro.jpg',
    'Sumalew Vandam' => 'movies/sumalew.jpg',
    'Min Alesh' => 'movies/min.jpg',
    'Teza' => 'movies/teza.jpg',
    'Ye Balsltan Lej' => 'movies/balsltan.jpg',
    'Hdar' => 'movies/hdar.jpg',
    'Semayawi' => 'movies/semayawi.jpg',
    'Ye Chewa Lej' => 'movies/chewa.jpg',
    'Chmein De Fer' => 'movies/chemindefer.jpg'
);

$movieName = $_POST['movieName'];

$searchResultImages = array();

foreach ($movieImages as $title => $imagePath) {
    if (stripos($title, $movieName) !== false) {
        $searchResultImages[] = $imagePath;
    }
}

if (!empty($searchResultImages)) {
    echo '<div class="search-results">';
    foreach ($searchResultImages as $imagePath) {
        echo "<img src='$imagePath' alt='Movie Image'>";
    }
    echo '<button class="exit-button" onclick="exitSearch()">Exit</button>';
    echo '</div>';
} else {
    echo "<p>No results found.</p>";
}
?>
<html>
    <style>
.search-results {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center; 
    position: absolute;
    top: 500%;
    left: 50%; 
    transform: translate(-50%, -50%); 
    z-index: 999; 
    background-color: #ffffff; 
    border: 1px solid #000000; 
    padding: 20px; 
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.search-results img {
    width: 400px; 
    height: auto; 
    margin: 10px;
}

.exit-button {
    position: absolute;
    top: 10px; 
    right: 10px; 
    z-index: 9999; 
    background-color: #ffffff; 
    color: #000000; 
    border: 1px solid #000000; 
    padding: 5px 10px; 
    cursor: pointer; 
    border-radius: 5px; /
    
}


