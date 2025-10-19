// --- SLIDER ---
let slideIndex = 1;

window.plusSlides = (n) => showSlides((slideIndex += n));
window.currentSlide = (n) => showSlides((slideIndex = n));

const showSlides = (n) => {
  const slides = document.getElementsByClassName("mySlides");
  const dots = document.getElementsByClassName("dot");
  if (!slides.length) return;

  if (n > slides.length) slideIndex = 1;
  if (n < 1) slideIndex = slides.length;

  for (let i = 0; i < slides.length; i++) slides[i].style.display = "none";
  for (let i = 0; i < dots.length; i++)
    dots[i].className = dots[i].className.replace(" active", "");

  slides[slideIndex - 1].style.display = "block";
  if (dots[slideIndex - 1]) dots[slideIndex - 1].className += " active";
};

showSlides(slideIndex);
setInterval(() => plusSlides(1), 3000);
// --- END SLIDER ---

// --- CUSTOM SCROLLBAR ---
const trending = document.querySelector("#custom-scrollbar-trending");
const popular = document.querySelector("#custom-scrollbar-popular");

window.scrollLeftTrending = () => trending?.scrollBy({ left: -400, behavior: "smooth" });
window.scrollRightTrending = () => trending?.scrollBy({ left: 400, behavior: "smooth" });

window.scrollLeftPopular = () => popular?.scrollBy({ left: -400, behavior: "smooth" });
window.scrollRightPopular = () => popular?.scrollBy({ left: 400, behavior: "smooth" });
// --- END CUSTOM SCROLLBAR ---
