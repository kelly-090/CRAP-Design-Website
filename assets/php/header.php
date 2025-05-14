<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            $page = basename($_SERVER['SCRIPT_FILENAME'], ".php"); // Get the current file name
            if ($page == "index") {
                $page = "home"; // Change the page name to "home" if it is index.php
            }
            echo ucfirst($page);
        ?> 
    </title>
    <?php
            // Combines page name with the assets/css folder to get the correct css file
            echo '<link rel="stylesheet" href="assets/css/baseStyles.css">';
            // Once you include header.php, automatically each php for each html file will be included.
    ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lunasima:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/headerFooterStyles.css">
    <script src="assets/js/showExamples.js" defer></script>
    <script src="assets/js/toggleMenu.js" defer></script>
    <script src="assets/js/backToTop.js" defer></script>
</head>
<body>
    <header>
        <nav>
            <a id="logo" href = "https://solace.ist.rit.edu/~iste240t29/index.php">
            <img src="assets/img/Logo.svg">
            </a>
            
            <a class = "topMenu" href="index.php">Home</a>
            <a class = "topMenu" href="contrast.php">Contrast</a>
            <a class = "topMenu" href="repetition.php">Repetition</a>
            <a class = "topMenu" href="alignment.php">Alignment</a>
            <a class = "topMenu" href="proximity.php">Proximity</a>
            <a class = "topMenu" href="quiz.php">Test Your Knowledge</a>

            <!-- <div class="hamburger">
                <a class="hamburger" href="https://solace.ist.rit.edu/~iste240t29/index.php">
                <img src="assets/img/Logo.svg">
                <img class="hamburger" src="assets/img/hamburger.png" alt="Menu" onclick="toggleMenu()">
            </div> -->
        </nav>
    </header>

<div class="menu" id="menu">
    <div class="hamburger">
        <a class="hamburger_logo" href="https://solace.ist.rit.edu/~iste240t29/index.php">
        <img src="assets/img/Logo.svg">
        </a>
        <img class="hamburger_icon" src="assets/img/hamburger.png" alt="Menu" onclick="toggleMenu();">
    </div>
</div>

<div class="toggleMenu" id="toggleMenu">
    <img class="close_icon" src="assets/img/x.png" alt="Close" onclick="toggleMenu();">
    <a class = "hamMenu" href="index.php">Home</a>
    <a class = "hamMenu" href="contrast.php">Contrast</a>
    <a class = "hamMenu" href="repetition.php">Repetition</a>
    <a class = "hamMenu" href="alignment.php">Alignment</a>
    <a class = "hamMenu" href="proximity.php">Proximity</a>
    <a class = "hamMenu" href="quiz.php">Test Your Knowledge</a>
</div>

<button id="toTopBtn" style="display:none">Back to Top</button>

