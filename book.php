<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "movies-booking") or die("Couldn't connect");

function sanitizeInput($input)
{
    global $conn;
    return mysqli_real_escape_string($conn, $input);
}

function displayError($message)
{
    echo "<h3 style='text-align: center; color: #e74c3c;'>$message</h3>";
}

function displaySuccessAndRedirect($message, $redirectLocation)
{
    echo "<h3 style='text-align: center; color: #4caf50; font-weight:bold; font-size:30px;'>$message</h3>";
    echo "<p style='text-align: center; font-weight:bold;'>You will be redirected shortly...</p>";
    header("refresh:5;url=$redirectLocation");
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('movies/mov.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        h2 {
            text-align: center;
            color: black;
            font-size: 30px;
            padding: 10px;
            font-weight: bold;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form select,
        form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        form input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            box-sizing: border-box;
            background-color: rgba(76, 68, 182, 0.808);
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: rgba(76, 68, 182, 0.808);
        }
        .message{
    text-align: center;
    background: #f9eded;
    padding: 10px 0px;
    border:1px solid #699053;
    border-radius: 5px;
    margin-bottom: 10px;
    color: red;
}
    </style>
</head>

<body>

    <h2>Book a Ticket</h2>


    <form action="" method="post"><img style="width: 350px; height:190px; margin-left:40px; margin-right:50px; " src="images/ticket.png" alt=""><br><br>
        Movie Title:
        <select name="movie_title">
            <?php
            $movieQuery = "SELECT DISTINCT title FROM moviess";
            $movieResult = mysqli_query($conn, $movieQuery);
            if (!$movieResult) {
                die("Error executing the query: " . mysqli_error($conn));
            }
            while ($row = mysqli_fetch_assoc($movieResult)) {
                print_r($row);
                echo "<option value='" . $row['title'] . "'>" . $row['title'] . "</option>";
            }
            ?>
        </select>

        <br> Screening Time:
        <select name="screening_time" required>
            <option value="">Select Time</option>
            <option value="10:00am">10:00Am</option>
            <option value="8:00am">8:00Am</option>
            <option value="3:00am">3:00Am</option>
        </select>

        <br> Seats: <input type="text" name="seats" required>
        <br> Customer Name: <input type="text" name="customer_name" autocomplete="on" required>
        <br> Customer Email: <input type="text" name="customer_email" required>
        <br> Customer Phone: <input type="text" name="customer_phone" required>
        <br>
        <input type="submit" value="Submit" name="submit">
        <br><br>
    </form>

    <?php
         include("config.php");
    $seats_available = true;
    if (isset($_POST['submit'])) {
        $movie_title = sanitizeInput($_POST['movie_title']);
        $screening_time = sanitizeInput($_POST['screening_time']);
        $seats = sanitizeInput($_POST['seats']);
        $customer_name = sanitizeInput($_POST['customer_name']);
        $customer_email = sanitizeInput($_POST['customer_email']);
        $customer_phone = sanitizeInput($_POST['customer_phone']);
        $result = mysqli_query($con,"SELECT * FROM users WHERE email='$customer_email' AND username='$customer_name'") or die("Select Error");
        $row = mysqli_fetch_assoc($result);
        if(is_array($row) && !empty($row)){
            $_SESSION['valid'] = $row['Email'];
            
        $insertQuery = "INSERT INTO book(movie_title, screening_time, seats, customer_name, customer_email, customer_phone)
        VALUES ('$movie_title', '$screening_time', '$seats', '$customer_name', '$customer_email', '$customer_phone')";
       if (mysqli_query($conn, $insertQuery)) {
           displaySuccessAndRedirect("Booking successful! Check your email for the booking confirmation.", "index.php");
       } else {
           displayError("Error: " . mysqli_error($conn));
       }
        }else{
            echo "<header><div class='message'>
              <p>Wrong email or username</p>
               </div> </header>";
        }

    }
    else{
        $conn->close();

    }


    ?>
</body>

</html>