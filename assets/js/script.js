$(document).ready(function(){
    // dataTable
    new DataTable('#crud_table');
    
    // msg timeout
    setTimeout(function(){
        $('.msg').fadeOut(500);
    }, 3000);
});