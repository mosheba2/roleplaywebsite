var swiper = new Swiper('.product-slider', {
    spaceBetween: 30,
    effect: 'fade',
    // initialSlide: 2,
    loop: false,
    navigation: {
        nextEl: '.next',
        prevEl: '.prev'
    },
    // mousewheel: {
    //     // invert: false
    // },
    on: {
        init: function(){
            var index = this.activeIndex;

            var target = $('.product-slider__item').eq(index).data('target');

            console.log(target);

            $('.product-img__item').removeClass('active');
            $('.product-img__item#'+ target).addClass('active');
        }
    }

});

swiper.on('slideChange', function () {
    var index = this.activeIndex;

    var target = $('.product-slider__item').eq(index).data('target');

    console.log(target);

    $('.product-img__item').removeClass('active');
    $('.product-img__item#'+ target).addClass('active');

    if(swiper.isEnd) {
        $('.prev').removeClass('disabled');
        $('.next').addClass('disabled');
    } else {
        $('.next').removeClass('disabled');
    }

    if(swiper.isBeginning) {
        $('.prev').addClass('disabled');
    } else {
        $('.prev').removeClass('disabled');
    }
});

$(".js-fav").on("click", function() {
    $(this).find('.heart').toggleClass("is-active");
});








/*
  News Ticker - Prashant Shrestha
  Date: 2018-03-03
*/

var hoveredAnnouncement = null;

function announcementTicker() {
  $(".announcements")
    .filter(function(item) {
      return !$(this).is(hoveredAnnouncement);
    })
    .each(function() {
      $(this)
        .find("li:first")
        .slideUp(function() {
          var announcement = $(this).closest(".announcements");
          $(this)
            .appendTo(announcement)
            .slideDown();
        });
    });
}
setInterval(announcementTicker, 3500);

$(function() {  
  $(".announcements").hover(
    function() {
      hoveredAnnouncement = $(this);
    },
    function() {
      hoveredAnnouncement = null;
    }
  );
});



var swiper = new Swiper('.blog-slider', {
  spaceBetween: 30,
  effect: 'fade',
  loop: false,
  mousewheel: {
    invert: false,
  },
  // autoHeight: true,
  pagination: {
    el: '.blog-slider__pagination',
    clickable: true,
  }
});





