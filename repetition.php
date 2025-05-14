<!-- Carsen Terwilliger -->
<?php include("assets/php/header.php"); ?>

    <!-- Hero image and text -->
    <div id="hero">
        <img class="background" src="assets/img/repetition_bg.png" alt="Background image of a website wireframe">
        <div class="hero-text">
            <h1 class="header">The Principle of <em>Repetition.</em></h1>
            <p class = "description">Being consistent across your website.</p>
        </div>
    </div>
    
    <!-- Card 1 -->
    <div class="card">
        <h2>Why is Repetition Important?</h2>
        <p>Repetition is important because it helps to create a cohesive and unified look, keeping consistency throughout your design.</p>
    </div>

    <!-- Card 2 -->
    <div class="card">
        <h2 class = "header">How Can Repetition Be Used?</h2>
        <p class = "description">You can use repetition by repeating visual elements like colors, fonts, and shapes.</p>
        <p>Using repetition can help create a sense of cohesion and unity throughout your page. It ties together your content and makes each piece feel like it belongs. Using the same fonts and color schemes helps the user more easily understand your material.</p>
        <p>Having repetitive and predictable designs on your page helps make navigation easier. It can also be useful in creating emphasis on certain elements, making them more memorable. Examples of this can be seen in common recognizable brand logos and colors that are easily repeated across multiple platforms and mediums.</p>
        <a id="showLink" href="#" onclick="showExamples(event)">Show Examples...</a>

        <!-- Additional information hidden until show examples is clicked-->
        <div id="moreContent">
                <h2 class="subheader"><img id=checkmark src="assets/img/checkmark.svg"><span class="goodExample">Good</span> Repetition</h2>
                <img class="moreContentImg" src="assets/img/good_repetition.png">
                <p class="description">This example site showcases a good use of repetition by using the same format for each piece of furniture. 
                    No matter what the item is, the user will always know where to look to find the price, item name, and product reviews.</p>

                <h2 class="subheader"><img id=xmark src="assets/img/x.svg"><span class="badExample">Bad</span> Repetition</h2>
                <img class="moreContentImg" src="assets/img/bad_repetition.png">
                <p class="description">This site has poor repetition because there is no consistency in where item information is placed. 
                    Users will have to read through every single item to find the information they’re looking for, which creates frustration. Additionally, the site looks poor and is not cohesive.</p>
        </div>

        <!-- Button/link to previous and next pages -->
        <div class = "buttons">
             <a class="btn" href="contrast.php">Previous Principle</a>
             <a class="btn" href="alignment.php">Next Principle</a>
        </div>
    </div>

    <?php include("assets/php/footer.php"); ?>
</body>
</html>