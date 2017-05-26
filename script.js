// Saves the variables we got by either ID or class
var box = document.getElementById('skiftkommune');
var btn = document.getElementById("skift");
var close = document.getElementsByClassName("close")[0];

// Opens the box
btn.onclick = function() {
    box.style.display = "block";
}
// Closes the box, when button is clicked
close.onclick = function() {
    box.style.display = "none";
}
// Closes the box, if anything else but the box is clicked
window.onclick = function(event) {
    if (event.target == modal) {
        box.style.display = "none";
    }
}
