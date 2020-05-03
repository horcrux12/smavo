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

    if (pages !== 0) {
      $(".pagination").append('<li id="prev" class="page-item disabled" disabled><a class="page-link" href="javascript:void(0);" tabindex="-1">Previous</a></li>')
      $(".pagination").append('<li class="page-item number active" data-pager="'+1+'"><a class="page-link" href="javascript:void(0);">'+1+'</a></li>');
      for (var i = 1; i < pages; i++) {
        
        $(".pagination").append('<li class="page-item number" data-pager="'+(i+1)+'"><a class="page-link" href="javascript:void(0);">'+(i+1)+'</a></li>');
        
      }
      if (pages == 1) {
        $(".pagination").append('<li id="next" class="page-item disabled"><a class="page-link" href="javascript:void(0);">Next</a></li>');
      }else{
        $(".pagination").append('<li id="next" class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>');
      }
    }
    
    // alert(position);
 }

  Pager();
  portfolioIsotope.isotope({ filter: '[data-pager = "1"]' });
  pageOnClick();
  nextOnClick();
  prevOnClick();

  $('#portfolio-flters li').on( 'click', function() {
    $("#portfolio-flters li").removeClass('filter-active');
    $(this).addClass('filter-active');

    //remove and update data pager
    $(".portfolio-item").removeAttr('data-pager');
    $(".pagination").empty();
    // $(".portfolio-item"+$(this).data("filter")).attr("data-pager","2");  
    
    var position = $(this).attr('data-filter');
    Pager (position);
    
    portfolioIsotope.isotope({ filter: $(this).data('filter')+'[data-pager = "1"]' });
    // portfolioIsotope.isotope({ filter: '[data-pager = "1"]' });

    // alert(numberofItem)
    // alert ('.portfolio-item'+$(this).data("filter"));
    pageOnClick();
    nextOnClick();
    prevOnClick();
    
  });

  // console.log($('.pagination li.number.active').data('pager'));
  function pageOnClick() {
    $('.pagination li.number').on('click', function() {
      $('.pagination li.number').removeClass('active');
      $(this).addClass('active');
      var current = $('.pagination li.number.active').data('pager');
      var Totalpages = $('.pagination li.number').children().length;

      if (current == 1) {
        if ($('#next').hasClass('disabled')) {
          $('#next').removeClass('disabled');
        }
        $('#prev').addClass('disabled');
      }else if(current == Totalpages){
        if ($('#prev').hasClass('disabled')) {
          $('#prev').removeClass('disabled');
        }
        $('#next').addClass('disabled');
      }else{
        if ($('#next').hasClass('disabled')) {
          $('#next').removeClass('disabled');
        }
        if ($('#prev').hasClass('disabled')) {
          $('#prev').removeClass('disabled');
        }
      }
      portfolioIsotope.isotope({filter:'[data-pager ="'+$(this).data('pager')+'"]'}); 
    });
  }

  function nextOnClick(){
    $('.pagination li#next').on('click',function(){

      if ($('#next').hasClass('disabled')) {
        return false
      }else{
        var current = $('.pagination li.number.active').data('pager');
        var Totalpages = $('.pagination li.number').children().length;
        if (Totalpages == 1) {
          var selanjutnya = current + 1;
        }else{
          var selanjutnya = current + 1;
        }
        

        // console.log($('.pagination li.number [data-pager="'+selanjutnya+'"]'));
        $('.pagination li.number[data-pager="'+current+'"]').removeClass('active');
        $('.pagination li.number[data-pager="'+selanjutnya+'"]').addClass('active');

        if (selanjutnya == 1) { 
          if ($('#next').hasClass('disabled')) {
            $('#next').removeClass('disabled');
          }
          $('#prev').addClass('disabled');
        }else if(selanjutnya == Totalpages){
          if ($('#prev').hasClass('disabled')) {
            $('#prev').removeClass('disabled');
          }
          $('#next').addClass('disabled');
        }else{
          if ($('#next').hasClass('disabled')) {
            $('#next').removeClass('disabled');
          }
          if ($('#prev').hasClass('disabled')) {
            $('#prev').removeClass('disabled');
          }
        }

        portfolioIsotope.isotope({filter:'[data-pager ="'+selanjutnya+'"]'});
      }

      

    })      
  }
  
  function prevOnClick(){
    $('.pagination li#prev').on('click',function(){
      if ($('#prev').hasClass('disabled')) {
        return false
      }else{
        var current = $('.pagination li.number.active').data('pager');
        var Totalpages = $('.pagination li.number').children().length;
        var sebelumnya = current - 1;
  
        // console.log($('.pagination li.number [data-pager="'+sebelumnya+'"]'));
        $('.pagination li.number[data-pager="'+current+'"]').removeClass('active');
        $('.pagination li.number[data-pager="'+sebelumnya+'"]').addClass('active');
  
        if (sebelumnya == 1) {
          if ($('#next').hasClass('disabled')) {
            $('#next').removeClass('disabled');
          }
          $('#prev').addClass('disabled');
        }else if(sebelumnya == Totalpages){
          if ($('#prev').hasClass('disabled')) {
            $('#prev').removeClass('disabled');
          }
          $('#next').addClass('disabled');
        }else{
          if ($('#next').hasClass('disabled')) {
            $('#next').removeClass('disabled');
          }
          if ($('#prev').hasClass('disabled')) {
            $('#prev').removeClass('disabled');
          }
        }
  
        portfolioIsotope.isotope({filter:'[data-pager ="'+sebelumnya+'"]'});
      }
    })
  }
 
// coba();