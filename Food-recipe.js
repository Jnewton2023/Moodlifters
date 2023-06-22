// Function for showing instructions
function toggleInstructions(elementId) {
  var instructions = document.getElementById(elementId);
  if (instructions.style.display === "none") {
    instructions.style.display = "block";
  } else {
    instructions.style.display = "none";
  }
}

// Function for handling star rating
function handleStarRating(starElement) {
  var stars = document.getElementsByClassName("my-star");
  var clickedindex = Array.from(stars).indexOf(starElement);

  for (var i = 0; i <= clickedindex; i++) {
    stars[i].classList.add("is-active");
  }

  for (var j = clickedindex + 1; j < stars.length; j++) {
    stars[j].classList.remove("is-active");
  }
}

// Function for submitting a review
function submitReview() {
  var reviewInput = document.getElementById("review-input");
  var reviewText = reviewInput.value.trim();
  
  if (reviewText !== "") {
    var reviewSection = document.getElementById("review-section");
    var newReview = document.createElement("p");
    newReview.textContent = reviewText;
    reviewSection.appendChild(newReview);
    reviewInput.value = "";
  }
  
  return false; // Prevent form submission and page refresh
}
