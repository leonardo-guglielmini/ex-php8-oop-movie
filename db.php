<?php
$genre1 = new Genre("Sci-fi", "Science fiction movies are films that tell stories about the future, outer space, robots, or aliens, often using special effects to depict these elements.");
$genre2 = new Genre("Fantasy", "The fantasy movie genre features magical worlds, mythical creatures, and epic adventures. It often explores good versus evil, destiny, and heroism in imaginative settings.");
$genre3 = new Genre("Action", "An action movie is a genre characterized by its focus on thrilling, high-octane sequences involving physical action, often including violence, stunts, and chase scenes");
$genre4 = new Genre("Adventure", "The adventure movie genre features thrilling journeys, exploration, and heroic quests. It often includes action, danger, and discovery in exciting, exotic locations.");

$movie1 = new Movie("The Matrix", 136, "1999", [$genre1, $genre3], "the_matrix.png", "movie1_rating");
$movie2 = new Movie("The Hobbit", 169, "2012", [$genre2, $genre4], "the_hobbit.png", "movie2_rating");
