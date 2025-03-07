<?php

trait Rating
{
    protected $rating = 0;

    public function setRating($_rating)
    {
        if ($_rating >= 1 && $_rating <= 5) {
            $this->rating = $_rating;
        } else {
            throw new Exception("Invalid rating. Rating must be between 1 and 5.");
        }
    }
    public function getRating()
    {
        return $this->rating;
    }
}
class Genre
{
    protected $name;
    protected $description;

    public function __construct($_name, $_description)
    {
        $this->name = $_name;
        $this->description = $_description;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getDescription()
    {
        return $this->description;
    }
}

class Movie
{
    use Rating;
    protected $title;
    protected $length;
    protected $release_year;
    protected $genres = [];

    public function __construct($_title, $_length, $_release_year, array $_genres)
    {
        $this->title = $_title;
        $this->length = $_length;
        $this->release_year = $_release_year;
        $this->genres = $_genres;
    }

    public function displayInfo()
    {
        echo "Title: " . $this->title . "<br>";
        echo "Length: " . $this->length . " minutes<br>";
        echo "Release Date: " . $this->release_year . "<br>";
        echo "Rating: " . $this->rating . "<br>";
        echo "Genre: ";
        foreach ($this->genres as $index => $genre) {
            echo $genre->getName();
            if ($index < count($this->genres) - 1) {
                echo ", ";
            };
        };
        echo "<br>";
    }
}

$genre1 = new Genre("Sci-fi", "Science fiction movies are films that tell stories about the future, outer space, robots, or aliens, often using special effects to depict these elements.");
$genre2 = new Genre("Fantasy", "The fantasy movie genre features magical worlds, mythical creatures, and epic adventures. It often explores good versus evil, destiny, and heroism in imaginative settings.");
$genre3 = new Genre("Action", "An action movie is a genre characterized by its focus on thrilling, high-octane sequences involving physical action, often including violence, stunts, and chase scenes");
$genre4 = new Genre("Adventure", "The adventure movie genre features thrilling journeys, exploration, and heroic quests. It often includes action, danger, and discovery in exciting, exotic locations.");


$movie1 = new Movie("The Matrix", 136, "1999", [$genre1, $genre3]);
$movie2 = new Movie("The Hobbit", 169, "2012", [$genre2, $genre4]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP MOVIE</title>
</head>

<body>
    <?php
    $movie1->displayInfo();
    echo "<br>";
    $movie2->displayInfo();
    ?>
    <form action="index.php" method="POST">
        <label for="rating">Rate "The Matrix"</label>
        <input type="number" name="rating" min="1" max="5" required>
        <button type="submit">SET RATING</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rating = (int) $_POST["rating"];
        try {
            $movie1->setRating($rating);
            echo "<p>Rating set successfully! Current Rating: " . $movie1->getRating() . "</p>";
        } catch (Exception $e) {
            echo "<p style='color:red;'>Error: " . $e->getMessage() . "</p>";
        }
    }
    ?>
</body>

</html>