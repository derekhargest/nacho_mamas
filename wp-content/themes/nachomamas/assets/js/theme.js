  	$(document).ready(function(){

  		$('#mobile-menu .menu').slicknav({
  			label: '',
  			prependTo: '#mobile-menu-location',
  			duration: '1000',
  			label: 'Menu',
  		});

      var headerHeight = $(".mobile-logo").height();
        $(".slicknav_btn").height(headerHeight);

  	});

  	$(window).load(function(){
        if ($(window).width() < 700) {
          var bannerHeight = $(".banner-image").height();
            $(".main-banner").height(bannerHeight);
      }
      if ($(window).width() > 700) {
        var Headheight = document.getElementById("header").offsetHeight;
        document.getElementById("banner-overlay").style.paddingTop = Headheight + 'px';
        document.getElementById("banner-overlay").style.paddingBottom = Headheight + 'px';
        var homeItemHeight = $(".home-image").height();
        var bannerHeight = $(".banner-image").height();
          $(".home-content").height(homeItemHeight);
          $(".main-banner").height(bannerHeight);
      }
      if ($(window).width() < 1140) {
          document.getElementById("banner-overlay").style.paddingBottom =  '0px';
      }
  	});

		$(window).resize(function(){
      if ($(window).width() < 700) {
        $(".home-content").height('auto');
        var bannerHeight = $(".banner-image").height();
          $(".main-banner").height(bannerHeight);
      }
      if ($(window).width() > 700) {
        var homeItemHeight = $(".home-image").height();
          $(".home-content").height(homeItemHeight);
          var Headheight = document.getElementById("header").offsetHeight;
          document.getElementById("banner-overlay").style.paddingTop = Headheight + 'px';
          document.getElementById("banner-overlay").style.paddingBottom = Headheight + 'px';
          var bannerHeight = $(".banner-image").height();
            $(".home-content").height(homeItemHeight);
            $(".main-banner").height(bannerHeight);
      }
        if ($(window).width() < 1140) {
            document.getElementById("banner-overlay").style.paddingBottom =  '0px';
        }
      var headerHeight2 = $(".mobile-logo").height();
        $(".slicknav_btn").height(headerHeight2);

		});
