<?php
session_start();
require_once "./models/Genre.php";
require_once "./models/Traits.php";
class Movie
{
    use Rating;
    public $title;
    public $length;
    public $release_year;
    public $genres = [];
    public $cover;
    protected $session_key;

    public function __construct($_title, $_length, $_release_year, array $_genres, $cover, $session_key)
    {
        $this->title = $_title;
        $this->length = $_length;
        $this->release_year = $_release_year;
        $this->genres = $_genres;
        $this->cover = $cover;
        if (isset($_SESSION[$session_key])) {
            $this->setRating($_SESSION[$session_key]);
        }

        $this->session_key = $session_key;
    }

    public function displayInfo()
    {
        echo "<div>";
        echo "<img src='" . $this->cover . "' class='w-50'><br>";
        echo "Title: " . $this->title . "<br>";
        echo "Length: " . $this->length . " minutes<br>";
        echo "Release Date: " . $this->release_year . "<br>";
        echo "Rating: " . $this->getRating() . "<br>";
        echo "Genre: ";
        foreach ($this->genres as $index => $genre) {
            echo $genre->getName();
            if ($index < count($this->genres) - 1) {
                echo ", ";
            };
        };
        echo "</div>";
    }

    public function saveRatingToSession()
    {
        $_SESSION[$this->session_key] = $this->rating;
    }
}
