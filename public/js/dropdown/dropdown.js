// var i = 0;
// function  activeLink() {
//     i = 1;
//     localStorage.setItem('myDash', 'reports');
//     localStorage.setItem('index', i);
// }

// function drop(){
//     $(".menu-link").removeClass("active");
//     const dashboard = localStorage.getItem('myDash');
//     var index = localStorage.getItem('index', i);
//     if(index != 0 && index != null){
//         var name = $('#' + dashboard).addClass( 'active');
        
//     }  
//     console.log('index ' + index);
// }
// window.onload = drop();

$(document).ready(function(){
    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
        $('#myTab a[href="' + activeTab + '"]').tab('show');
    }
}); 
