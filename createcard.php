<?php
    include_once 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Flacard</title>
    <link rel="stylesheet" type="text/css" href="css/createcard.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
</head>

<body>

<section>

<div class="home-create">
        <h1><a class="home-menu" href="index.php">Home</a></h1>
        <h1> </h1>
        <h1><a class="create-menu" href="createcard.php">Create</a></h1>
        </div>

    <div class="title-desc-cards">
    <p style="font-size:35px; font-weight:bold; color:black; margin-top:12px; margin-bottom:15px">Create a new deck</p>
    <input type="text" id="input-creating-card">
    <br>
    <label class="creating-card">Title</label>
    <br>
    <br>
    <input type="text" id="input-creating-card">
    <br>
    <label class="creating-card">Description</label>
    <br>
    <p>Folder: </p>
    </div>

    <div class="additional-info-cards">
        <input type="file" onClick="alert('Testing')" value="Add Image">
    </div>

    <div class="box">
            <div>
                <h2 id="title-flacard">Flashcard</h2>
                <input type="text" placeholder="Term" class="margin">
                <div>
                </div>
                <br>
                <textarea id="term-description" rows="4" cols="70" placeholder="Add a description..."></textarea>
                <div class="center">
                <button onclick="change_text()"class="add-card">Add</button>
                </div>
                <br>
            </div>
            <div>
            </div>
        </div>
        </div>
    </div>

</section>
<script src="js/createcard.js"></script>
</html>