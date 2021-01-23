/**
 * Functions to show or hide the site menu
 */

/*function toggleMenu() {
  document.body.classList.toggle("menu-open");
}*/

function toggleMenu() {
  if (document.body.classList.contains("menu-open")) {
    document.body.classList.add("menu-close");
    document.body.classList.remove("menu-open");
  } else {
    document.body.classList.add("menu-open");
    document.body.classList.remove("menu-close");
  }
}
