<script>
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector("nav ul");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("mobile-nav");
});
</script>