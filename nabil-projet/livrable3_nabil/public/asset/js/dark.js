$(document).ready(function() {
    $('#toggle-theme').click(function() {
        $('body').toggleClass('dark-mode');
        $('header, main, footer, nav a').toggleClass('dark-mode');
        
    });
});