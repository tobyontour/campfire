/**
 * File utils.js.
 */
( function() {
  window.onscroll = function() {scrollMenu()};

  function scrollMenu() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      document.getElementById("site-navigation").className = "main-navigation scrolled";
    } else {
      document.getElementById("site-navigation").className = "main-navigation";
    }
  }
}() );