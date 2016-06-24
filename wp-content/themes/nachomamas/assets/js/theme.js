equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;
 $(container).each(function() {

   $el = $(this);
   $($el).height('auto')
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
   } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}


    $(window).load(function(){
      var headerHeightMobile = $(".mobile-logo").height();
      var bannerHeight = $(".banner-image").height();
      var Headheight = document.getElementById("header").offsetHeight;
      var homeItemHeight = $(".home-image").height();

      equalheight('.event-item-wrapper');

      $('#mobile-menu .menu').slicknav({
        label: '',
        prependTo: '#mobile-menu-location',
        duration: '1000',
        label: 'Menu',
      });

      $(".slicknav_btn").height(headerHeightMobile);

      if ($(window).width() < 700) {
        $(".main-banner").height(bannerHeight);
      }

      if ($(window).width() > 700) {
        document.getElementById("banner-overlay").style.paddingTop = Headheight + 'px';
        document.getElementById("banner-overlay").style.paddingBottom = Headheight + 'px';
        $(".home-content").height(homeItemHeight);
        $(".main-banner").height(bannerHeight);
      }

      if ($(window).width() < 1122) {
          document.getElementById("banner-overlay").style.paddingBottom =  '0px';
      }

  	});

		$(window).resize(function(){
      var headerHeightMobile = $(".mobile-logo").height();
      var bannerHeight = $(".banner-image").height();
      var Headheight = document.getElementById("header").offsetHeight;
      var homeItemHeight = $(".home-image").height();
      var headerHeight2 = $(".mobile-logo").height();
      equalheight('.event-item-wrapper');

      $(".slicknav_btn").height(headerHeight2);

      if ($(window).width() < 700) {
        $(".home-content").height('auto');
        $(".main-banner").height(bannerHeight);
      }

      if ($(window).width() > 700) {
          document.getElementById("banner-overlay").style.paddingTop = Headheight + 'px';
          document.getElementById("banner-overlay").style.paddingBottom = Headheight + 'px';
            $(".home-content").height(homeItemHeight);
            $(".main-banner").height(bannerHeight);
      }

      if ($(window).width() < 1122) {
          document.getElementById("banner-overlay").style.paddingBottom =  '0px';
      }

		});
