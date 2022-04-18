<?php

if ($_SERVER['REQUEST_URI'] === '/') {
    echo ('<a href="/welcome">welcome</a>
    <br>
    <a href="/not-found">not-found</a>');
} elseif ($_SERVER['REQUEST_URI'] === '/welcome') {
    echo ('<a href="/">main</a>');
} else {
    echo ('Page not found. <a href="/">main</a>');
    http_response_code(404);
}

echo "<br>";
echo "СЕРВЕРНАЯ ИНФОРМАЦИЯ:";
echo "<br>";
echo "<br>";
vardump($_SERVER);
echo "<br>";
echo "<br>";
echo "GET-МАССИВ:";
echo "<br>";
echo "<br>";
vardump($_GET);


function vardump($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}
