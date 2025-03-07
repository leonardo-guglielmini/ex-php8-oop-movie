<?php
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
    protected $title;
    protected $length;
    protected $release_year;
    protected $genre;

    public function __construct($_title, $_length, $_release_year, Genre $_genre)
    {
        $this->title = $_title;
        $this->length = $_length;
        $this->release_year = $_release_year;
        $this->genre = $_genre;
    }

    public function displayInfo()
    {
        echo "Title: " . $this->title . "<br>";
        echo "Length: " . $this->length . " minutes<br>";
        echo "Release Date: " . $this->release_year . "<br>";
        echo "Genre: " . $this->genre->getName() . "<br>";
    }
}

$movie1 = new Movie("The Matrix", 136, "1999", new Genre("Sci-fi", "Science fiction movies are films that tell stories about the future, outer space, robots, or aliens, often using special effects to depict these elements."));
$movie2 = new Movie("The Hobbit", 169, "2012", new Genre("Fantasy", "The fantasy movie genre features magical worlds, mythical creatures, and epic adventures. It often explores good versus evil, destiny, and heroism in imaginative settings."))
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

</body>

</html>