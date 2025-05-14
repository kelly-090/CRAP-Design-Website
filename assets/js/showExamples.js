// Function to toggle the display of examples of the CRAP design principles
function showExamples(event) {
    event.preventDefault();

    const link = document.getElementById("showLink");
    const content = document.getElementById("moreContent");

    if (content.style.display === "none") {
        content.style.display = "block";
        link.textContent = "Hide Examples...";
        document.getElementById("prevButton").style.display = "none";
        document.getElementById("nextButton").style.display = "none";
    } else {
        content.style.display = "none";
        link.textContent = "Show Examples...";
        document.getElementById("prevButton").style.display = "inline-block";
        document.getElementById("nextButton").style.display = "inline-block";
    }
}