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
          var Headheight = document.getElementById("header").offsetHeight;
      }
      if ($(window).width() > 700) {
        var homeItemHeight = $(".home-image").height();
          $(".home-content").height(homeItemHeight);
      }
  	});

		$(window).resize(function(){
      if ($(window).width() < 700) {
        var Headheight = document.getElementById("header").offsetHeight;
        $(".home-content").height('auto');
      }
      if ($(window).width() > 700) {
        var homeItemHeight = $(".home-image").height();
          $(".home-content").height(homeItemHeight);
      }
      var headerHeight2 = $(".mobile-logo").height();
        $(".slicknav_btn").height(headerHeight2);

		});
