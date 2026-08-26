<?php

$menu = [
    "HOME",
    "WEBDESIGN",
    "INTERNET",
    "COMPUTADORES",
    "PROGRAMAÇÃO",
    "SCRIPTS",
    "NOTÍCIAS",
    "DOWNLOADS",
    "TUTORIAIS",
    "CONTATO"
];

echo "
<div style='
    background-color: #222;
    padding: 10px;
    text-align: center;
'>
";

foreach ($menu as $item) {

    echo "
        <a href='#' style='
            color: white;
            text-decoration: none;
            margin: 0 8px;
            font-size: 12px;
        '>
            $item
        </a>
    ";
}

echo "</div>";

?>