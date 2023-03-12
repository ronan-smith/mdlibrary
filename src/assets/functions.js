// Search directory list:
function filterList() {
  var input, filter, ul, li, a, i, txtValue;
  input = document.querySelector("#search input");
  filter = input.value.toUpperCase();
  ul = document.getElementById("results");
  li = ul.getElementsByTagName('li');

  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
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
