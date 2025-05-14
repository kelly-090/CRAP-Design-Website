<!DOCTYPE html>
<!-- author: jezavene arbogast -->
<!-- page decribing the principle of contrast in design -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lunasima:wght@400;700&display=swap" rel="stylesheet">
    
    <title>Contrast</title>
</head>
<?php include 'assets/php/header.php'; ?>
    <div id="hero">
        <img src="assets/img/contrast_bg.png">
        <div class="hero-text">
            <h1 class="header">The Principle of <em>Contrast.</em></h1>
            <p class="description">Emphasizing the difference between elements on your webpage.</p>
        </div>
    </div>

    <div class="card">
        <h2>Why is Contrast Important?</h2>
        <p>Contrast is important because it helps create visual interest and improves the readability of your content. For example: this text is readable, <span class="badContrast">while this text is much harder to read</span>.</p>
    </div>

    <div class="card">
        <h2>How Can Contrast Be Used?</h2>
        <p>Contrast can be used in your website by incorporating contrasting colors, shapes, sizes, and fonts to highlight the most important elements of your design.</p>
        <p>Poor contrast can create an unpleasant user experience. Your page should have enough contrast for elements to be easily distinguishable. Contrast is also used to highlight important information and create visual interest.</p>
        <p>Contrast is also an important factor in making your website accessible to people with vision impairments. Proper contrast makes it easy for users to click links and read text, contributing to a positive user experience.</p>
        <p>You can create contrast in your website by using different variations of size, color, line thickness, spacing, fonts, etc.</p>
        <a id="showLink" href="#" onclick="showExamples(event)">Show Examples...</a>

        <!-- Additional information hidden until show examples is clicked-->
        <div id="moreContent" style="display: none; margin-top: 10px;">
                <h2 class="subheader"><img id="checkmark" src="assets/img/checkmark.svg"><span class="goodExample">Good</span> Contrast</h2>
                <img class="moreContentImg" src="assets/img/good_contrast.png">
                <p class="description descriptionList">This example site showcases a good use of contrast, specifically with the use of color and size.
                    The site’s use of contrast provides these advantages:</p>
                <ul class="description descriptionList">
                    <li>all text is readable - even the price which is especially important</li>
                    <li>large “Get the latest and greatest deals on everything.” draws your eye to it, enticing you to join the shopper’s club</li>
                    <li>small “*deal only applies to purchases over $300” de-emphasizes it and makes you less likely to read it</li>
                </ul>

                <h2 class="subheader"><img id="xmark" src="assets/img/x.svg"><span class="badExample">Bad</span> Contrast</h2>
                <img class="moreContentImg" src="assets/img/bad_contrast.png">
                <p class="description descriptionList">This example site showcases a poor use of contrast. There is a lack of contrast in size and color, which yields the following problems:</p>
                <ul class="description descriptionList">
                    <li>text is difficult to read - particularly the header and the price of the chair</li>
                    <li>no text catches your eye</li>
                    <li>the deal disclaimer is much more emphasized</li>
                    <li>there is little to no visual interest to the page</li>
                </ul>
        </div>

        <div class="buttons">
            <a class="btn" href="repetition.php">Next Principle</a>
        </div>
    </div>
<?php include 'assets/php/footer.php'; ?>
</html>