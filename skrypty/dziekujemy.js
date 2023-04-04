$(document).ready(function() {
   $('#open').click(function() {
        $('.clickme-open').css('transform', 'scale(1)');

   });

   $('#close').click(function() {
    $('.clickme-open').css('transform', 'scale(0)');
    });

});