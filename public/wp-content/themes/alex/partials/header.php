<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Slabo+13px&display=swap" rel="stylesheet"> 
    <title>Alex Mayer</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

        <header>
        
                <nav>
                    <h1><a>Alex Mayer</a></h1>
                    <a href="#" class="toggleNav"><span> &#9776;</span></a>
                    <ul>
                        <li><a href="./index.php">Start</a></li>
                        <li><a>Leistungen</a></li>
                        <li><a>Blog</a></li>
                        <li><a href="./about.php">Über mich</a></li>
                        <li><a>Kontakt</a></li>
                    </ul>
                </nav>


                <section class="hero__<?php echo $section ?>">
