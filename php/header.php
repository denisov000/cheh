<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
   <title>Guides 4 You</title>
</head>
<body>
    <header>
        <div class="logo"><span>Gu<span class="sp">!</span>des 4 U</span></div>
        <nav>
            <a href="">Home</a>
            <a href="">SignIn</a>
            <a href="">Register</a>
        </nav>
    </header>
<?php
    $f_json = 'php/games.json';
    $json = file_get_contents("$f_json");
    $games = json_decode($json,true);
?>