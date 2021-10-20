const menuIcon = document.getElementById("menu-icon");
const slideoutMenu = document.getElementById("slideout-menu");
const searchIcon = document.getElementById("search-icon");
const searchBox = document.getElementById("searchbox");
const search = document.querySelector(".fa-search");
const nav = document.querySelector("nav ul");
searchIcon.addEventListener("click", () => {
  console.log(search);
  if (searchBox.style.opacity === "1") {
    searchBox.style.transform = "translateX(100%)";
    searchBox.style.opacity = "0";
    searchBox.style.pointerEvents = "none";
    search.className = "fas fa-search";
  } else {
    searchBox.style.transform = "translateX(-10%)";
    searchBox.style.opacity = "1";
    searchBox.style.pointerEvents = "auto";
    //toggle search icon
    search.className = "fa fa-times";
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

nav.addEventListener("click", (e) => activeNav(e));

function activeNav(e) {
  // console.log(e.target, e.target.tagName);
  if (nav.contains(e.target) && e.target.tagName === "A") {
    // console.log(nav.childNodes);
    nav.childNodes.forEach((el, idx) => {
      if (idx % 2 !== 0) {
        // console.log(e.target, el);
        if (el.contains(e.target)) {
          el.childNodes[1] ? (el.childNodes[1].className = "active") : (el.childNodes[0].className = "active");
        } else {
          el.childNodes[1] ? (el.childNodes[1].className = "") : (el.childNodes[0].className = "");
        }
      }
    });
  }
}
