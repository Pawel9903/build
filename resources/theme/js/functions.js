var $ = jQuery.noConflict();

var contrive = contrive || {};

(function($){
	"use strict";

	contrive.pageAnimsition = function(){
		if( !$('body').hasClass('no-preloader') ){
			var animationIn =  $("body").data("animsition-in"),
				animationOut = $("body").data("animsition-out"),
				speedIn = $("body").data("speed-in"),
				speedOut = $("body").data("speed-out");

				animationIn || ( animationIn = 'fade-in' );
				animationOut || ( animationOut = 'fade-out' );
				speedIn || ( speedIn = 1500 );
				speedOut || ( speedOut = 800 );

				speedIn = parseInt( speedIn, 10),
				speedOut = parseInt( speedOut, 10);

			$('.contrive-theme-container').animsition({
				inClass : animationIn,
				outClass : animationOut,
				inDuration : speedIn,
				outDuration : speedOut,
				linkElement : '.main-nav ul li a:not([target="_blank"]):not([href^=#])'
			});
		}
	},

	contrive.fullScreenSection = function(){
		var t = $(".contrive-full-screen",".contrive-theme-container");
		t.length > 0 && t.each(function(){

			var ele = $(this),
				windowHeight = $(window).height();

			ele.css('height', windowHeight);
		});
	},

	contrive.header = {

		subMenu : function() {

			$( 'nav.main-nav ul li:has(ul)',"#contrive-masthead").addClass('contrive-has-sub-menu');
		},

		menuSearch : function() {
			var t = $("a.contrive-search",".contrive-search-container");

			if( t.length ) {

				t.on("click", function(e){
					e.preventDefault();

					$('.contrive-search-form').toggleClass('is-visible');
					$('.contrive-search').toggleClass('search-is-visible');
					$('.contrive-search-overlay').toggleClass('search-is-visible');

					$(".contrive-search-form").hasClass("is-visible") ? ( 
						$('.contrive-search-overlay').addClass('is-visible') , 
						$('.contrive-search-form').find('input[type="search"]').focus() )
					: $(".contrive-search-overlay").removeClass("is-visible");
				});
			}
		},

		stickyMenu	: function() {

			if( !$('body').hasClass('no-sticky') ) {

				if( $(window).scrollTop() > 0 ) {
					$(".header-main","#contrive-masthead").addClass("sticky");
				} else {
					if( $(".header-main","#contrive-masthead").hasClass("sticky") ) {
						$(".header-main","#contrive-masthead").removeClass("sticky");
					}
				}
			}
		},

		verticalMenu : function() {

			var t = $("nav#contrive-vertical-nav",".contrive-content-wrap");
			t.length > 0 && t.each(function(){
				var ele = $(this);

				$(this).find("a").on("click", function(e){
					e.preventDefault();

					$(this.hash).length > 0 && (
						$('body,html').animate({ 'scrollTop' : $(this.hash).offset().top },600 ),
						ele.find("a").removeClass("is-selected"),
						$(this).addClass('is-selected')
					);
				});
			});
		},

		verticalMenuCurrentSection : function() {

			var t = $(".contrive-vertical-section",".contrive-content-wrap");
			t.length > 0 && t.each(function(){
				var ele = $(this),
					number = $("nav#contrive-vertical-nav a[href='#"+ele.attr('id')+"']").data('number');

					number = parseInt(number, 10);

				var currentSection = number - 1;

				if ( ( ele.offset().top - $(window).height()/2 < $(window).scrollTop() ) 
						&& ( ele.offset().top + ele.height() - $(window).height()/2 > $(window).scrollTop() ) ) {
					$("nav#contrive-vertical-nav a").eq(currentSection).addClass('is-selected');
				} else {
					$("nav#contrive-vertical-nav a").eq(currentSection).removeClass('is-selected');
				}
			});
		},

		responsiveMenu : function() {

			$("#contrive-responsive-menu-trigger","#contrive-masthead").on("click",function(e){
				$(".main-nav > ul").toggleClass('show');
				return false;
			});
		},

		zoomOutImage : function( arg ) {
			if( arg.width() >= 1170 ) {
				contrive.documentOnReady.windowscroll();
			} else {
				arg.off('scroll');
			}
		},

		animateZoomOutImage : function() {
			var t = $(".contrive-zoomout-header",".contrive-slider-wrap"),
			tHeight = t.height(),
			scaleSpeed = 0.3, // change scaleSpeed if you want to change the speed of the scale effect
			opacitySpeed = 1; // change opacitySpeed if you want to change the speed of opacity reduction effect

			var scrollPercentage = ($(window).scrollTop()/tHeight).toFixed(5),
			scaleValue = 1 - scrollPercentage*scaleSpeed;

			if( $(window).scrollTop() < tHeight ) {
				t.css({
				    '-moz-transform': 'scale(' + scaleValue + ') translateZ(0)',
				    '-webkit-transform': 'scale(' + scaleValue + ') translateZ(0)',
					'-ms-transform': 'scale(' + scaleValue + ') translateZ(0)',
					'-o-transform': 'scale(' + scaleValue + ') translateZ(0)',
					'transform': 'scale(' + scaleValue + ') translateZ(0)',
					'opacity': 1 - scrollPercentage*opacitySpeed
				});
			}
		},
	},

	contrive.ui = {
		init : function(){

			contrive.ui.tabs();

			contrive.ui.toggles();

			contrive.ui.accordions();

			contrive.ui.animateNumbers();

			contrive.ui.progressBars();

			contrive.ui.flickrFeeds();

			contrive.ui.lightBox();

			contrive.ui.parallax();

			contrive.ui.animations();

			contrive.ui.twitterTweets();

			contrive.ui.owlCarousel();

			contrive.ui.iframeVideo();

			contrive.ui.ytbgPlayer();

			contrive.ui.gMap();
			
			contrive.ui.commentForm();	
			
			contrive.ui.gradientAnimation();		
		},

		tabs : function(){
			var t = $(".contrive-tabs-holder",".contrive-theme-container");
			t.length > 0 && t.each(function(){
				var container = $(this),
					tabsli = $('ul.contrive-tabs-nav li', container ),
					tabs = $('ul.contrive-tabs-nav li a', container );

				container.find(".tabs-container").hide().filter(':nth-child(4)').show();
				
				tabs.on("click",function(e){
					e.preventDefault();
					tabsli.removeClass("current");
					$(this).parent('li').addClass("current");
					container.find(".tabs-container").hide().filter(this.hash).show();
				});				
			});
		},

		toggles : function(){
			var t = $(".contrive-toggle-panel",".contrive-theme-container");
			t.length > 0 && t.each(function(){
				var container = $(this),
					state = container.data('state');

				"open" == state ? container.find(".contrive-toggle-title").addClass("current") : container.find('.contrive-toggle-collapse').hide();

				container.find(".contrive-toggle-title").on("click", function(e){
					e.preventDefault();
					$(this).toggleClass("current").next(".contrive-toggle-collapse").slideToggle(500);
				});
			});
		},

		accordions : function(){
			var t = $(".contrive-accordion-holder",".contrive-theme-container");
			t.length > 0 && t.each(function(){
				var container = $(this),
					state = container.data("state"),
					active = container.data("active");

				active ? active -= 1 : active = 0;
				container.find(".contrive-accordion-collapse").hide();

				"closed" != state && container.find(".contrive-accordion-panel:eq("+ Number(active) +")").addClass("current").children(".contrive-accordion-collapse").show();

				container.find(".contrive-accordion-panel").on("click", function(e){
					e.preventDefault();

					if( $(this).children(".contrive-accordion-collapse").is(':hidden') ) {
						container.find(".contrive-accordion-panel").removeClass("current").children(".contrive-accordion-collapse").slideUp("normal");
						$(this).toggleClass("current").children(".contrive-accordion-collapse").slideDown("normal");
					}
				});
			});
		},

		animateNumbers : function(){
			var t = $(".contrive-facts-count",".contrive-theme-container");
			t.length > 0 && t.each(function(){
				var counter = $(this),
					comma = counter.data('comma');

				comma = comma ? !0 : !1;

				counter.appear(function(){
					1 == comma ? counter.countTo({
						formatter : function(e, t){
							return e = e.toFixed(t.decimals), e = e.replace(/\B(?=(\d{3})+(?!\d))/g, ",")
						}
					}) : counter.countTo();
				});
			});
		},

		progressBars : function(){
			var t = $(".contrive-progress-bar-wrapper",".contrive-theme-container");
			t.length > 0 && t.each(function(){
				var container = $(this),
					percent = container.data('percent');

					percent || ( percent = 75 );
					percent = parseInt( percent, 10);

					container.appear(function(){
						container.find(".contrive-facts-count").countTo({
							from:0,
							to: percent,
							onUpdate : function(value){
								container.find(".contrive-progress-bar").css({ width:value+"%"});
							}
						});
					});
			});
		},

		flickrFeeds : function(){
			var t = $("ul.contrive-flickr-widget",".contrive-theme-container");
			t.length > 0 && t.each(function(){
				var t = $(this),
					id = t.data("id"),
					count = t.data("count"),
					size = t.data("image-size"),
					type = t.data("type"),
					stream = "photos_public.gne";
					
					count || ( count = 9 );
					count = parseInt( count, 10);

					"group" == type && (stream = "groups_pool.gne");
					size || ( size = "s" );

					t.jflickrfeed({
						feedapi: stream,
						limit: Number(count),
						qstrings:{ id: id },
						itemTemplate:'<li><a href="{{image_b}}" title="{{title}}" data-lightbox="gallery-item"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
					}, function(){
						contrive.ui.lightBox();
					});
			});
		},

		lightBox : function(){

			var gallery = $('[data-lightbox="gallery"]',".contrive-theme-container");

			gallery.length > 0 && gallery.each(function(){
				var ele = $(this);
				ele.magnificPopup({
					delegate: 'a[data-lightbox="gallery-item"]',
					type: "image",
					closeOnContentClick: true,
					closeBtnInside: false,
					image:{ verticalFit: true },
					gallery:{ enabled: true }
				});
			});
		},

		parallax : function(){
			var t = $(".contrive-parallax",".contrive-row-fw");
			if( t.length > 0 ) {
				contrive.utils.isMobile() ? $(".contrive-parallax").addClass("contrive-mobile-parallax") :  $.stellar({ horizontalScrolling:false, responsive:true, verticalOffset:150 });
			}
		},

		animations : function(){

			var t = $("[data-animate]");
			t.length > 0 && t.each(function(){

				var ele = $(this),
					delay = ele.data("delay"),
					time = 0;

					time = delay ? Number(delay)+500 : 500;
					time = parseInt(time, 10);

					if( !ele.hasClass('animated') ){
						var animation = ele.data('animate');
						animation || ( animation = 'pulse');

						ele.appear(function(){
							setTimeout(function(){
								ele.addClass( animation + " animated");
							}, time );
						},{accX: 100, accY: 120});
					}
			});
		},

		twitterTweets : function(){
			var t = $("ul.contrive-tweets-list",".contrive-theme-container");
			t.length > 0 && t.each(function(){
				var t = $(this),
					account = t.data('account'),
					limit = t.data('limit');

				account || ( account = 'envato' );

				limit || ( limit = 3 );
				limit = parseInt(limit, 10);

				var url = "twitter/tweets.php?username="+account+"&limit="+limit;

				$.getJSON(url,function(data){
					t.html( contrive.utils.formatTwitterTweets(data) );
				});
			});
		},

		owlCarousel : function(){
			var simple = $(".contrive-simple-owl-carousel",".contrive-theme-container");
			simple.length > 0 && simple.each(function(){
				var ele = $(this),
					items = ele.data("items"),
					slidespeed = ele.data("slidespeed"),
					pagination = ele.data("pagination"),
					autoplay = ele.data("autoplay"),
					navigation = ele.data("navigation"),
					customnav = ele.data("custom-navigation");

					items || ( items = 4 );
					items = parseInt(items, 10);

					slidespeed || ( slidespeed = 500 );
					slidespeed = parseInt(slidespeed, 10);

					pagination = pagination ? !0 : !1;
					autoplay = false == autoplay ? !1 : !0;
					navigation = navigation ? !0 : !1;
				
				ele.owlCarousel({
					items : items,
					pagination : pagination, //dots
					slideSpeed : slidespeed ,
					autoPlay : autoplay,
					navigation: navigation,
					lazyLoad:true,
					navigationText: [" Prev ", "Next"]
				});

				customnav ?
					$("#"+customnav+" .next").on("click",function(){
						ele.trigger('owl.next');
					})  
				: !1;

				customnav ?
					$("#"+customnav+" .prev").on("click",function(){
						ele.trigger('owl.prev');
					})
				: !1;
			});
		},

		verticalMiddle : function() {
			var t = $(".contrive-vertical-middle",".contrive-theme-container");
			t.length > 0 && t.each(function(){
				var ele = $(this),
					height = ele.height();

				ele.css({ position: 'absolute', top: '0', right: '0', bottom: '0', left: '0', width: '100%', margin:'auto', height:height+'px'});
			});
		},

		html5Video : function() {
			var t = $(".contrive-video-wrap:has(video)",".contrive-theme-container");
			t.length > 0 && t.each(function(){

				var t = $(this),
				video = t.find('video'),
				outerContainerWidth = t.outerWidth(),
				outerContainerHeight = t.outerHeight(),
				innerVideoWidth = video.outerWidth(),
				innerVideoHeight = video.outerHeight();

				if( innerVideoHeight < outerContainerHeight ) {

					var videoAspectRatio = innerVideoWidth/innerVideoHeight,
					newVideoWidth = outerContainerHeight * videoAspectRatio,
					innerVideoPosition = (newVideoWidth - outerContainerWidth) / 2;

					video.css({
						'width': newVideoWidth+'px',
						'height': outerContainerHeight+'px',
						'left': -innerVideoPosition+'px'
					});

				} else {

					var innerVideoPosition = (innerVideoHeight - outerContainerHeight) / 2;

					video.css({
						'width': innerVideoWidth+'px',
						'height': innerVideoHeight+'px',
						'top': -innerVideoPosition+'px'
					});
				}

				if( contrive.utils.isMobile() ) {
					var placeholderImg = video.attr('poster');
					if( placeholderImg.length > 0 ) {
						t.append('<div class="contrive-video-placeholder" style="background-image: url('+ placeholderImg +');"></div>');
					}
				}
			});
		},

		iframeVideo : function() {
			var t = $(".contrive-iframe-video-wrap",".contrive-theme-container");
			t.length > 0 && t.each(function(){
				$(this).fitVids();
			});
		},

		ytbgPlayer : function(){
			var t = $(".contrive-youtube-wrap",".contrive-theme-container");
			t.length > 0 && t.each(function(){
				var t = $(this),
					container = t.data("container"),
					video = t.data("video"),
					ratio = t.data("ratio"), // "auto", "16/9", "4/3"
					startAt = t.data("start"),
					stopAt = t.data("stop"),
					autoPlay = t.data("autoplay"),
					volume = t.data("volume"), // 1 to 100
					opacity = t.data("opacity"),
					quality = t.data("quality"), //"default", "small", "medium", "large", "hd720", "hd1080", "highres"
					mute = t.data("mute"),
					loop = t.data("loop"),
					showControls = t.data("showcontrols"),
					showYTLogo = t.data("showlogo"),
					realfullscreen = t.data("realfullscreen"),
					optimizeDisplay = t.data("optimizedisplay");

					container || ( container = "self" );
					video || ( video = 'http://youtu.be/A3PDXmYoF5U' );
					ratio || ( ratio = "16/9" );
					startAt || ( startAt = 0 );
					stopAt || ( stopAt = 0 );
					autoPlay = false == autoPlay ? !1 : !0;
					volume || ( volume = 1 );
					opacity || ( opacity = 1 );
					quality || ( quality = "default" );
					mute = true == mute ? !0 : !1;
					loop = true == loop ? !0 : !1;
					showYTLogo = true == showYTLogo ? !0 : !1;
					realfullscreen = true == realfullscreen ? !0 : !1;
					optimizeDisplay = false == optimizeDisplay ? !1 : !0;

				t.mb_YTPlayer({
					containment: container,
					ratio: ratio,
					videoURL: video,
					startAt: startAt,
					stopAt: stopAt,
					autoPlay: autoPlay,
					volume: volume,
					opacity: opacity,
					quality: quality,
					mute: mute,
					loop: loop,
					showControls: !1,
					showYTLogo: showYTLogo,
					realfullscreen: realfullscreen,
					optimizeDisplay: optimizeDisplay
				});
			});
		},

		gMap : function(){
			var t = $(".contrive-map-holder",".contrive-theme-container");
			t.length > 0 && t.each(function(){
				var ele = $(this),
					width = ele.data("width"),
					height = ele.data("height"),
					maptype = ele.data("maptype"),
					zoom = ele.data("zoom"),
					address = ele.data("address"),
					description = ele.data("description"),
					icon = ele.data("icon"),
					iconsize = ele.data("iconsize"),
					popup = ele.data("popup"),
					pancontrol = ele.data("pancontrol"),
					zoomcontrol = ele.data("zoomcontrol"),
					draggable = ele.data("draggable"),
					scrollwheel = ele.data("scrollwheel"),
					typecontrol = ele.data("typecontrol"),
					scalecontrol = ele.data("scalecontrol"),
					streetcontrol = ele.data("streetcontrol"),
					center = ele.data("center");

					width || ( width = '100%' );
					height || ( height = '500px' );
					maptype || ( maptype = 'roadmap' ); //roadmap, satellite, terrain or hybrid

					zoom || ( zoom = '14' ); //1-19
					zoom = parseInt(zoom, 10);

					address || ( address = '' ); //street, city, country | street, city, country | street, city, country
					description || ( description = '' );
					icon || ( icon = '' );
					iconsize || ( iconsize = '' );
					popup = true == popup ? !0 : !1;
					pancontrol = true == pancontrol ? !0 : !1;
					zoomcontrol = true == zoomcontrol ? !0 : !1;
					draggable = false == draggable ? !1 : !0;
					scrollwheel = true == scrollwheel ? !0 : !1;
					typecontrol = true == typecontrol ? !0 : !1;
					scalecontrol = true == scalecontrol ? !0 : !1;
					streetcontrol = true == streetcontrol ? !0 : !1;
					center || ( center = '' ); // latitude, longitude

					$.post( 'gmap/generatemap.php', { 'config':
						{
							'width' : width,
							'height' : height,
							'maptype' : maptype,
							'zoom' : zoom,
							'address' : address,
							'description' : description,
							'popup' : popup,
							'icon' : icon,
							'iconsize' : iconsize,
							'pancontrol' : pancontrol,
							'zoomcontrol' : zoomcontrol,
							'draggable' : draggable,
							'scrollwheel' : scrollwheel,
							'typecontrol' : typecontrol,
							'scalecontrol' : scalecontrol,
							'streetcontrol' : streetcontrol,
							'center' : center
						},
					}).done(function( result ) {
						ele.html(result);
					});
			});
		},

		gMapResize : function(){
			var t = $(".contrive-map",".contrive-theme-container");
			t.length > 0 && t.each(function(){
				var t = $(this),
					map = t.data('gmap').gmap;

				 google.maps.event.trigger( map, 'resize' );
				 t.gMap('fixAfterResize');
			});
		},
		
		commentForm : function(){
			var t = $(".contrive-contact-form");
			t.length > 0 && t.each(function(){
				var t = $(this);
				t.validate({
					ignore: ".ignore",
					errorPlacement: function( error, element ){},
					submitHandler: function(form) {
						$(form).find('.contrive-form-process').fadeIn();
						$(form).ajaxSubmit({
							target: $(form).find('.contrive-contact-form-result'),
							success: function() {
								$(form).find('.contrive-form-process').fadeOut();
								$(form).find(".contrive-form-control").val('');
							}
						});
					}
				});
			});
		},

		gradientAnimation : function() {
			var t = $(".contrive-gradient-animate");
			t.length > 0 && t.each(function(){
				var t = $(this),
					speed = t.data("speed"),					
					colors = t.data("colors");

					speed || ( speed = 35 );										
					colors || ( colors = '#e8594f,#9d8c00,#088b99,#4c0158' );

				var background = 'linear-gradient(270deg,'+ colors	+')';
				var animation = 'contrive-gradient-animate ' + (speed) + 's ease infinite';

				colors = colors.split(',');
				var backgroundsize = (colors.length * 100) + '% ' + (colors.length * 100) + '%';

				t.css('animation', 'none');
				t.css('background-size', 'auto');

				setTimeout(function(){
					t.css('background', background);
					t.css('background-size', backgroundsize);
					t.css('animation', animation );
					$.keyframe.define([{
						name: 'contrive-gradient-animate',
						'0%': { 'background-position': '90% 0%' },
						'50%': { 'background-position': '11% 100%' },
						'100%': { 'background-position': '90% 0%'}
					}]);
				});
			});
		}		
	},

	contrive.portfolio = {

		arrange : function(){

			var t = $(".contrive-portfolio-holder",".contrive-theme-container");
			t.length > 0 && t.each(function(){
				t.isotope('layout');
			});
		},

		filter : function(){

			$(".contrive-portfolio-holder",".contrive-theme-container").each(function(){
				var ele = $(this);
				ele.isotope({ transitionDuration: '0.65s' });
			});

			var t = $("a",".contrive-portfolio-filter");
			t.length > 0 && t.each(function(){

				var ele = $(this);

				ele.on("click",function(e){
					e.preventDefault();

					var filter = ele.data("filter");
					ele.parents("ul").find("a.current").removeClass("current");
					ele.addClass("current");

					$(".contrive-portfolio-holder").isotope({
						filter: filter
					});
				});				
			});
		},

		loadMorePortfolios : function(){

			$(".contrive-portfolio-holder",".contrive-theme-container").each(function(){
				var ele = $(this);

				var $a = ele.infinitescroll({
					loading:{
						finishedMsg: '<i class="fa fa-check"></i>',
						msgText: '<i class="fa fa-spinner fa-spin"></i>',
						speed: 'normal'
					},
					state: {
						isDone : false
					},
					nextSelector:'#load-more-portfolios a',
					navSelector:'#load-more-portfolios',
					itemSelector:'article.contrive-portfolio-item',
					behavior: 'portfolioinfiniteitemsloader'
				}, function( newEle){
					ele.isotope( 'appended', $( newEle ) );
					setTimeout( function(){
						ele.isotope('layout');
					}, 2000 );
				});
			});
		},

		galleryFormat : function() {
			var t = $(".contrive-portfolio-details-slideshow",".contrive-theme-container");
			t.length > 0 && t.each(function(){
				var ele = $(this),
					transition = ele.data("transition"),
					autoplay = ele.data("autoplay"),
					stoponhover = ele.data("stoponhover"),
					navigation = ele.next("#contrive-portfolio-details-slideshow-nav").attr("id");

				transition || ( transition = "fadeUp" ); // fade, backSlide, goDown, fadeUp
				autoplay = false == autoplay ? !1 : !0;
				stoponhover = false == stoponhover ? !1 : !0;

				ele.owlCarousel({
					pagination : false,
					singleItem : true,
					autoHeight : true,
					navigation : navigation,
					autoPlay : autoplay,
					stopOnHover : stoponhover,
					transitionStyle : transition
				});
				
				$("#"+navigation+" .next").on("click", function(){
					ele.trigger('owl.next');
				});
				
				$("#"+navigation+" .prev").on("click",function(){
					ele.trigger('owl.prev');
				});
			});
		},
	},

	contrive.utils = {

		isMobile : function(){
			return contrive.utils.isAndroid() || 
			contrive.utils.isBlackBerry() ||
			contrive.utils.isiOS() ||
			contrive.utils.isOpera() ||
			contrive.utils.isWindows();
		},

        isAndroid: function() {

            return navigator.userAgent.match(/Android/i)
        },

        isBlackBerry: function() {

            return navigator.userAgent.match(/BlackBerry/i)
        },

        isiOS: function() {

            return navigator.userAgent.match(/iPhone|iPad|iPod/i)
        },

        isOpera: function() {

            return navigator.userAgent.match(/Opera Mini/i)
        },

        isWindows: function() {

            return navigator.userAgent.match(/IEMobile|Windows Phone/i)
        },

        formatTwitterTweets: function( tweets ) {
        	var html = [];
        	for( var i=0; i<tweets.length; i++ ) {
        		var username = tweets[i].user.screen_name;
        		var status = tweets[i].text.replace( /((https?|s?ftp|ssh)\:\/\/[^"\s\<\>]*[^.,;'">\:\s\<\>\)\]\!])/g , function(url){
        			return '<a href="'+url+'" target="_blank">'+url+'</a>';
        		}).replace(/\B@([_a-z0-9]+)/ig, function(reply) {
        			return  reply.charAt(0)+'<a href="http://twitter.com/'+reply.substring(1)+'" target="_blank">'+reply.substring(1)+'</a>';
        		});

        		html.push('<li><span>'+status+'</span><small><a href="http://twitter.com/'+username+'/statuses/'+tweets[i].id_str+'" target="_blank">'+contrive.utils.formatTwitterTweetTime(tweets[i].created_at)+'</a></small></li>');
        	}

        	return html.join('');
        },

        formatTwitterTweetTime: function( time ) {
        	var values = time.split(" ");
        	var time = values[1] + " " + values[2] + ", " + values[5] + " " + values[3];
        	var parsed_date = Date.parse( time );
        	var relative_to = (arguments.length > 1) ? arguments[1] : new Date();
        	var delta = parseInt((relative_to.getTime() - parsed_date) / 1000);
        	delta = delta + (relative_to.getTimezoneOffset() * 60);

			if (delta < 60) {
				return 'less than a minute ago';
			} else if(delta < 120) {
				return 'about a minute ago';
			} else if(delta < (60*60)) {
				return (parseInt(delta / 60)).toString() + ' minutes ago';
			} else if(delta < (120*60)) {
				return 'about an hour ago';
			} else if(delta < (24*60*60)) {
				return 'about ' + (parseInt(delta / 3600)).toString() + ' hours ago';
			} else if(delta < (48*60*60)) {
				return '1 day ago';
			} else {
				return (parseInt(delta / 86400)).toString() + ' days ago';
			}
        },

        goToTop: function() {
        	$("#contrive-goto-top").click(function( e ){
        		e.preventDefault();
        		$("body,html").stop(true).animate({ scrollTop:0 },700);
            });
        },

        goToTopScroll: function( arg ) {
        	arg.scrollTop() > 300 ? $("#contrive-goto-top").fadeIn() 
        		: $("#contrive-goto-top").fadeOut();
        },

        maxHeight: function(){

        	var t = $('.contrive-equal-height');

        	t.length > 0 && t.each(function(){

        		var element = $(this);
        		if( element.has('.contrive-equal-height') ) {

        			contrive.utils.equalHeight(element.find('.contrive-equal-height'));
        		}

        		contrive.utils.equalHeight( element );
        	});
		},

		equalHeight: function( element ){
			var maxHeight = 0;
			element.children('[class^=contrive-col-]').each(function() {
				var element = $(this).children('div');
				if( element.hasClass('max-height') ){
					maxHeight = element.outerHeight();
				} else {
					if (element.outerHeight() > maxHeight){
						maxHeight = element.outerHeight();
					}
				}
			});

			element.children('[class^=contrive-col-]').each(function() {
				$(this).height(maxHeight);
			});
		},
	},

	contrive.documentOnReady = {
		init : function(){
			
			contrive.pageAnimsition();

			contrive.header.subMenu();

			contrive.header.stickyMenu();

			contrive.header.verticalMenuCurrentSection();

			contrive.header.verticalMenu();

			contrive.header.responsiveMenu();

			contrive.header.menuSearch();

			contrive.ui.init();
			$(".contrive-portfolio-holder").length > 0 && $(".contrive-portfolio-filter").length > 0 && contrive.portfolio.filter();

			contrive.utils.goToTop();

			contrive.documentOnReady.windowscroll();

			contrive.fullScreenSection();

			contrive.header.zoomOutImage( $(window) );

			contrive.portfolio.galleryFormat();
		},

		windowscroll : function() {

			$(window).on( 'scroll', function(){

				contrive.utils.goToTopScroll( $(this) );

				contrive.header.stickyMenu();

				contrive.header.verticalMenuCurrentSection();

				window.requestAnimationFrame(contrive.header.animateZoomOutImage);
			});

			window.addEventListener('scroll', function(){
				requestAnimationFrame(function(){
					contrive.header.stickyMenu();
				});
			}, false );			
		}
	},
	
	contrive.documentOnLoad = {
		init : function(){
			
			contrive.utils.maxHeight();

			$(".contrive-portfolio-holder").length > 0 && $(".contrive-portfolio-filter").length > 0 && contrive.portfolio.filter();
			$(".contrive-portfolio-holder").length > 0 && $("#load-more-portfolios").length > 0 && contrive.portfolio.loadMorePortfolios();

			contrive.header.stickyMenu();

			contrive.ui.verticalMiddle();

			contrive.ui.html5Video();
		}
	},
	
	contrive.documentOnResize = {
		init : function(){
			
			contrive.utils.maxHeight();

			$(".contrive-portfolio-holder").length > 0 && contrive.portfolio.arrange();

			contrive.fullScreenSection();

			contrive.ui.verticalMiddle();

			contrive.ui.html5Video();

			contrive.ui.gMapResize();

			contrive.header.zoomOutImage( $(window) );
		}
	},
	
	$(document).ready( contrive.documentOnReady.init );
	$(window).load( contrive.documentOnLoad.init );
	$(window).on( "resize" , contrive.documentOnResize.init );
})(jQuery);