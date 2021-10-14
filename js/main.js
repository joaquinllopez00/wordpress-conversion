const menuIcon = document.getElementById("menu-icon");
const slideoutMenu = document.getElementById("slideout-menu");
const searchIcon = document.getElementById("search-icon");
const searchBox = document.getElementById("searchbox");

searchIcon.addEventListener("click", () => {
  if (searchBox.style.top === "76px") {
    searchBox.style.top = "24px";
    searchBox.style.pointerEvents = "none";
  } else {
    console.log("search");
    searchBox.style.top = "76px";
    searchBox.style.pointerEvents = "auto";
    console.log(searchBox);
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
