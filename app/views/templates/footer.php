</section>
<footer id="foot-area">
    <p>&copy 2019 PT. Telkom Akses | STMIK Kharisma Karawang</p>
</footer>
<script>

  document.getElementById("sideMenu").style.width = "280px";
  document.getElementById("main").style.marginLeft = "280px";
  document.getElementById("content-area").style.marginLeft = "280px";
  document.getElementById("foot-area").style.marginLeft = "280px";
function openNav() {
  document.getElementById("sideMenu").style.width = "280px";
  document.getElementById("main").style.marginLeft = "280px";
  document.getElementById("content-area").style.marginLeft = "280px";
  document.getElementById("foot-area").style.marginLeft = "280px";

}

function closeNav() {
  document.getElementById("sideMenu").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("content-area").style.marginLeft= "0";
  document.getElementById("foot-area").style.marginLeft= "0";
}

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>