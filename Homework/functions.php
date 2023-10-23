<?php
function checkAge($age)
{
    return is_numeric($age) && (int) $age <99 && (int) $age >= 0;
}
function printMovies(array $movies)
{
    echo "Вашему вниманию список фильмов:\n";
//    for ($i=0; $i<count($movies); $i++)
//    {
//        echo formatMovie($i, $movies[$i]);
//    }
    foreach ($movies as $id=>$movie)
    {
        echo formatMovie($id, $movie);
    }
}
function formatMovie($movieId, array $movie)
{
    return "$movieId. $movie[title] ($movie[release_year]), $movie[age_restriction]+. Rating - $movie[rating]\n";
}