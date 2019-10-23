  /*
   *
   * Scroll to Top
   *
   * When the user clicks on the button, scroll to the top of the page
   *
   * @link https://www.w3schools.com/howto/howto_js_scroll_to_top.asp
   *
   */

  function topFunction() {
      document.body.scrollTop = '0'; // Safari
      document.documentElement.scrollTop = 0; // Chrome, Firefox, IE + Opera
  }