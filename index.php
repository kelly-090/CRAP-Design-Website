<!--Nathan McComber-->
<!--3/28/2025-->
<?php include("assets/php/header.php"); ?>
<body>

<main>
    <!--TOP/HERO SECTION-->
    <div id="hero">
        <img src="assets/img/homepage_bg.png" alt="Background image of a website wireframe">
        <div class="hero-text">
            <h1 class="header">Struggle with web design? <em>We've got you covered.</em></h1>
            <p class="description">
                Learn the C.R.A.P. principles of visual design with our information pages. 
                Then, test your knowledge of C.R.A.P. principles by taking our free quiz.
            </p>

            <!--Buttons-->
            <div class="buttons">
                <a class="em_btn" href="contrast.php" class="emphasized_btn">Start Learning</a>
                <a class="btn" href="quiz.php">Take the Quiz</a>
            </div>
        </div>
    </div>
    

    <!--MAIN CONTENT-->
    <div class="card">
        <h2 class="header">Principles of C.R.A.P.</h2>

        <!--principle images-->
        <div id="homepage_principles">

            <!-- contrast card -->
            <div class="card">
                <h3><em>C</em>ontrast</h3>
                <p class="subdescription">
                    How well you can distinguish elements of your page.
                </p>
                <img class="principle-img" src="assets/img/homepage_contrast.svg">
            </div>

            <!-- repetition card -->
            <div class="card">
                <h3><em>R</em>epetition</h3>
                <p class="subdescription">
                    Consistency in style on a website.
                </p>
                <img class="principle-img" src="assets/img/homepage_repetition.svg">
            </div>

            <!-- alignment card -->
            <div class="card">
                <h3><em>A</em>lignment</h3>
                <p class="subdescription">
                    Elements are placed in relation to each other. 
                </p>
                <img class="principle-img" src="assets/img/homepage_alignment.svg">
            </div>

            <!-- proximity card -->
            <div class="card">
                <h3><em>P</em>roximity</h3>
                <p class="subdescription">
                    Related items are close together, unrelated items are spaced apart.
                </p>
                <img class="principle-img" src="assets/img/homepage_proximity.svg">
            </div>
        </div>
    </div>

    <div class="card">
        <h2 class="header">Origins of C.R.A.P.</h2>
        <p class="description">
            C.R.A.P. is an acronym created by Robin Patricia Williams, representing four key graphic design principles. 
            The acronym defines specific guidelines that designers should follow to improve the usability and user experience
            of their websites. Knowing these guidelines and principles is essential to designing a final product that is
            aesthetically pleasing, cohesive, and effective.
        </p>

        <div class="buttons">
            <a class="btn" href="contrast.php">Learn the Principles</a>
        </div>
    </div>
</main>

    <!--FOOTER-->
    <?php
        include("assets/php/footer.php");
    ?>
</body>
</html>