module.exports = function (el){
  jQuery('html, body').animate({
    scrollTop: jQuery(el).offset().top - 32 //32px wpadminbar height
  }, 1000);
}
