$(document).on('click', '.region-link-gray, .region-arrow', function () {
    var self = $(this);
    var dropDown = $('#select_region');
    dropDown.fadeToggle(300);
    self.toggleClass('active');
    return false;
});