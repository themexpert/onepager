// Smooth scrolling
jQuery(function() {
  //only target navigation menus
  jQuery('nav a[href*=#]:not([href=#]),.nav a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      var navbar = jQuery('.navbar').height() + 10; // minus navbar height
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html,body').animate({
          scrollTop: target.offset().top - navbar
        }, 1000);
        return false;
      }
    }
  });
});
