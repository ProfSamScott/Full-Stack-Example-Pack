/**
 * adds a listener to open and close a menu
 * Sam Scott, McMaster 2025
 **/
window.addEventListener("load", function(event) {

  // Model: open = true when menu is open, false when closed
  let open = false;

  // DOM Element Retrieval
  let menu = document.getElementById("hamburgercontent");
  let hamburger = document.getElementById("hamburger");

  /**
   * Check "open" variable, show/hide menu as appropriate
   */
  hamburger.addEventListener("click", function(event) {
    if (open) {
      menu.style.display = "none";
      this.src = "images/hamburger.png";
      open = false;
    } else {
      menu.style.display = "flex";
      this.src = "images/hamburgerclose.png";
      open = true;
    }
  })
});