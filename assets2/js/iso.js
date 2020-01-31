"use strict";

// Porfolio isotope and filter
var itemSelector = '.portfolio-item';
var limitPerPage = 3;

var portfolioIsotope = $('.portfolio-container').isotope({
    itemSelector: itemSelector,
    layoutMode: 'fitRows'
  });

  function Pager (param){
    var position = param;
    if (typeof (position) === 'undefined') {
        position = '*';
    }else{
        position = param;
    }
    var numberofItem = $(".blog "+itemSelector+position).children().length;

    var pages = Math.ceil(numberofItem / limitPerPage);
    var item = 1;
    var page = 1;

    $(".blog "+itemSelector+position).children().each(function(){
        if (item > limitPerPage) {
            page++;
            item = 1;
          }
        $(this).parent().attr("data-pager",page);
        item++;
    });
    // alert(position);
 }

 function CreatePager(params) {
     
 }

  Pager();
  portfolioIsotope.isotope({ filter: '[data-pager = "1"]' });

  $('.pagination').append('<li class="page-item active"><a class="page-link" href="javascript:void(0);">'+1+'</a></li>');

  $('.pagination').append('<li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>');

  $('#portfolio-flters li').on( 'click', function() {
    $("#portfolio-flters li").removeClass('filter-active');
    $(this).addClass('filter-active');

    //remove and update data pager
    $(".portfolio-item").removeAttr("data-pager");
    // $(".portfolio-item"+$(this).data("filter")).attr("data-pager","2");  
    
    var position = $(this).attr("data-filter");
    Pager (position);
    
    portfolioIsotope.isotope({ filter: $(this).data('filter')+'[data-pager = "1"]' });
    // portfolioIsotope.isotope({ filter: '[data-pager = "1"]' });

    // alert(numberofItem)

    // alert ('.portfolio-item'+$(this).data("filter"));
    
  });
  
  
 
// coba();