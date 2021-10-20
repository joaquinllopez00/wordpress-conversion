const menuIcon = document.getElementById("menu-icon");
const slideoutMenu = document.getElementById("slideout-menu");
const searchIcon = document.getElementById("search-icon");
const searchBox = document.getElementById("searchbox");

searchIcon.addEventListener("click", () => {
  console.log(searchBox.style);

  if (searchBox.style.opacity === "1") {
    searchBox.style.transform = "translateX(-100%)";
    searchBox.style.opacity = "0";
    searchBox.style.pointerEvents = "none";
  } else {
    searchBox.style.transform = "translateX(0)";
    searchBox.style.opacity = "1";
    searchBox.style.pointerEvents = "auto";
  }
});

menuIcon.addEventListener("click", () => {
  console.log("mobile search");
  if (slideoutMenu.style.opacity === "1") {
    console.log("opacity 1");
    slideoutMenu.style.opacity = "0";
    slideoutMenu.style.pointerEvents = " none";
  } else {
    console.log("opacity 0");
    slideoutMenu.style.opacity = "1";
    slideoutMenu.style.pointerEvents = " auto";
  }
});
