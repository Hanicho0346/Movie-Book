<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
     <nav>
         <a href="#" class="logo">EthioMovies <i class="fa fa-video-camera "aria-hidden="true"></i></a>
         <div class="search-container">
        <form id="search" class="form-inline">
            <label class="sr-only" for="movie-name">Name</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="movie-name" placeholder="Search movie title...">
            <button type="button" id="srch-btn">Search</button>
            <div class="search-results"  id="searchResults">
    <button class="exit-button" onclick="exitSearch()" style="display: none;">Exit</button>
</div>
        </form>
    </div>
    <div id="result"></div>
         <a href="#contact" class="contact">Contact Us</a>
         <a href="adminlog.php" class="submits">Submit</a>

     </nav>

    <div class="banner">
         <div class="content doka active">
                 <img src="movies/doka.jpg" alt="" class="movie-title"><br>
                <h4>
                     <span>2023</span><span><i>15+</i></span><span>1hr 33min</span><span>Drama </span>
                </h4>
                <p>
                    Story about A young nurse saves a little girl from a deadly conflict zone,
                    then soon finds herself in the center of the conflict.
                </p>
                <div class="button">
                     <a href="Log.php" >Get Ticket</a>
                </div>
         </div>

        <div class="content KIYA ">
            <img src="movies/kiya.jpg" alt="" class="movie-title">
                <h4>
                    <span>2019</span><span><i>15+</i></span><span>1hr 45min</span><span>Drama Romance</span>
                </h4>
                <p>
                     A young couple find love while studying in school but 
                     suddenly lose it due to unexpected circumstances. After some years and having lost touch, 
                     the woman seems to have accepted the situation and moved on and found another love but the 
                     man has yet to give up on finding her again.
                </p>
            <div class="button">
                <a href="Log.php" > Get Ticket</a>
            </div>
        </div>

        <div class="content kerbe ">
            <img src="movies/kerbe.jpg" alt="" class="movie-title">
            <h4>
                  <span>2021</span><span><i>15+</i></span><span>1hr 45min</span><span>Drama Crime</span>
            </h4>
            <p>
                  A story about family's life turned upside down after welcoming an uncle when he sexually assaults
                 the young daughter. It evolves around how society's perception and pressure has divided the 
                 family apart in bringing the man forward to the authorities.
            </p>
            <div class="button">
              <a href="Log.php">Get Ticket</a>
            </div>
        </div>

        <div class="content TAZA">
            <img src="movies/taza.jpg" alt="" class="movie-title">
            <h4>
              <span>2017</span><span><i>15+</i></span><span>1hr 51min</span><span>Drama Romance</span>
          </h4>
          <p>
              A Story about the power of love and the tragedy of war in the context of the Derg era's socio-economic
              and political realities. Culture, economic hardship, nationalism, and altruism are also among the themes
              that surface in the movie.
          </p>
          <div class="button">
              <a href="Log.php"> Get Ticket</a>

          </div>
        </div>
          <div class="content rebuni">
            <img src="movies/rebuni.jpg" alt="" 
            class="movie-title">
            <h4>
                <span>2015</span><span><i>13+</i></span><span>1hr 53min</span><span>Drama</span>
            </h4>
            <p>
                Story about A wealthy businessman tries to buy land for a new factory, but develops a complicated
                relationship with the young woman who owns the land.
            </p>
            <div class="button">
                <a href="Log.php"> Get Ticket</a>
  
            </div>
          </div>
      
       
        <div class="content adinas">
          <img src="movies/adinas.jpg" alt="" 
          class="movie-title">
          <h4>
              <span>2023</span><span><i>15+</i></span><span>1hr 33min</span><span>Drama Romance</span>
          </h4>
          <p>
              Story about A girl plays an intellectual woman (Elleni) who is educated abroad
              and comes back to Ethiopia to run her father's leather company. The film, focuses on the struggle Elleni 
              is confronted with as she attempts this miscalculated social experiment.
          </p>
          <div class="button">
              <a href="Log.php"> Get Ticket</a>

          </div>
        </div>
        <div class="content ensaro">
          <img src="movies/ensaro.jpg" alt="" 
          class="movie-title">
          <h4>
              <span>2020</span><span><i>16+</i></span><span>1hr 48min</span><span>Drama Suspense</span>
          </h4>
          <p>
              Story about A man and woman visited a countryside province from Addiss Ababa. Meanwhile,
              the man suddenly met with his enemy, who had been waiting for a long time to revenge on him.
          </p>
          <div class="button">
              <a href="Log.php"> Get Ticket</a>
          </div>
        </div>
        <div class="content sumalew-vandam">
          <img src="movies/sumalew.jpg" alt="" 
          class="movie-title">
          <h4>
              <span>2018</span><span><i>16+</i></span><span>1hr 42min</span><span>Drama Comedy</span>
          </h4>
          <p>
              Story about after a belligerent man dies,his doppelganger takes the responsibility to raise his child.
          </p>
          <div class="button">
              <a href="Log.php"> Get Ticket</a>

          </div>
        </div>
         <div class="content min-alesh ">
          <img src="movies/min.jpg" alt="" 
          class="movie-title">
          <h4>
              <span>2019</span><span><i>15+</i></span><span>1hr 24min</span><span>Drama Sport</span>
          </h4>
          <p>
              Story set in Merkato, a sprawling market in Addiss Ababa,Ethiopia, 
              considered to be Africa's largest open-air market, narrating the story of a girl,
              Selam, whose kindness and perseverance transforms her life for the better.
          </p>
          <div class="button">
              <a href="Log.php"> Get Ticket</a>

          </div>
        </div>

        <div class="carousel-box">
            <div class="carousel">
                <div class="carousel-item ">
                    <img src="movies/doka.jpg" alt="" onclick="changeBg('doka.jpg','doka','');">
                </div>
                <div class="carousel-item">
                    <img src="movies/kiya.jpg" alt="" onclick="changeBg('bg-kiya.jpg','KIYA','');">
                </div>
                <div class="carousel-item">
                    <img src="movies/kerbe.jpg" alt="" onclick="changeBg('bg-kerbe.jpg','kerbe','');">
                </div>
                <div class="carousel-item">
                    <img src="movies/taza.jpg" alt="" onclick="changeBg('bg-taza.jpg','TAZA','');">
                </div>
                <div class="carousel-item">
                    <img src="movies/rebuni.jpg" alt="" onclick="changeBg('bg-rebuni.jpg','rebuni','');">
                </div>
                <div class="carousel-item">
                    <img src="movies/adinas.jpg" alt="" onclick="changeBg('bg-adinas.jpg','adinas','');">
                </div>
                <div class="carousel-item">
                    <img src="movies/ensaro.jpg" alt="" onclick="changeBg('bg-ensaro.jpg','ensaro','');">
                </div>
                <div class="carousel-item">
                    <img src="movies/sumalew.jpg" alt="" onclick="changeBg('bg-sumalew.jpg','sumalew-vandam','');">
                </div>
                <div class="carousel-item">
                    <img src="movies/min.jpg" alt="" onclick="changeBg('bg-min.jpg','min-alesh','');">
                </div>
            </div>
        </div>

         <a href="#" class="play"><i class="fa fa-play" aria-hidden="true"></i>Watch Trailer</a>
           
    </div>
  
<div class="trailer-player">
<video class="video" muted controls="true" >
<source src="" type="video/mp4">
</video>
<button class="close-button" onclick="closeTrailer();">Close</button>
</div>
<hr>
    <h3 style="margin-left:300px;">Recommended <span style="color:brown;">Movie</span> </h3>
<div class="movie-list">
        <div class="movie-card">
            <img src="movies/teza.jpg" alt="teza">
            <div class="movie-title">Teza</div>
            <p>Release date: April 28, 2010 <br>Genre: Drama </p>
            <p> </p>
        </div>
        <div class="movie-card">
            <img src="movies/balsltan.jpg" alt="balsiltan">
            <div class="movie-title">Ye Balsltan Lej</div>
            <p>Release date: April 28, 2021 <br>Genre: Drama </p>
            <p> </p>
        </div>
        <div class="movie-card">
            <img src="movies/hdar.jpg" alt="hdar">
            <div class="movie-title">Hdar</div>
            <p>Release date: April 28, 2021 <br>Genre: Drama </p>
            <p> </p>
        </div>
        <div class="movie-card">
            <img src="movies/semayawi.jpg" alt="semayawi">
            <div class="movie-title">Semayawi</div>
            <p>Release date: April 28, 2010  </p>
            <p>Genre: Drama </p>
        </div>
        <div class="movie-card">
            <img src="movies/chewa.jpg" alt="yechewa lej">
            <div class="movie-title">Ye Chewa Lej</div>
            <p>Release date: April 28, 2010 </p>
            <p>Genre: Drama </p>
        </div>
        <div class="movie-card">
            <img src="movies/chemindefer.jpg" >
            <div class="movie-title">Chmein De Fer</div>
            <p>Release date: May 02, 2019</p>
            <p>Genre: Drama </p>
            
        </div>
        <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $title = $_POST["movieTitle"];
        $releaseDate = $_POST["releaseDate"];
        $genre = $_POST["genre"];

        
        $imageFileName = $_FILES["imageUpload"]["name"];
        $imageTmpName = $_FILES["imageUpload"]["tmp_name"];
        $imageUploadPath = "movies/" . $imageFileName;
        move_uploaded_file($imageTmpName, $imageUploadPath);
    ?>
    <div id="addedMovie" class="movie-card">
        <img src="<?php echo htmlspecialchars($imageUploadPath); ?>" alt="<?php echo htmlspecialchars($title); ?>">
        <div class="movie-title"><?php echo $title; ?></div>
        <p>Release Date: <?php echo $releaseDate; ?></p>
        <p>Genre: <?php echo $genre; ?></p>
    </div>
    <?php
    }
    ?>
</div>
           
    <footer>  
   <div class="container">
            <div class="contact-info">
                <h3>Contact Us</h3>
                <p><i class="fas fa-envelope"></i> Email: info@ethiomovies.com</p>
                <p><i class="fas fa-phone"></i> Phone: +251 956 7890</p>
                <p><i class="fas fa-map-marker-alt"></i> Address: 123 Movie Street, Addis Ababa, Ethiopia</p>
            </div>
            <div class="social-icons">
                <h3>Connect with Us</h3>
                <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
     </div>
        <div class="copyright-info">
            <p>
                  2024 © <span> 
   <a href="#">ethiomovies.com </a></span> | All Rights Reserved.
 </p>
   </div>
    </footer>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="script/script.js"></script>
    <script src="script/submit.js"></script>
   <script>
   document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems, {}); 

  
});
    
    
      $(document).ready(function(){
        $('.carousel').carousel();
      });
    </script> 
    
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#srch-btn').click(function() {
            var movieName = $('#movie-name').val();

            
            $.ajax({
                url: 'search.php', 
                method: 'POST', 
                data: { movieName: movieName }, 
                success: function(response) {
                    $('#result').html(response); 
                },
                error: function(xhr, status, error) {
                    console.error(error); 
                }
            });
        });
    });
    function exitSearch() {
        $('.search-results').hide(); 
    }
    
    
</script>


</body>
</html>