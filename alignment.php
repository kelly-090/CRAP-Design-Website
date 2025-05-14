<!-- Kailah Boston -->
<?php
    include('./assets/php/header.php');
?>

    <div id="hero">
        <!-- Hero image -->
        <img src="assets/img/alignment_bg.png">

        <!-- Header text -->
        <div class="hero-text">
            <h1 class="header">The Principle of <em>Alignment.</em></h1>
            <p class = "description">The orientation and placement of your elements in relation to each other.</p>
        </div>
    </div>

    <!-- Card #1-->
    <div class="card">
        <h2>Why is Alignment Important?</h2>
        <p>Proper alignment is important because it helps maintain order and create a clean, professional look.</p>
    </div>

    <!-- Card #2-->
    <div class="card">
        <h2 class = "header">How Can Alignment Be Used?</h2>
        <p class = "description">You can use alignment to your advantage by ensuring all your content lines up and feels visually connected.</p>
        <p>The principle of alignment refers to the arrangement of the elements on your page in a way that is ordered and precise. </p>
        <p>Bad alignment is one of the most noticeable mistakes you can make in your design. An improperly aligned page can be jarring and distracting from the actual content and message.</p>
        <p>If your design is carefully aligned, it can give your webpage a sense of comfortability and structure. A website that is properly aligned has a more polished and professional feel. It is easier for users to scan over the provided information faster and more efficiently. </p>     
        <a href = "#" id = "showLink" onclick= "showExamples(event)">Show Examples...</a>

        <!--Card #3-->
        <div id="moreContent" style="display: none; margin-top: 10px;">
        <h2 class="subheader"><img id="checkmark" src="assets/img/checkmark.svg"><span class="goodExample">Good</span> Alignment</h2>
            <p class="description">This showcases good alignment since the text creates an invisible line down the page. 
                You can easily follow the text in each section, and your eyes know where to return to when you finish reading a line of text.</p>
            <img class="moreContentImg" src="assets/img/good_alignment.png">

            <h2 class="subheader"><img id="xmark" src="assets/img/x.svg"><span class="badExample">Bad</span> Alignment</h2>
            <p class="description">This showcases a bad use of alignment since there is no rhyme or reason to the placement of text. The site lacks invisible columns 
                to organize the text, and it's difficult to scan from one text block to another.</p>
            <img class="moreContentImg" src="assets/img/bad_alignment.png">
        </div>
    <!--Buttons-->        
        <div class = "buttons">
            <a class="btn" href="repetition.php">Previous Principle</a>
            <a class="btn" href="proximity.php">Next Principle</a>
        </div>
    </div>

<?php
    include('./assets/php/footer.php');
?>