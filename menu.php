<!DOCTYPE html>
<html>

<head>
    <title>L'antre du Truc</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="shortcut icon" href="/media/icone.ico">
</head>

<body>
    <div class="head">
        <h1 class="title">L'antre du Truc</h1>
        <div class="topnav">
            <a href="/index.php" id="index">Accueil</a>
            <a href="/news.php" id="news">News</a>
            <a href="/box.php" id="box">La boite a Truc</a>
            <a href="/about.php" id="about">A propos</a>
            <a href="/page1.php" id="php1">Page PHP</a>
        </div>
    </div>

    <script>
        var path = window.location.pathname;
        var page = path.split("/").pop();

        if (page == "index.php") {
            document.getElementById("index").style.backgroundColor = "#011F26";
            document.getElementById("index").style.color = "white";
        } else if (page == "news.php") {
            document.getElementById("news").style.backgroundColor = "#011F26";
            document.getElementById("news").style.color = "white";
        } else if (page == "box.php") {
            document.getElementById("box").style.backgroundColor = "#011F26";
            document.getElementById("box").style.color = "white";
        } else if (page == "about.php") {
            document.getElementById("about").style.backgroundColor = "#011F26";
            document.getElementById("about").style.color = "white";
        }
    </script>
    <div id="body">
