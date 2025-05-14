<?php include("assets/php/header.php"); ?>
<script src="assets/js/quizResultReveal.js" defer></script>
<link rel="stylesheet" href = "assets/css/quiz.css">

    <div class="question">
        <form action="quizResult.php" method="POST">
            
            <h2>It’s Quiz time!</h2>
            <p>1. What does the acronym C.R.A.P. stand for in design principles?</p>
            <div class="choices">
                <label><input type="radio" name="Q1-answers" value="1">Color, Readability, Alignment, Placement</label> <br>
                <label><input type="radio" name="Q1-answers" value="2">Contrast, Repetition, Alignment, Proximity</label> <br>
                <label><input type="radio" name="Q1-answers" value="3">Creativity, Relevance, Aesthetics, Proportion</label> <br>
                <label><input type="radio" name="Q1-answers" value="4">Content, Readability, Aesthetics, Proximity</label> <br>
            </div>

            <p>2. How can proximity improve user experience?</p>
            <div class="choices">
                <label><input type="radio" name="Q2-answers" value="1">By using a variety of random spacing between elements</label> <br>
                <label><input type="radio" name="Q2-answers" value="2">By keeping all elements equally distant</label> <br>
                <label><input type="radio" name="Q2-answers" value="3">By grouping related content together for easier understanding</label> <br>
                <label><input type="radio" name="Q2-answers" value="4">By making sure all content is tightly packed together</label> <br>
            </div>

            <p>3. Why is contrast important in web design?</p>
            <div class="choices">
                <label><input type="radio" name="Q3-answers" value="1">It ensures all elements are the same size</label> <br>
                <label><input type="radio" name="Q3-answers" value="2">It creates visual interest and improves readability</label> <br>
                <label><input type="radio" name="Q3-answers" value="3">It removes unnecessary white space</label> <br>
                <label><input type="radio" name="Q3-answers" value="4">It limits the use of colors to just one</label> <br>
            </div>

            <p>4. Which one do you think is well designed?</p>
            <div class="pictureChoices">
                <img src="assets/img/bad_alignment.png" alt="badAlignmentImage">
                <img src="assets/img/good_alignment.png" alt="goodAlignmentImage">
            </div>
            <br>
            <div class="choices">
                <label><input type="radio" name="Q4-answers" value="1">Left</label> <br>
                <label><input type="radio" name="Q4-answers" value="2">Right</label> <br>
            </div>

            <p>5. Which one do you think the text has been well aligned?</p>
            <div class="pictureChoices">
            <img src="assets/img/bad_proximity.png" alt="badProximityImage">
            <img src="assets/img/good_proximity.png" alt="goodProximityImage">
            </div>
            <br>
            <div class="choices">
                <label><input type="radio" name="Q5-answers" value="1">Left</label> <br>
                <label><input type="radio" name="Q5-answers" value="2">Right</label> <br>
            </div>
            
            <p>6. Which of the following is an example of repetition in design?</p>
            <div class="choices">
                <label><input type="radio" name="Q6-answers" value="1">Using the same fonts and colors throughout a website</label> <br>
                <label><input type="radio" name="Q6-answers" value="2">Placing text randomly on a webpage</label> <br>
                <label><input type="radio" name="Q6-answers" value="3">Using different fonts for each section of a website</label> <br>
                <label><input type="radio" name="Q6-answers" value="4">Ignoring consistency in button styles</label> <br>
            </div>

            <p>7. What is the primary function of alignment in web design?</p>
            <div class="choices">
                <label><input type="radio" name="Q7-answers" value="1">To place elements randomly for a unique look</label> <br>
                <label><input type="radio" name="Q7-answers" value="2">To ensure all elements are positioned at the center of the page</label> <br>
                <label><input type="radio" name="Q7-answers" value="3">To create order and a clean, professional appearance</label> <br>
                <label><input type="radio" name="Q7-answers" value="4">To use only left-aligned text</label> <br>
            </div>

            <p>8. Which of the following demonstrates proper proximity in design?</p>
            <div class="choices">
                <label><input type="radio" name="Q8-answers" value="1">Placing related elements close together</label> <br>
                <label><input type="radio" name="Q8-answers" value="2">Scattering similar content across the page</label> <br>
                <label><input type="radio" name="Q8-answers" value="3">Grouping unrelated elements together</label> <br>
                <label><input type="radio" name="Q8-answers" value="4">Overlapping text with images randomly</label> <br>
            </div>

            <p>9. What can poor contrast lead to in web design?</p>
            <div class="choices">
                <label><input type="radio" name="Q9-answers" value="1">Increased readability</label> <br>
                <label><input type="radio" name="Q9-answers" value="2">A more visually appealing website</label> <br>
                <label><input type="radio" name="Q9-answers" value="3">Difficulty in distinguishing elements</label> <br>
                <label><input type="radio" name="Q9-answers" value="4">Stronger brand recognition</label> <br>
            </div>

            <p>10. Which design mistake is most noticeable and can make a webpage look unprofessional?</p>
            <div class="choices">
                <label><input type="radio" name="Q10-answers" value="1">Excessive use of repetition</label> <br>
                <label><input type="radio" name="Q10-answers" value="2">Poor alignment</label> <br>
                <label><input type="radio" name="Q10-answers" value="3">Too much white space</label> <br>
                <label><input type="radio" name="Q10-answers" value="4">Using only one font</label> <br>
            </div>
            
            <!-- you should adjust the place of submit button to the right -->
            <input id="submitB" type="submit" value="Submit">
        </form>
    </div>
<?php
    include('./assets/php/footer.php');
?>