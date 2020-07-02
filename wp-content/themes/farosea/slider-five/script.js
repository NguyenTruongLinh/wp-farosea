/*Slide Home*/
$(document).ready(function() {
	$(".slider-banner").on("init", function(e, slick) {
		var $firstAnimatingElements = $('div.banner-content:first-child').find('[data-animation]');
		doAnimations($firstAnimatingElements);    
	});
	$('.slider-banner').on('beforeChange', function(e, slick, currentSlide, nextSlide) {
			  var $animatingElements = $('div.banner-content[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
			  doAnimations($animatingElements);    
	});
	$('.slider-banner').slick({
		infinite: true,
		speed: 700,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay:true,
		fade: true,
		cssEase: 'ease-in-out',
		arrows: true,
		dots:false
	  });
	function doAnimations(elements) {
		var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
		elements.each(function() {
			var $this = $(this);
			var $animationDelay = $this.data('delay');
			var $animationType = 'animated ' + $this.data('animation');
			$this.css({
				'animation-delay': $animationDelay,
				'-webkit-animation-delay': $animationDelay
			});
			$this.addClass($animationType).one(animationEndEvents, function() {
				$this.removeClass($animationType);
			});
		});
	}
});

/*End Slide Home*/


$(document).on('mouseenter', '.card-item', function(e) {
          let $this = $(this);
          if ( this.dataset.hoverImg !== undefined ) {
            $.each( this.dataset.hoverImg.split(','), function(index, value) {
              $this.parent().find('.hover-slide-img').eq(index).attr( 'src', value );
            } );
          }
        })

/*END Slide architecture*/



/**************MENU******************/

$(document).ready(function() { 
    $("#main-menu .menu > ul > li").each(function(index) {
        $(this).hover(function(event) {
            $(this).find("ul").css("display", "block");
            activeItem(this);
        }, function(event) {
            $(this).find("span").width(0);
            inactiveItem(this);
        });
    });
    var topSticky = 10;
    var responsive = 0;

    function stickyMenuScroll() {
        var widthWindow = $(window).width();
        var scrollTop = $(window).scrollTop();
        setStickyMenu(widthWindow < responsive || scrollTop > topSticky);
    }


    stickyMenuScroll();
    $(window).on("scroll resize", function() {
        stickyMenuScroll();
    });
});
/*************** SET MENU HOVER *************/



function setStickyMenu(isSticky) {
    if (isSticky) {
        $("#header").addClass("menu-sticky");
        $(".page-category").css("opacity", "0");
    } else {
        $("#header").removeClass("menu-sticky");
        if($("#main-menu").hasClass('open')){
       
            $(".page-category").css("opacity", "0");
        }
        else{
            $(".page-category").css("opacity", "1");
        }
    }
     

}
$("#main-menu .toggle-menu").click(function() {
		if ($("#main-menu").hasClass('open')) {
			$("#header").removeClass("menu-sticky");
			$("#main-menu  .menu-deg").css("opacity", "1");
			$(".page-category").css("opacity", "1");
			$(".button-menu").css("position", "relative").css("right", "unset");

			$("#main-menu .menu a.animated").removeClass('fadeInDownShort go');
		} else {
			if($(window).width() > 480){
				$(".button-menu").css("position", "fixed").css("right", "15px");
			}
			else{
				$(".button-menu").css("position", "fixed").css("right", "15px");
			}
			
			$("#main-menu .menu a.animated").addClass('fadeInDownShort go');
			//$("#main-menu .footer").addClass('fadeInDownShort go');

		}
		$("#main-menu").toggleClass('open');
		$("#bot-reg-m").toggleClass("hidden").delay(300);
	})
        $(document).ready(function() {
            scrollMenuResponsive();
            $(window).resize(function(e) {
               // changeImages();
                scrollMenuResponsive();
                hiddenflow();
                e.preventDefault();

            });

            function scrollMenuResponsive() {
                var heightContainer = $("#main-menu .menu-container").height();
                var heightTop = $("#main-menu .top-menu").outerHeight(true);
                var heightMenu = $("#main-menu ul.list-item").outerHeight(true);
                var heightBot = $("#main-menu .bot-menu").outerHeight(true);
                if (heightTop + heightMenu + heightBot > heightContainer) {
                    $("#main-menu .scroll-responsive").addClass("active");
                    $("#main-menu .scroll-responsive").height(heightContainer - heightTop);
                }
            }
            $("#main-menu .scroll-responsive").scroll(function(e) {
                e.stopPropagation();
            })
        })
        var responsiveWidth = 992;

        function loadMenu() {
            if ($(window).width() >= 768) {
                $(".navbar-toggle").addClass("active");
                $(".navbar-collapse").addClass("in");
                $(".navbar-collapse").css("min-height", "0").css("max-height", "10000");
                           

            } else {
                $(".navbar-toggle").removeClass("active");
                $(".navbar-collapse").removeClass("in");
                $(".navbar-collapse").css("min-height", $(window).height() - 100).css("max-height", $(window).height() - 100);
            }
        }

        function hiddenflow() {
            $('body').css("overflow", "unset");
        }


        /***************************************/
     
        $(document).ready(function($) {
            $(".open-menu").click(function() {
                $(".open-menu").hide();
                $(".close-menu").show();
                $(".hide-show-menu").slideDown("slow");
                $(".page-category").addClass("hide");
            });
            $('.close-menu').click(function() {
                $('.close-menu').hide();
                $('.open-menu').show();
                $('.hide-show-menu').slideUp("slow");
                $(".page-category").removeClass("hide");
            });
            
            $(".navbar-toggle").click(function() {
                $(this).toggleClass("open");
                if ($(window).width() < 768) {
                    if ($(this).hasClass("open")) {
                        $("body").addClass('open-menu');
                    } else {
                        $("body").removeClass('open-menu');
                    }
                }
            });
            $(document).ready(function() {

                $(".open-menu").click(function() {
                    $($(this).data("id")).toggleClass("open");
                    $(this).toggleClass("open");
                });
                $(".close-menu").click(function() {
                    $($(this).data("id")).removeClass("open");
                });               

            });
        });
//Home parallax
function isInViewport(node) {
  let rect = node.getBoundingClientRect();
  return (
    (rect.height > 0 || rect.width > 0) &&
    rect.bottom >= 0 &&
    rect.right >= 0 &&
    rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.left <= (window.innerWidth || document.documentElement.clientWidth)
  );
}
(function($) {
  $(document).ready(function() {
    let $document = $(document);
    let $window = $(window);
    (function($bool) {
      if ( !$bool ) { return false; }

      let parallaxOffset = 4;
      // Populate images from data attributes.
      let scrolled = $window.scrollTop();
      let setBgPosition = function(distance) {
        let $this = $(this);
        $this.css( 'background-position','center ' + distance + 'px' );
      }
      $('.parallax').each(function(index) {
        let $this = $(this);
        let imageSrc = $this.data('image-src');
        let imageHeight = $this.data('height');
        if ( imageSrc == undefined ) { return true; } //continue
        $this.css('background-image','url(' + imageSrc + ')');
        $this.css('height', imageHeight);

        // Adjust the background position.
        let initY = $this.offset().top;
        let height = $this.height();
        let diff = scrolled - initY;
        let ratio = Math.round((diff / height) * 100);
        setBgPosition.call( this, parseInt(-(ratio * parallaxOffset)) );
      });


      $window.on('scroll', function(e) {
        let scrolled = $window.scrollTop();
        $('.parallax').each(function(index, element) {
          let $this = $(this);
          let initY = $this.offset().top;
          let height = $this.height();
          let endY  = initY + $this.height();

          // Check if the element is in the viewport.
          let visible = isInViewport(this);
          if (visible) {
            let diff = scrolled - initY;
            let ratio = Math.round((diff / height) * 100);
            setBgPosition.call( this, parseInt(-(ratio * parallaxOffset)) );
          }
        });

      });

    })(true);

  });
})(jQuery);


/*Slide New */
$( document ).ready(function() {
	$(".box-slider-content").slick({
	  dots: true,
	  centerPadding: '20px',      
	  infinite: true,
	  speed: 300,
	  slidesToShow: 1,
	  adaptiveHeight: true,
	});
	
	$("#main-menu .menu > ul > li > a").click(function(e){
		if($(window).width()< 768 && $(this).next().is("ul") ){
			$("#main-menu .menu > ul ul").hide(0);
			$(this).next().show();
			e.preventDefault();
			return false;
			
		}
		
	});
	
	
});

function sendContact(data){
    return new Promise((resolve, reject) => {
        $.ajax({
        	type: "POST",
        	url: "/api/contact",
        	data,
        	success:  (msg) => {
        		if (msg == "true") {
                    return resolve();
        		}
        		else {
                    return reject();
        		}
        	}
        });
    });
}

function sendEmarketing(data){
    return new Promise((resolve, reject) => {
        $.ajax({
        	type: "POST",
        	url: "https://emarketing.megaon.vn/form.php?form=5",
        	data,
        	success:  (msg) => {
                return resolve();
        	}
        });
    });
}

/*Contact email*/
$(document).ready(function () {
	$("#frmContact.ajax").submit(function(form){
        form.preventDefault();
        $(this).find(".cmdContactSend").val("Loading...").prop('disabled', true);
        const data = new Map($(this).serializeArray().map(({name, value}) => [name, value]));
        const emarketing = {
            email: data.get("txtEmail"),
            "CustomFields[2]": data.get("txtName"),
            "CustomFields[5]": data.get("txtMobile"),
            "CustomFields[13]": data.get("txtMessage"),
            format: "h"
        };

        const func = () => {
            sendContact($(this).serialize()).then(() => {
                $(this).find(".cmdContactSend").val("ÄĂƒ ÄÄ‚NG KĂ").prop('disabled', true);
                if($(this).hasClass("redirect")){
                    window.location.href = "/cam-on.html";
                }else{
                    alert("ÄÄƒng kĂ½ thĂ nh cĂ´ng");
                }
            }).catch(() => {
                $(this).find(".cmdContactSend").val("Gá»¬I ÄÄ‚NG KĂ").prop('disabled', false);
                alert("ÄÄƒng kĂ½ khĂ´ng thĂ nh cĂ´ng");
            });
        };

        try{
            // func();
            sendEmarketing(emarketing).then(func).catch(func);
        }catch(error){
            $(this).find(".cmdContactSend").val("Gá»¬I ÄÄ‚NG KĂ").prop('disabled', false);
            alert("ÄÄƒng kĂ½ khĂ´ng thĂ nh cĂ´ng");
        }

        return false; 
    });
});