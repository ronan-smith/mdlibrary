// Search directory list:
function filterList() {
  // Get search bar, results list and items in list
  const input = document.querySelector("#search input");
  const ul = document.getElementById("results");
  const li = ul.getElementsByTagName('li');

  // Declare vars for later use
  var a, txtValue, count = 0;

  // Normalise input so it's case-insensitive
  var filter = input.value.toUpperCase();

  // Loop through each list item
  for (var i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
      count++;
    }
  }

  // Check if all list items had been hidden
  if (count == li.length) {
    // Display non-found message
    document.getElementById("resultless").style.visibility = "visible";
  } else {
    document.getElementById("resultless").style.visibility = "hidden";
  }
}

// Toggle light-mode theme:
const themeButton = document.getElementById("toggle");

themeButton.addEventListener("click", function() {
  document.body.classList.toggle("light-mode");

  // Detect which theme was switched and set cookie
  var themePref = document.body.classList.contains("light-mode") ? "true" : "false";
  document.cookie = "light-mode=" + themePref + "; path=/";
});

// Call highlight.js:
hljs.highlightAll();
