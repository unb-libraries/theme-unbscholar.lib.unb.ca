/* Unlink Footer menu link 'headings' */
jQuery( document ).ready(function() {
  jQuery('li.expanded > a').contents().unwrap();
});
