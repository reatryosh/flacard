<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/styleLayout.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

<!--header
    need to call it in every php file so it constantly shows up
-->
<nav id="navbar">
        <div>
        <a href="index.php" class="brand">Flacard</a>
        </div>
        <div class="search-bar-submit">
        <input class="search-bar" type="text" placeholder="Search...">
        <button class="submit" type="submit"><span class="material-symbols-outlined">search</span></button>
        </div>
        <ul>
            <li><a href="#">About</a></li>
            <li><a href="signin.php">Sign Up</a></li>
        </ul>
    </nav>
    <script type="text/javascript" src="js/nav-scroll.js"></script>
</body>
</html>