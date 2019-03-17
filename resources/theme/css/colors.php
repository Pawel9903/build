<?php
	function hex2rgb($color , $opacity = 0.7 ) {
		$color = str_replace("#", "", $color);
		$color = 'rgba('.implode( "," , array_map( 'hexdec', str_split( $color,2 ) ) ).','.$opacity.')';
		return $color;
	}

	$color = isset( $_REQUEST['color'] ) ? $_REQUEST['color'] : 'orange';

	switch ( $color ) {

		case 'pink':
			$main = '#e84f82';
			$mainrgb1 = hex2rgb( $main, '0.7' );
			$mainrgb2 = hex2rgb( $main, '0.6' );	
			$mainrgb3 = hex2rgb( $main, '0.9' );
			$mainrgb4 = hex2rgb( $main, '0.95' );			
			$secondary1 = '#df4c7d';
			$secondary2 = '#d84979';
			$secondary3 = '#d04775';				
		break;

		case 'red':
			$main = '#e8594f';
			$mainrgb1 = hex2rgb( $main, '0.7' );
			$mainrgb2 = hex2rgb( $main, '0.6' );	
			$mainrgb3 = hex2rgb( $main, '0.9' );	
			$mainrgb4 = hex2rgb( $main, '0.95' );	
			$secondary1 = '#df564c';
			$secondary2 = '#d85349';
			$secondary3 = '#d05047';		
		break;

		case 'purple':
			$main = '#d14fe8';
			$mainrgb1 = hex2rgb( $main, '0.7' );
			$mainrgb2 = hex2rgb( $main, '0.6' );
			$mainrgb3 = hex2rgb( $main, '0.9' );
			$mainrgb4 = hex2rgb( $main, '0.95' );	
			$secondary1 = '#c94cdf';
			$secondary2 = '#c249d8';
			$secondary3 = '#bc47d0';			
		break;

		case 'deep-purple':
			$main = '#874fe8';
			$mainrgb1 = hex2rgb( $main, '0.7' );
			$mainrgb2 = hex2rgb( $main, '0.6' );
			$mainrgb3 = hex2rgb( $main, '0.9' );	
			$mainrgb4 = hex2rgb( $main, '0.95' );
			$secondary1 = '#824cdf';
			$secondary2 = '#7d49d8';
			$secondary3 = '#7947d0';
		break;

		case 'indigo':
			$main = '#4f66e8';
			$mainrgb1 = hex2rgb( $main, '0.7' );
			$mainrgb2 = hex2rgb( $main, '0.6' );
			$mainrgb3 = hex2rgb( $main, '0.9' );	
			$mainrgb4 = hex2rgb( $main, '0.95' );
			$secondary1 = '#4c62df';
			$secondary2 = '#495fd8';
			$secondary3 = '#475cd0';		
		break;

		case 'cyan':
			$main = '#4fd6e8';
			$mainrgb1 = hex2rgb( $main, '0.7' );
			$mainrgb2 = hex2rgb( $main, '0.6' );
			$mainrgb3 = hex2rgb( $main, '0.9' );
			$mainrgb4 = hex2rgb( $main, '0.95' );
			$secondary1 = '#4ccedf';
			$secondary2 = '#49c7d8';
			$secondary3 = '#47c0d0';
		break;

		case 'teal':
			$main = '#4fe8d9';
			$mainrgb1 = hex2rgb( $main, '0.7' );
			$mainrgb2 = hex2rgb( $main, '0.6' );
			$mainrgb3 = hex2rgb( $main, '0.9' );
			$mainrgb4 = hex2rgb( $main, '0.95' );
			$secondary1 = '#4cdfd0';
			$secondary2 = '#49d8ca';
			$secondary3 = '#47d0c3';
		break;

		case 'green':
			$main = '#4caf50';
			$mainrgb1 = hex2rgb( $main, '0.7' );
			$mainrgb2 = hex2rgb( $main, '0.6' );
			$mainrgb3 = hex2rgb( $main, '0.9' );
			$mainrgb4 = hex2rgb( $main, '0.95' );
			$secondary1 = '#49a84d';
			$secondary2 = '#47a34a';
			$secondary3 = '#449d48';
		break;

		case 'yellow':
			$main = '#ffab00';
			$mainrgb1 = hex2rgb( $main, '0.7' );
			$mainrgb2 = hex2rgb( $main, '0.6' );
			$mainrgb3 = hex2rgb( $main, '0.9' );
			$mainrgb4 = hex2rgb( $main, '0.95' );
			$secondary1 = '#f5a400';
			$secondary2 = '#ed9f00';
			$secondary3 = '#e59a00';
		break;

		case 'orange':
			$main = '#ff9800';
			$mainrgb1 = hex2rgb( $main, '0.7' );
			$mainrgb2 = hex2rgb( $main, '0.6' );
			$mainrgb3 = hex2rgb( $main, '0.9' );
			$mainrgb4 = hex2rgb( $main, '0.95' );
			$secondary1 = '#f59200';
			$secondary2 = '#ed8d00';
			$secondary3 = '#e58900';
		break;

		case 'deep-orange':
			$main = '#ff5722';
			$mainrgb1 = hex2rgb( $main, '0.7' );
			$mainrgb2 = hex2rgb( $main, '0.6' );
			$mainrgb3 = hex2rgb( $main, '0.9' );
			$mainrgb4 = hex2rgb( $main, '0.95' );
			$secondary1 = '#f55421';
			$secondary2 = '#ed5120';
			$secondary3 = '#e54e1f';
		break;

		case 'brown':
			$main = '#795548';
			$mainrgb1 = hex2rgb( $main, '0.7' );
			$mainrgb2 = hex2rgb( $main, '0.6' );
			$mainrgb3 = hex2rgb( $main, '0.9' );
			$mainrgb4 = hex2rgb( $main, '0.95' );
			$secondary1 = '#745245';
			$secondary2 = '#704f43';
			$secondary3 = '#6d4c41';
		break;

		case 'light-green':
			$main = '#8bc34a';
			$mainrgb1 = hex2rgb( $main, '0.7' );
			$mainrgb2 = hex2rgb( $main, '0.6' );
			$mainrgb3 = hex2rgb( $main, '0.9' );
			$mainrgb4 = hex2rgb( $main, '0.95' );
			$secondary1 = '#86bb47';
			$secondary2 = '#81b545';
			$secondary3 = '#7daf42';
		break;

		case 'lime':
			$main = '#c0ca33';
			$mainrgb1 = hex2rgb( $main, '0.7' );
			$mainrgb2 = hex2rgb( $main, '0.6' );
			$mainrgb3 = hex2rgb( $main, '0.9' );
			$mainrgb4 = hex2rgb( $main, '0.95' );
			$secondary1 = '#b8c231';
			$secondary2 = '#b2bc2f';
			$secondary3 = '#acb52e';
		break;
		
		case 'sunset-orange':
			$main = '#f64747';
			$mainrgb1 = hex2rgb( $main, '0.7' );
			$mainrgb2 = hex2rgb( $main, '0.6' );
			$mainrgb3 = hex2rgb( $main, '0.9' );
			$mainrgb4 = hex2rgb( $main, '0.95' );
			$secondary1 = '#ec4444';
			$secondary2 = '#e54242';
			$secondary3 = '#dd4040';
		break;
		
		case 'cabaret':
			$main = '#d2527f';
			$mainrgb1 = hex2rgb( $main, '0.7' );
			$mainrgb2 = hex2rgb( $main, '0.6' );
			$mainrgb3 = hex2rgb( $main, '0.9' );
			$mainrgb4 = hex2rgb( $main, '0.95' );
			$secondary1 = '#ca4f7a';
			$secondary2 = '#c34c76';
			$secondary3 = '#bd4a72';
		break;
		
		case 'plum':
			$main = '#913d88';
			$mainrgb1 = hex2rgb( $main, '0.7' );
			$mainrgb2 = hex2rgb( $main, '0.6' );
			$mainrgb3 = hex2rgb( $main, '0.9' );
			$mainrgb4 = hex2rgb( $main, '0.95' );
			$secondary1 = '#8b3b83';
			$secondary2 = '#87397e';
			$secondary3 = '#82377a';
		break;
		
		case 'greensmoke':
			$main = '#9cb265';
			$mainrgb1 = hex2rgb( $main, '0.7' );
			$mainrgb2 = hex2rgb( $main, '0.6' );
			$mainrgb3 = hex2rgb( $main, '0.9' );
			$mainrgb4 = hex2rgb( $main, '0.95' );
			$secondary1 = '#96ab61';
			$secondary2 = '#91a55e';
			$secondary3 = '#8ca05b';
		break;
		
		case 'radical-red':
			$main = '#f62459';
			$mainrgb1 = hex2rgb( $main, '0.7' );
			$mainrgb2 = hex2rgb( $main, '0.6' );
			$mainrgb3 = hex2rgb( $main, '0.9' );
			$mainrgb4 = hex2rgb( $main, '0.95' );
			$secondary1 = '#ec2356';
			$secondary2 = '#e52153';
			$secondary3 = '#dd2050';
		break;	

		case 'blue':
		default:
			$main = '#50c1e9';
			$mainrgb1 = hex2rgb( $main, '0.7' );
			$mainrgb2 = hex2rgb( $main, '0.6' );
			$mainrgb3 = hex2rgb( $main, '0.9' );
			$mainrgb4 = hex2rgb( $main, '0.95' );
			$secondary1 = '#4db9e0';
			$secondary2 = '#4ab3d9';
			$secondary3 = '#48add1';
		break;
	}

header("Content-type: text/css");?>
@charset "utf-8";
::selection {
	background:<?php echo $main;?>; 
}

::-moz-selection {
	background:<?php echo $main;?>;
}

a, h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover, .contrive-portfolio-item:hover figure figcaption h6 a:hover, .contrive-portfolio-item:hover figure figcaption p a:hover, .contrive-facts .contrive-facts-icon-holder i, .contrive-list li:before, .contrive-contact address:before, .contrive-contact abbr:before, .contrive-contact abbr a:hover, .contrive-blog-item .entry-meta .posted-on time span, .contrive-blog-item .entry-footer p a:hover, .contrive-blog-item .entry-header h4 a:hover, .widget.widget_recent_entries ul li a:hover, .widget ul li a:hover, .widget.widget_categories ul li:hover:before, .paging-navigation .pagination .page-numbers.current, .contrive-portfolio-meta-details li.links a:hover, .contrive-icon-with-title.style3 .contrive-icon-holder i, .contrive-team .contrive-social-links li a:hover i, .contrive-icon-with-title.style5 .contrive-icon-holder i, .contrive-error404 .contrive-error-info i, .contrive_twitter_widget ul.contrive-tweets-list li a, .contrive-contact-with-large-icon .contrive-contact-text-holder a:hover, .contrive-nav-links li a:hover, .contrive-icon-with-title.style6 .contrive-icon-holder i {
	color:<?php echo $main;?>;
}

.main-nav > ul > li:hover > a, .header-main.sticky .main-nav > ul > li:hover > a, .main-nav > ul > li.current_page_item > a, .header-main.sticky .main-nav > ul > li.current_page_item > a, .main-nav ul.contrive-sub-menu li.current_page_item > a, .contrive-mega-menu-container ul li.current_page_item a {
	color:<?php echo $main;?>;
}

.contrive-heading h1:before, .contrive-heading h2:before, .contrive-heading h3:before, .contrive-heading h4:before, .contrive-heading h5:before, .contrive-portfolio-details-slideshow-nav a:hover, .contrive-skin-color, .contrive-row-fw.contrive-locate-bg {
	background:<?php echo $main;?>;
}

button, input[type="button"], input[type="reset"], input[type="submit"], .contrive-icon-with-title.style1:hover .contrive-icon-holder, .contrive-icon-with-title h6:before, .contrive-button, .contrive-facts:hover .contrive-facts-icon-holder, .contrive-icon-with-title.style2:hover .contrive-icon-holder, .contrive-blog-thumb-style.skin, .widget h2.widget-title:before, .widget.widget_tag_cloud .tagcloud a:hover, .contrive-sidebar-holder .widget .contrive-newsletter input[type="submit"]:hover, .paging-navigation .pagination .page-numbers:hover, blockquote.style1:before, ol.comment-list li.comment .reply a:hover, .contrive-portfolio-filter ul li a:hover, .contrive-portfolio-filter ul li a.current, .contrive-blog-item .post-thumbnail .post-format, .contrive-tabs-boxed .contrive-tabs-nav li a:hover, .contrive-tabs-boxed .contrive-tabs-nav li a.current, .contrive-icon-with-title.style4:hover .contrive-icon-holder:before, .contrive-team .contrive-social-links:before, .contrive-facts.style2 h6:before, ol.contrive-planner-list > li h6:before, ol.contrive-planner-list > li:hover:before, .contrive-progress-bar-wrapper .contrive-progress-bar, .contrive-accordion-holder .contrive-accordion-panel.current .contrive-accordion-title .contrive-accordion-arrow, .contrive-accordion-holder .contrive-accordion-panel:hover .contrive-accordion-title .contrive-accordion-arrow, .hvr-shutter-out-horizontal:before, .contrive-icon-with-title.style7 .contrive-icon-holder, .contrive-button.stroke-style:hover, #contrive-vertical-nav .contrive-vertical-nav-dot, #contrive-vertical-nav .contrive-vertical-nav-label, .contrive-top:hover, .contrive-owl-carousel-custom-nav a:hover, #infscr-loading, #portfolio-ajax-loader, .contrive-header-with-topbar .header-top, .contrive-blog-thumb-style2 .entry-format {
	background-color:<?php echo $main;?>;
}

.contrive-icon-with-title.style2 .contrive-icon-holder, .widget.widget_tag_cloud .tagcloud a:hover, .contrive-sidebar-holder .widget .contrive-newsletter input[type="submit"], .paging-navigation .pagination .page-numbers:hover, ol.comment-list li.comment .reply a:hover, .contrive-portfolio-filter ul li a:hover, .contrive-portfolio-filter ul li a.current, .contrive-tabs-boxed .contrive-tabs-nav li, ol.contrive-planner-list > li:hover:before, .contrive-accordion-holder .contrive-accordion-panel.current .contrive-accordion-title .contrive-accordion-arrow, .contrive-accordion-holder .contrive-accordion-panel:hover .contrive-accordion-title .contrive-accordion-arrow, .contrive-button.stroke-style:hover, #contrive-vertical-nav a.is-selected .contrive-vertical-nav-dot, .contrive-owl-carousel-custom-nav a:hover, #contrive-masthead.contrive-left-side-header, .contrive-portfolio-details-slideshow-nav a:hover {
	border-color:<?php echo $main;?>;
}

.light-text .contrive-icon-with-title.style4:hover .contrive-icon-holder, .contrive-large-button:hover i, .contrive-medium-button i, .contrive-testimonial.style2:before, .contrive-career .contrive-career-desc h6 span, .contrive-pricing-box .contrive-pricing-price { 
	color:<?php echo $main;?>; 
}
.contrive-large-button i, .contrive-large-button:hover, .contrive-medium-button:hover, .contrive-icon-with-title.style3:hover .contrive-icon-holder, .contrive-icon-with-title.style8 .contrive-icon-holder, .contrive-icon-with-title.style8:hover h6, .contrive-icon-with-title.style9:hover .contrive-icon-holder, .contrive-icon-with-title.style10:hover, .contrive-no-space-cols [class^=contrive-col-]:last-child .contrive-icon-with-title.style10:hover, .contrive-image-with-title.style1 .contrive-image-title, .contrive-portfolio-item figure, .contrive-faq .contrive-faq-answer, .contrive-career .contrive-career-title .contrive-career-number, .contrive-career .contrive-career-foot p a:hover, .contrive-career-form h6:before, .contrive-side-navigation li a:hover, .contrive-side-navigation li.current_page_item a, .contrive-pricing-box:hover .contrive-pricing-title { 
	background:<?php echo $main;?>; 
}
.contrive-large-button:hover, .contrive-medium-button:hover, .contrive-icon-with-title.style10:hover, .contrive-no-space-cols [class^=contrive-col-]:last-child .contrive-icon-with-title.style10:hover, .contrive-testimonial.style2 .contrive-testimonial-author img, .contrive-pricing-box:hover .contrive-pricing-price  {
	border-color:<?php echo $main;?>; 
}
.contrive-icon-with-title.style1:hover { 
	border-bottom-color:<?php echo $main;?>; 
}
.contrive-portfolio-meta-wrapper {
	border-top-color:<?php echo $main;?>;
}

.main-nav > ul > li.current_page_item > a:after, .main-nav > ul > li > a:after, .contrive-mega-menu-container, .main-nav ul li > ul.contrive-sub-menu { 
	border-top-color:<?php echo $main;?>;
}
.main-nav > ul > li.current_page_item > a:after, .main-nav > ul > li > a:after { 
	border-bottom-color:<?php echo $main;?>; 
}
.contrive-blog-item:hover .entry-meta .post-format, .contrive-blog-item:hover .entry-meta .post-format:before {
	background:<?php echo $main;?>;
}
.contrive-blog-item .entry-meta-data a:hover, .contrive_twitter_widget ul.contrive-tweets-list li:before {
	color:<?php echo $main;?>;
}

.widget.contrive-flickr-widget ul li a:before {
	background-color:<?php echo $mainrgb1;?>; 
}

.contrive-blog-thumb-style .post-thumbnail:before {
	background:<?php echo $mainrgb2;?>; 
}

/* New Styles */
.contrive-title-bg:before, .contrive-row-fw.contrive-facts-parallax:before, .contrive-overlay-nav {
	background:<?php echo $mainrgb3;?>;
}
.tp-caption.contrive-title5, .contrive-title5, .tp-caption.contrive-ken-title2, .contrive-ken-title2, .tp-caption.contrive-title2, .contrive-title2, .contrive-image-with-title.style2 .contrive-icon-holder, .contrive-horizontal-timeline .events a.selected, .contrive-horizontal-timeline .events a:hover, .no-touch .cd-timeline-navigation a:hover span, .tp-caption.contrive-parallax-title3, .contrive-parallax-title3 { 
	color:<?php echo $main;?>; 
}
.contrive-preloader-folding-cube .contrive-cube:before, .contrive-overlay-nav-toggle, .contrive-overlay-nav-toggle.menu-open .close-icon:before, .contrive-overlay-nav-toggle.menu-open .close-icon:after, .contrive-row-fw.contrive-polygon-parallax, .contrive-row-fw.contrive-quote-parallax, .contrive-quote-form:before, .contrive-horizontal-timeline .filling-line, .contrive-horizontal-timeline .events a.selected:after, .no-touch .contrive-horizontal-timeline .events a:hover:after { 
	background-color:<?php echo $main;?>; 
}

.tp-caption.contrive-rev-home-icon, .contrive-rev-home-icon, .tp-caption.contrive-rev-btn, .contrive-rev-btn, .contrive-image-with-title.style2 .contrive-icon-holder:before, .contrive-triangle-steps li {
	background:<?php echo $main;?>;
}

.contrive-image-with-title.style2:hover .contrive-image-title {
	background-color:<?php echo $mainrgb4;?>;
}

.contrive-horizontal-timeline .events a.selected:after, .contrive-horizontal-timeline .events a.older-event:after, .no-touch .contrive-horizontal-timeline .events a:hover:after, .no-touch .cd-timeline-navigation a:hover {  
  	border-color:<?php echo $main;?>;
}

.contrive-triangle-steps li:after { 
	border-left-color:<?php echo $main;?>; 
}


.contrive-triangle-steps li:nth-child(2) { 
	background:<?php echo $secondary1;?>; 
}
.contrive-triangle-steps li:nth-child(2):after, .contrive-triangle-steps li:nth-child(2):before { 
	border-left-color:<?php echo $secondary1;?>; 
}
.contrive-triangle-steps li:nth-child(3) { 
	background:<?php echo $secondary2;?>; 
}
.contrive-triangle-steps li:nth-child(3):after, .contrive-triangle-steps li:nth-child(3):before { 
	border-left-color:<?php echo $secondary2;?>; 
}
.contrive-triangle-steps li:nth-child(4) { 
	background:<?php echo $secondary3;?>; 
}
.contrive-triangle-steps li:nth-child(4):after, .contrive-triangle-steps li:nth-child(4):before { 
	border-left-color:<?php echo $secondary3;?>; 
}



.contrive-button.style2, .contrive-heading.type2:before, .contrive-heading.type2:after, .contrive-heading.type2 h2:before, .contrive-icon-with-title.style8 .contrive-icon-holder:before, .contrive-icon-with-title.style9:hover .contrive-icon-holder:before, .contrive-contact-with-large-icon .contrive-contact-icon-holder, .contrive-contact-with-large-icon .contrive-contact-icon-holder:before, .contrive-tabs-fw .contrive-tabs-nav li:before, .contrive-tabs-fw .contrive-tabs-nav li a:after, .contrive-team.style3 .contrive-social-links, .contrive-flip-box .contrive-flip-box-front figcaption .contrive-flip-box-icon, .contrive-flip-box .contrive-flip-box-front figcaption .contrive-flip-box-icon:before, .contrive-flip-box .contrive-flip-box-front figcaption .contrive-flip-box-icon:after { 
	background:<?php echo $main;?>;
}

.contrive-tabs-fw .contrive-tabs-nav li a:before, .contrive-team.style3 .contrive-social-links li a:hover {
	color:<?php echo $main;?>;
}

.contrive-tabs-fw .contrive-tabs-nav li a:after {
	border-top-color: <?php echo $main;?>;
	border-bottom-color: <?php echo $main;?>;
}