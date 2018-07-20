// external js: isotope.pkgd.js

// init Isotope
var $grid = $('.grid').isotope({
    itemSelector: '.element-item'
    //layoutMode: 'fitRows'
});

// bind filter button click
$('.filter-list').on( 'click', 'a', function() {
    var filterValue = $( this ).attr('data-filter');
    $grid.isotope({ filter: filterValue });
});
$('.content p img').each(function(){
    $(this).addClass('img-responsive');
});
$('.btn-orange').each(function(){
    $(this).addClass('btn btn-sm'); 
});
