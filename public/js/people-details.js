//---Search Container---
const detailsSearchContainer = document.querySelector(".search-container-details");
const detailsSearchButton = document.querySelector(".search-container-details i");
if (detailsSearchButton) {
  detailsSearchButton.addEventListener("click", () => {
    detailsSearchContainer.classList.toggle("search-container-details-active");
  });
}
//Search Container---

//---Popup---
let previousElement;
window.togglePopup = (e) => {
  if (previousElement) {
    previousElement.querySelector(".popup").classList.remove("show");
  }
  e.querySelector(".popup").classList.add("show");
  previousElement = e;
};

// Tutup popup kalau klik di luar
document.addEventListener("click", (event) => {
  if (
    !event.target.closest(".people-details-circle") &&
    !event.target.closest(".popup")
  ) {
    if (previousElement) {
      previousElement.querySelector(".popup").classList.remove("show");
    }
  }
});
//Popup---

//---Redirect Known For---
let scrollItem = document.querySelectorAll(".people-details-scroll-item img");
scrollItem.forEach((item) => {
  item.style.cursor = "pointer";
  item.addEventListener("click", () => {
    const title = item.alt || item.getAttribute("data-title");
    if (title) {
      window.location.href = `/people/${encodeURIComponent(title)}`;
    }
  });
});
//Redirect Known For---
