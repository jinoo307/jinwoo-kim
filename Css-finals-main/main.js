document.addEventListener("DOMContentLoaded", () => {
  const hamburger = document.getElementById("hamburger");
  const menu = document.getElementById("menu");
  const shopLink = document.querySelector('a[href="#products"]');
  const reviewsLink = document.querySelector('a[href="#reviews"]');

  hamburger.addEventListener("click", (event) => {
    event.preventDefault(); // Prevent page reload
    menu.classList.toggle("active"); // Toggle menu visibility
  });

  shopLink.addEventListener("click", () => {
    menu.classList.remove("active"); 
  });

  reviewsLink.addEventListener("click", () => {
    menu.classList.remove("active"); 
  });
});
