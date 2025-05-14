<?php
    include('./assets/php/header.php');
?>

<div id="hero">
    <!--Main image-->
    <img src="assets/img/proximity_bg.png">

    <!--Card-->
    <div class="hero-text">
        <h1 class="header">The Principle of <em>Proximity</em>.</h1>
        <p class="description">
            Proximity is the distance between the elements on your website.
        </p>
    </div>
</div>

    <div class="card">
        <h2>Why is Proximity Important?</h2>
        <p>
        Proximity is important because when used correctly, 
        it can help unify ideas and make the relationship between different elements clearer.
        </p>

    </div>

    <div class="card">
        <h2>How Can Proximity Be Used?</h2>
        <p>
        You can use proximity by grouping related content and separating unrelated content. 

        The principle of proximity relates to the idea that content that relates to each other should be grouped accordingly, allowing the user to make that connection more easily. 

        Proximity can be achieved on a page by using lists and white space among other things. Proximity helps you create a visual hierarchy in your content.

        Common examples of proximity in web design are image galleries, forms, and navigation.
        </p>
        <a href = "#" id = "showLink" onclick= "showExamples(event)">Show Examples...</a>
        
        <div id="moreContent" style="display:none; margin-top: 10px;">
        <h2 class="subheader"><img id="checkmark" src="assets/img/checkmark.svg"><span class="goodExample">Good</span> Proximity</h2>
            <p class="description">This example site shows a good use of proximity because related elements are placed close to each other. It is very obvious which description goes with which furniture maker and there is little room for confusion.</p>
            <img class="moreContentImg" src="assets/img/good_proximity.png">

        <h2 class="subheader"><img id="xmark" src="assets/img/x.svg"><span class="badExample">Bad</span> Proximity</h2>
            <p class="description">This site exemplifies a poor use of proximity because items are evenly spaced. All of the text blends into one big block which makes it difficult to discern one description from the others. Figuring out which description belongs with which furniture maker takes mental effort, making the page frustrating to read.</p>
            <img class="moreContentImg" src="assets/img/bad_proximity.png">
        </div>

        <div class="buttons">
            <!-- <button type="button" name="start">Previous Principle</button>
            <button type="button" name="start">Test Your Knowledge</button> -->
            <a class="btn" href="alignment.php">Previous Principle</a>
            <a class="btn" href="quiz.php">Test Your Knowledge</a>
        </div> 
    </div>

<?php
    include('./assets/php/footer.php');
?>