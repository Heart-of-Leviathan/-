const sidebar = document.getElementById("sidebar");
const overlay = document.getElementById("overlay");

sidebar.addEventListener("click", function (event) {
  this.classList.toggle("expanded");
  overlay.classList.toggle("active");
  document.body.classList.toggle("menu-open");
  event.stopPropagation();
});

overlay.addEventListener("click", function () {
  sidebar.classList.remove("expanded");
  overlay.classList.remove("active");
  document.body.classList.remove("menu-open");
});

// Empêcher la navbar de capter le clic sur les liens
document.querySelectorAll(".sidebar a").forEach((link) => {
  link.addEventListener("click", function (event) {
    event.stopPropagation(); // Permet au lien de fonctionner
  });
});

////
