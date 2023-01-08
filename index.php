<?php
    include_once 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Flacard</title>
    <link rel="stylesheet" type="text/css" href="css/styleLayout.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<!--main file, shows the home and create
    will change, but for the meantime, this is what shows up
-->
<body>
    <section>
        <div class="home-create">
        <h1><a class="home-menu" href="index.php">Home</a></h1> 
        <h1> </h1>
        <h1><a class="create-menu" href="createcard.php">Create</a></h1>
        </div>
        <div class="width-find">
        <input class="find-bar" type="text" placeholder="Find...">
        </div>

        <!--will remove once the login works and when you could 
        create flashcards-->
        <div class="card">
            <div class="margin-card">
                <div class="vid-info">
                    <p class="title-of-created-cards">Lesson 2: Biology</p>
                    <button class="star"><span class="material-symbols-outlined">star</span></button>
                </div>
                <div class="idk">
                <div class="profile">
                    <img class="profile-pic" src="img/profile.jpeg">
                </div>
                <div class="column2">
                <p class="author">Nicole Clemente</p>
                <p class="stats">3.4k views &#183; a week ago</p>
                </div>
            </div>
        </div>
        </div>

        <div class="card">
            <div class="margin-card">
                <div class="vid-info">
                    <p class="title-of-created-cards">Lesson 8: Ruby</p>
                    <button class="star"><span class="material-symbols-outlined">star</span></button>
                </div>
                <div class="idk">
                <div class="profile">
                    <img class="profile-pic" src="img/profile.jpeg">
                </div>
                <div class="column2">
                <p class="author">Nicole Clemente</p>
                <p class="stats">2 views &#183; 2 months ago</p>
                </div>
            </div>
        </div>
        </div>

</section>

</body>

</html>
