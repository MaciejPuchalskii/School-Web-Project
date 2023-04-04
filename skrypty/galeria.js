$(document).ready(function() {
   $('.zdjecia .slides img').click(function() {
        var $smallImages = $(this).attr('src');
        $('.big-screen img').attr('src', $smallImages);
   });
});