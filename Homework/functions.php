<?php
function checkAge($age)
{
    return is_numeric($age) && (int) $age <99 && (int) $age >= 0;
}
function printMovies($movies)
{
    echo "Вашему вниманию список фильмов:\n";
    $movieId = 0;
    foreach ($movies as $movie)
    {
        $movieId ++;
        echo formatMovie($movieId, $movie);
    }
}
function formatMovie($movieId, array $movie)
{
    return "$movieId. $movie[title] ($movie[release_year]), $movie[age_restriction]+. Rating - $movie[rating]\n";
}