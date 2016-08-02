$(document).on('click', '.close, .alert', function() {
    $('.alert').fadeOut();
    event.preventDefault();
});