<?php
class Movie
{
    protected $title;
    protected $length;
    protected $release_year;

    public function __construct($_title, $_length, $_release_year)
    {
        $this->title = $_title;
        $this->length = $_length;
        $this->release_year = $_release_year;
    }

    public function displayInfo()
    {
        echo "Title: " . $this->title . "<br>";
        echo "Length: " . $this->length . " minutes<br>";
        echo "Release Date: " . $this->release_year . "<br>";
    }
}

$movie1 = new Movie("The Matrix", 136, "1999");
$movie2 = new Movie("The Hobbit", 169, "2012")
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