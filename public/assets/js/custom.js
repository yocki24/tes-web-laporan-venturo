/** Core script to handle the entire theme and core functions **/
var Tixia = function(){
	
	/* Search Bar ============ */
	var screenWidth = $( window ).width();
	
	var handleSelectPicker = function(){
		if(jQuery('.default-select').length > 0 ){
			jQuery('.default-select').selectpicker();
		}
	}
	
	var handleTheme = function(){
		$('#preloader').fadeOut(500);
		$('#main-wrapper').addClass('show');
	}
	
	var handleMetisMenu = function() {
		if(jQuery('#menu').length > 0 ){
			$("#menu").metisMenu();
		}
		jQuery('.metismenu > .mm-active ').each(function(){
			if(!jQuery(this).children('ul').length > 0)
			{
				jQuery(this).addClass('active-no-child');
			}
		});
	}
	
	var handleAllChecked = function() {
		$("#checkAll").on('change',function() {
			$("td input:checkbox, .custom-checkbox input:checkbox").prop('checked', $(this).prop("checked"));
		});
	}
	
	var handleNavigation = function() {
		$(".nav-control").on('click', function() {

			$('#main-wrapper').toggleClass("menu-toggle");

			$(".hamburger").toggleClass("is-active");
		});
	}
	
	var handleCurrentActive = function() {
		for (var nk = window.location,
			o = $("ul#menu a").filter(function() {
				return this.href == nk;
			})
			.addClass("mm-active")
			.parent()
			.addClass("mm-active");;) {
		// console.log(o)
		if (!o.is("li")) break;
			o = o.parent()
				.addClass("mm-show")
				.parent()
				.addClass("mm-active");
		}
	}
	var handleCkEditor = function(){
		if(jQuery("#ckeditor").length>0) {
			ClassicEditor
			.create( document.querySelector( '#ckeditor' ), {
				// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
			} )
			.then( editor => {
				window.editor = editor;
			} )
			.catch( err => {
				console.error( err.stack );
			} );
		}
	}
	
	var handleCustomFileInput = function() {
		$(".custom-file-input").on("change", function() {
			var fileName = $(this).val().split("\\").pop();
			$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
		});
	}
	
	var handleMiniSidebar = function() {
		$("ul#menu>li").on('click', function() {
			const sidebarStyle = $('body').attr('data-sidebar-style');
			if (sidebarStyle === 'mini') {
				console.log($(this).find('ul'))
				$(this).find('ul').stop()
			}
		})
	}
	
	var handleMinHeight = function() {
		var win_h = window.outerHeight;
		var win_h = window.outerHeight;
		if (win_h > 0 ? win_h : screen.height) {
			$(".content-body").css("min-height", (win_h + 60) + "px");
		};
	}
	
	var handleDataAction = function() {
		$('a[data-action="collapse"]').on("click", function(i) {
			i.preventDefault(),
				$(this).closest(".card").find('[data-action="collapse"] i').toggleClass("mdi-arrow-down mdi-arrow-up"),
				$(this).closest(".card").children(".card-body").collapse("toggle");
		});

		$('a[data-action="expand"]').on("click", function(i) {
			i.preventDefault(),
				$(this).closest(".card").find('[data-action="expand"] i').toggleClass("icon-size-actual icon-size-fullscreen"),
				$(this).closest(".card").toggleClass("card-fullscreen");
		});



		$('[data-action="close"]').on("click", function() {
			$(this).closest(".card").removeClass().slideUp("fast");
		});

		$('[data-action="reload"]').on("click", function() {
			var e = $(this);
			e.parents(".card").addClass("card-load"),
				e.parents(".card").append('<div class="card-loader"><i class=" ti-reload rotate-refresh"></div>'),
				setTimeout(function() {
					e.parents(".card").children(".card-loader").remove(),
						e.parents(".card").removeClass("card-load")
				}, 2000)
		});
	}

	var handleHeaderHight = function() {
		const headerHight = $('.header').innerHeight();
		$(window).scroll(function() {
			if ($('body').attr('data-layout') === "horizontal" && $('body').attr('data-header-position') === "static" && $('body').attr('data-sidebar-position') === "fixed")
				$(this.window).scrollTop() >= headerHight ? $('.deznav').addClass('fixed') : $('.deznav').removeClass('fixed')
		});
	}
	
	var handledzScroll = function() {
		jQuery('.dz-scroll').each(function(){
		
			var scroolWidgetId = jQuery(this).attr('id');
			const ps = new PerfectScrollbar('#'+scroolWidgetId, {
			  wheelSpeed: 2,
			  wheelPropagation: true,
			  minScrollbarLength: 20
			});
		})
	}
	
	var handleMenuTabs = function() {
		if(screenWidth <= 991 ){
			jQuery('.menu-tabs .nav-link').on('click',function(){
				if(jQuery(this).hasClass('open'))
				{
					jQuery(this).removeClass('open');
					jQuery('.fixed-content-box').removeClass('active');
					jQuery('.hamburger').show();
				}else{
					jQuery('.menu-tabs .nav-link').removeClass('open');
					jQuery(this).addClass('open');
					jQuery('.fixed-content-box').addClass('active');
					jQuery('.hamburger').hide();
				}
				//jQuery('.fixed-content-box').toggleClass('active');
			});
			jQuery('.close-fixed-content').on('click',function(){
				jQuery('.fixed-content-box').removeClass('active');
				jQuery('.hamburger').removeClass('is-active');
				jQuery('#main-wrapper').removeClass('menu-toggle');
				jQuery('.hamburger').show();
			});
		}
	}
	
	var handleChatbox = function() {
		jQuery('.bell-link').on('click',function(){
			jQuery('.chatbox').addClass('active');
		});
		jQuery('.chatbox-close').on('click',function(){
			jQuery('.chatbox').removeClass('active');
		});
	}
	
	var handleBtnNumber = function() {
		$('.btn-number').on('click', function(e) {
			e.preventDefault();

			fieldName = $(this).attr('data-field');
			type = $(this).attr('data-type');
			var input = $("input[name='" + fieldName + "']");
			var currentVal = parseInt(input.val());
			if (!isNaN(currentVal)) {
				if (type == 'minus')
					input.val(currentVal - 1);
				else if (type == 'plus')
					input.val(currentVal + 1);
			} else {
				input.val(0);
			}
		});
	}
	
	var handledzChatUser = function() {
		jQuery('.dz-chat-user-box .dz-chat-user').on('click',function(){
			jQuery('.dz-chat-user-box').addClass('d-none');
			jQuery('.dz-chat-history-box').removeClass('d-none');
		}); 
		
		jQuery('.dz-chat-history-back').on('click',function(){
			jQuery('.dz-chat-user-box').removeClass('d-none');
			jQuery('.dz-chat-history-box').addClass('d-none');
		}); 
		
		jQuery('.dz-fullscreen').on('click',function(){
			jQuery('.dz-fullscreen').toggleClass('active');
		});
	}
	
	var handledzFullScreen = function() {
		jQuery('.dz-fullscreen').on('click',function(e){
			if(document.fullscreenElement||document.webkitFullscreenElement||document.mozFullScreenElement||document.msFullscreenElement) { 
				/* Enter fullscreen */
				if(document.exitFullscreen) {
					document.exitFullscreen();
				} else if(document.msExitFullscreen) {
					document.msExitFullscreen(); /* IE/Edge */
				} else if(document.mozCancelFullScreen) {
					document.mozCancelFullScreen(); /* Firefox */
				} else if(document.webkitExitFullscreen) {
					document.webkitExitFullscreen(); /* Chrome, Safari & Opera */
				}
			} 
			else { /* exit fullscreen */
				if(document.documentElement.requestFullscreen) {
					document.documentElement.requestFullscreen();
				} else if(document.documentElement.webkitRequestFullscreen) {
					document.documentElement.webkitRequestFullscreen();
				} else if(document.documentElement.mozRequestFullScreen) {
					document.documentElement.mozRequestFullScreen();
				} else if(document.documentElement.msRequestFullscreen) {
					document.documentElement.msRequestFullscreen();
				}
			}		
		});
	}
	
	var handlePerfectScrollbar = function() {
		if(jQuery('.deznav-scroll').length > 0)
		{
			const qs = new PerfectScrollbar('.deznav-scroll');
		}
	}
	
	var handleheartBlast = function (){
		$(".heart").on("click", function() {
			$(this).toggleClass("heart-blast");
		});
	}
	
	var handleshowPass = function (){
		jQuery('.show-pass').on('click',function(){
			jQuery(this).toggleClass('active');
			if(jQuery('#dz-password').attr('type') == 'password'){
				jQuery('#dz-password').attr('type','text');
			}else if(jQuery('#dz-password').attr('type') == 'text'){
				jQuery('#dz-password').attr('type','password');
			}
		});
	}
	
	var handleLightgallery = function (){
		if(jQuery('#lightgallery, .lightgallery').length>0) {
			$('#lightgallery, .lightgallery').lightGallery({
				thumbnail:true,
			});
		}
	}
	
	var handleEventSidebar = function (){
		
		var dataLayout = jQuery('body').data('layout');
		
		if(jQuery('.schedule-event-inner').length>0) {
			jQuery('.schedule-event-inner').unbind().on('click',function(){
				jQuery('.event-sidebar').toggleClass('active');
			});
		}
		
		if((dataLayout == 'horizontal') || (jQuery('.schedule-event').length > 0 && 1400 > screenWidth) ) {
			jQuery('.schedule-event').on('click',function(){
				jQuery('.event-sidebar').toggleClass('active');
			});
		}
	}
	
	var handleDateTimePicker = function (){
		if(jQuery('#datetimepicker1').length>0) {
			$('#datetimepicker1').datetimepicker({
				inline: true,
			});
		}
	}
	
	var domoPanel = function(){
		if(jQuery('.dz-demo-panel').length>0) {
			const ps = new PerfectScrollbar('.dz-demo-content');
			$('.dz-demo-trigger').on('click', function() {
					$('.dz-demo-panel').addClass('show');
			  });
			  $('.dz-demo-close, .bg-close').on('click', function() {
					$('.dz-demo-panel').removeClass('show');
			  });
			  
			  $('.dz-demo-bx').on('click', function() {
				  $('.dz-demo-bx').removeClass('demo-active');
				  $(this).addClass('demo-active');
			  });
		} 
	} 
	
	var vHeight = function(){
        var ch = $(window).height() - 206;
        $(".chatbox .msg_card_body").css('height',ch);
    }
	
	var handleSmartWizard = function(){
		if(jQuery('#smartwizard').length>0) {
			$('#smartwizard').smartWizard(); 
		}
	}
	
	function handleSupport(){	
		var support = '<script id="DZScript" src="../../../dzassets.s3.amazonaws.com/w3-global8bb6.js?btn_dir=right"></script>';
		jQuery('body').append(support);
	}
	
	/* Function ============ */
	return {
		init:function(){
			handleSelectPicker();
			handleTheme();
			handleMetisMenu();	
			handleAllChecked();	
			handleNavigation();
			handleCurrentActive();
			handleCustomFileInput();
			handleMiniSidebar();
			handleMinHeight();
			handleDataAction();
			handleHeaderHight();
			handledzScroll();
			handleMenuTabs();
			handleChatbox();
			handleBtnNumber();
			handledzChatUser();
			handledzFullScreen();
			handlePerfectScrollbar();
			handleheartBlast();
			handleshowPass();
			handleLightgallery();
			handleEventSidebar();
			handleDateTimePicker();
			domoPanel();
			vHeight();
			handleSupport();
			handleSmartWizard();
			handleCkEditor();
		},

		load:function(){
			handleSelectPicker();
			handleTheme();
		},
		
		resize:function(){
			screenWidth = $( window ).width();
			vHeight();
			handleEventSidebar();
		}
	}
	
}();

/* Document.ready Start */	
jQuery(document).ready(function() {
    $('[data-toggle="popover"]').popover(), Tixia.init();
    [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]')).map(function(e) {
        return new bootstrap.Popover(e)
    })
}), 

/* Window Load START */
jQuery(window).on('load',function () {
	'use strict'; 
	Tixia.load();
	
});
/*  Window Load END */
/* Window Resize START */
jQuery(window).on('resize',function () {
	'use strict'; 
	Tixia.resize();
});
/*  Window Resize END */