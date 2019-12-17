$(document).ready(function() {
    //sidebarCollapse
    $('#sidebarCollapse').on('click', function() {
        $('#sidebar, #content').toggleClass('active');
    });
})