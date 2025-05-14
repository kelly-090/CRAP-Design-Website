
<?php
 include("assets/php/header.php"); ?>
<link rel="stylesheet" href = "assets/css/quizResult.css">
<script src="assets/js/quizResultReveal.js" defer></script>

<?php
// $A1 = $_POST['Q1-answers'];
// $A2 = $_POST['Q2-answers'];
// $totalCorrect = 0;

// if ($A1 == "1") {$totalCorrect++;}
// if ($A2 == "1") {$totalCorrect++;}

// echo "<div id='results'>$totalCorrect / 5 correct</div>";

function correctCheckMark1(){
    echo '<div class="correctA"><img class="checkMark1" src="assets/img/checkmark.svg"></div>';
}
function correctCheckMark2(){
    echo '<div class="correctA"><img class="checkMark2" src="assets/img/checkmark.svg"></div>';
}
function correctCheckMark3(){
    echo '<div class="correctA"><img class="checkMark3" src="assets/img/checkmark.svg"></div>';
}
function correctCheckMark4(){
    echo '<div class="correctA"><img class="checkMark4" src="assets/img/checkmark.svg"></div>';
}
// the radio type of input button in $_POST[] returns only checked value.


$answer1 = $_POST['Q1-answers']; $answer6 = $_POST['Q6-answers'];
$answer2 = $_POST['Q2-answers']; $answer7 = $_POST['Q7-answers'];
$answer3 = $_POST['Q3-answers']; $answer8 = $_POST['Q8-answers'];
$answer4 = $_POST['Q4-answers']; $answer9 = $_POST['Q9-answers'];
$answer5 = $_POST['Q5-answers']; $answer10 = $_POST['Q10-answers'];

$userAnswers = array($answer1, $answer2, $answer3, $answer4, $answer5,
$answer6, $answer7, $answer8, $answer9, $answer10 ) ;
$correctAnswers = array(2, 3, 2, 2, 2, 1, 3, 1, 3, 2); // I updated these values
$i =0;
$correctNum = 0;
$wrongAnswersString ="";
while($i<10){
    if($userAnswers[$i] == $correctAnswers[$i]){
        $correctNum ++;
    } else {
        $wrongAnswersString .= $i . " " . $userAnswers[$i] . " ";       
    }
    $i++;
} echo  '<p hidden id="wrongAnswersString">'.$wrongAnswersString.'</p>'; ?>

<div class="answer">
        <h2>Answers</h2>
        <h3 id="score">You got: <em><?php echo $correctNum;?>/10</em></h3>
        <p class="question">1. What is the definition of C.R.A.P?</p>
        <div class="choices">
            <div><span class="letter">a</span>Color, Readability, Alignment, Placement</div>
            <?php correctCheckMark2() ?><div> <span class="letter">b</span>Contrast, Repetition, Alignment, Proximity</div>
            <div><span class="letter">c</span>Creativity, Relevance, Aesthetics, Proportion</div>
            <div><span class="letter">d</span>Content, Readability, Aesthetics, Proximity</div>
        </div>

        <p class="question">2. How can proximity improve user experience?</p>
        <div class="choices">
            <div><span class="letter">a</span>By using a variety of random spacing between elements</div>
            <div> <span class="letter">b</span>By keeping all elements equally distant</div>
            <?php correctCheckMark3() ?><div><span class="letter">c</span>By grouping related content together for easier understanding</div>
            <div><span class="letter">d</span>By making sure all content is tightly packed together</div>
        </div>

        <p class="question">3. Why is contrast important in web design?</p>
        <div class="choices">
            <div><span class="letter">a</span>It ensures all elements are the same size</div>
            <?php correctCheckMark2() ?><div> <span class="letter">b</span>It creates visual interest and improves readability</div>
            <div><span class="letter">c</span>It removes unnecessary white space</div>
            <div><span class="letter">d</span>It limits the use of colors to just one</div>
        </div>

        <p class="question">4. Which one do you think is well designed?</p>
        <div class="pictureChoices">
                <img src="assets/img/bad_alignment.png" alt="badAlignmentImage">
                <img src="assets/img/good_alignment.png" alt="goodAlignmentImage">
        </div>
        <br>
        <div class="choices">
            <div><span class="letter">a</span>Left</div>
            <?php correctCheckMark2() ?><div> <span class="letter">b</span>Right</div>
        </div>

        <p class="question">5. Which one do you think has better proximity?</p>
        <div class="pictureChoices">
            <img src="assets/img/bad_proximity.png" alt="badProximityImage">
            <img src="assets/img/good_proximity.png" alt="goodProximityImage">
        </div>
        <br>
        <div class="choices">
            <div><span class="letter">a</span>Left</div>
            <?php correctCheckMark2() ?><div> <span class="letter">b</span>Right</div>
        </div>

        <p class="question">6. Which of the following is an example of repetition in design?</p>
        <div class="choices">
            <?php correctCheckMark1() ?><div><span class="letter">a</span>Using the same fonts and colors throughout a website</div>
            <div> <span class="letter">b</span>Placing text randomly on a webpage</div>
            <div><span class="letter">c</span>Using different fonts for each section of a website</div>
            <div><span class="letter">d</span>Ignoring consistency in button styles</div>
        </div>

        <p class="question">7. What is the primary function of alignment in web design?</p>
        <div class="choices">
            <div><span class="letter">a</span>To place elements randomly for a unique look</div>
            <div> <span class="letter">b</span>To ensure all elements are positioned at the center of the page</div>
            <?php correctCheckMark4() ?><div><span class="letter">c</span>To create order and a clean, professional appearance</div>
            <div><span class="letter">d</span>To use only left-aligned text</div>
        </div>
        
        <p class="question">8. Which of the following demonstrates proper proximity in design?</p>
        <div class="choices">
            <?php correctCheckMark1() ?><div><span class="letter">a</span>Placing related elements close together</div>
            <div> <span class="letter">b</span>Scattering similar content across the page</div>
            <div><span class="letter">c</span>Grouping unrelated elements together</div>
            <div><span class="letter">d</span>Overlapping text with images randomly</div>
        </div>

        <p class="question">9. What can poor contrast lead to in web design?</p>
        <div class="choices">
            <div><span class="letter">a</span>Increased readability</div>
            <div> <span class="letter">b</span>A more visually appealing website</div>
            <?php correctCheckMark3() ?><div><span class="letter">c</span>Difficulty in distinguishing elements</div>
            <div><span class="letter">d</span>Stronger brand recognition</div>
        </div>

        <p class="question">10.Which design mistake is most noticeable and can make a webpage look unprofessional?</p>
        <div class="choices">
            <div><span class="letter">a</span>Excessive use of repetition</div>
            <?php correctCheckMark2() ?><div> <span class="letter">b</span>Poor alignment</div>
            <div><span class="letter">c</span>Too much white space</div>
            <div><span class="letter">d</span>Using only one font</div>
        </div>


</div>



<?php
require_once("assets/php/footer.php");
?>
