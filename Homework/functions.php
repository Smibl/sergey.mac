<?php

function printMovies($movies)
{
    echo "Вашему вниманию список фильмов:\n";
    $movieId = 0;
    foreach ($movies as $movie)
    {
        $movieId ++;
        echo formatMovies($movieId, $movie);
    }
}

function formatMovies($movieId, array $movie)
{
    return "$movieId. $movie[title] ($movie[release_year]), $movie[age_restriction]+. Rating - $movie[rating]\n";
}