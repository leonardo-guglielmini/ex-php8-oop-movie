<?php
session_start();
?>

<?php
require_once "./models/Movie.php";
require_once "./db.php";
$ratingConfirm = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedMovie = $_POST["movie"];
    $rating = (int) $_POST["rating"];

    try {
        if ($selectedMovie == "The Matrix") {
            $movie1->setRating($rating);
            $movie1->saveRatingToSession();
        } elseif ($selectedMovie == "The Hobbit") {
            $movie2->setRating($rating);
            $movie2->saveRatingToSession();
        }
        $ratingConfirm =  "<p class='text-success'>Rating updated successfully!</p>";
    } catch (Exception $e) {
        $ratingConfirm = "<p style='color:red;'>Error: " . $e->getMessage() . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP OOP MOVIE</title>
</head>

<body>
    <div class="container text-center py-5">
        <div class="row">
            <div class="col">
                <?php
                $movie1->displayInfo();
                ?>
            </div>
            <div class="col">
                <?php
                $movie2->displayInfo();
                ?>
            </div>
        </div>
        <div class="p-5">
            <h2>Rate a Movie</h2>
            <form action="" method="POST" class="d-flex flex-column gap-1">
                <div>
                    <label for="movie">Choose a Movie:</label>
                    <select name="movie" required>
                        <option value="The Matrix">The Matrix</option>
                        <option value="The Hobbit">The Hobbit</option>
                    </select>
                </div>
                <div>
                    <label for="rating">Enter Rating (1-5):</label>
                    <input type="number" name="rating" min="1" max="5" required>
                </div>
                <div>
                    <button type="submit">Set Rating</button>
                </div>
            </form>
            <?php echo $ratingConfirm; ?>
        </div>
    </div>
</body>

</html>