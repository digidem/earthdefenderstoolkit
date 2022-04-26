jQuery(document).ready(function() {

  console.log(window.location.search)
  console.log()
  if(window.location.search.indexOf('lang') > -1) {
    jQuery('a').each(function() {
      var href = jQuery(this).attr('href');
      if(href.indexOf('/home') === -1 || href.indexOf('earthdefenderstoolkit.com') > -1) {
        if(href.indexOf(window.location.search) === -1) {
          href = href + window.location.search;
          // $(this).attr('href', href);
        }
      }
    })
  }

});
