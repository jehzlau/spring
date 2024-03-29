/*
Theme Name: Spring.ph
Theme URI: http://spring.ph
Author: Jehzeel Laurente
Author URI: http://www.jehzlau-concepts.com/
Description: A custom theme for Spring.ph
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: single page, vertical parallax
*/

	html, body {
    height: 100%;
}

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
	display: block;
}

body {
	line-height: 1;
}

ol, ul {
	list-style: none;
}

blockquote, q {
	quotes: none;
}

blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}

table {
	border-collapse: collapse;
	border-spacing: 0;
}



/* Commons
--------------------------------------------------------*/


::-moz-selection {background: #4397d1;color: white; }
::selection {background: #4397d1;color: white; }

body {
	background-color: #fff;
	font: 15px 'Oswald', sans-serif;
	font-weight: 300;
	color: #222;
	-webkit-font-smoothing: antialiased;
	-webkit-text-size-adjust: 100%;
	text-align: left;
	width: 100%;
	height: 100%;
}

.embed-container {
    position: relative;
    padding-bottom: 56.25%; /* 16/9 ratio */
    padding-top: 30px; /* IE6 workaround*/
    height: 0;
    overflow: hidden;
}

.embed-container iframe,
.embed-container object,
.embed-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.hidden {
	display: none;
}

.parallaxText {
	display: table-cell;
	vertical-align: middle;
}

img.scale-with-grid {
	max-width: 100%;
	height: auto; }


/* Typography
--------------------------------------------------------*/

h1, h2, h3, h4 {
	font-weight: 300;
	font-family: 'Oswald',sans-serif;
	color: #222;
	margin: 0 0 6px;
}

h1 {
	font-size: 250px;
	text-transform: uppercase;
	position: relative;
	letter-spacing: -2px;
	text-align: left;
	line-height: 0.8;
	margin-bottom: 35px;
	padding-top: 15px;
}
h1 span{
	color: #4397d1;
	font-size: 150px;
}

h2 {
	font-size: 44px;
	text-transform: uppercase;
	position: relative;
}
h2.white { color: #222;}

h3 {font-size: 22px; line-height: 1; color: #555;}
h3.sectionTitle {
    border-bottom: 1px solid #cacaca;
    font-size: 28px;
    line-height: 30px;
    margin-bottom: 10px;
    padding: 26px 0 6px;
}
.small {font-size: 36px; font-weight:300;}
.smallBold {font-size: 36px; font-weight:700;}
.medium {font-size: 44px; text-transform: uppercase;}
.mediumBold {font-size: 44px; font-weight:700; text-transform: uppercase;}
.large {font-size: 56px; text-transform: uppercase;}
.largeBold {font-size: 56px; font-weight:700; text-transform: uppercase;}
.author {font-size: 18px; font-weight:300;}

h4 {font-size: 22px;}

p {margin-bottom: 10px;}
p a {color: #222; text-decoration: none;}
p a:hover {color: #4397d1;transition: color 0.5s;}
a {color:#222;text-decoration:none;}
a:hover{color:#4397d1;}

.introtext {font-size: 20px;}
.marginTop {
	margin-top: 30px;
}
.highlight {
    background: #4397d1;
    color: #FFFFFF;
    padding: 0 6px;
}
.dropcap {
    background: #4397d1;
    color: #FFFFFF;
    display: inline-block;
    float: left;
    font-size: 30px;
    font-weight: bold;
    height: 44px;
    line-height: 44px;
    margin: 7px 7px 0 0;
    text-align: center;
    width: 44px;
}
blockquote {
    color: #999999;
    display: block;
    font-size: 20px;
    font-style: italic;
    letter-spacing: 0;
    padding: 20px 50px 20px 40px;
    position: relative;
}
blockquote:before, blockquote:after {
    color: #4397d1;
    content: "“";
    font-size: 80px;
    font-style: italic;
    left: -25px;
    line-height: 1em;
    position: absolute;
    top: 0;
}
blockquote:after {
    content: "”";
    float: right;
    margin-right: -30px;
    margin-top: 0;
    position: relative;
}

/* Layout 
--------------------------------------------------------*/


.homepage{
	position:relative;
	overflow:hidden;
	z-index:1;
	margin-bottom: -70px;
}
.page{
	position:relative;
	overflow:hidden;
	z-index:2;
}
.page.desktop{
	position:relative !important; 
	z-index:6;
}
.page {
	padding-top: 100px;
}
.page{
	background:#fff; 
	background-attachment:scroll;
}
nav {
	background: #000;
	background: rgba(0,0,0,0.8);
	width: 100%;
	position: relative;
	z-index: 1000;
	height: 50px;
	text-align: center;
	margin-bottom: 10px;
}
nav ul {
	height: 40px;
	display: inline-block;
	padding-top: 10px;
	padding-bottom: 15px;
}
nav ul li {
	position: relative;
	float: left;
	margin: 0;
}
nav ul li a {
	font-family: 'Oswald',sans-serif;
	font-size: 18px;
	font-weight: 400;
	color: white;
	text-decoration: none;
	text-transform: uppercase;
	padding: 10px;
}
nav ul li a:hover {
	color: #4397d1;
	transition: color 0.5s;
}
.dropmenu {
	display: none;
}	
#homepage .container {
    height: 100%;
    width: 100%;
    background-image: url('http://springph.azurewebsites.net/wp-content/uploads/2014/02/spring.png');
    background-size: cover;
    background-color: #d8d8d8;
}
.logo {
	float: right;
	margin-top: 50px;
}

/* supersized slideshow
--------------------------------------------------------*/
.slider-text {
    width: 100%;
}
.slider-text {
    bottom: 0px;
    min-height: 220px;
    overflow: hidden;
    position: absolute;
}
#prevslide, #nextslide{ 
	position:absolute; 
	height:40px; 
	width:40px; 
	top:64px; 
	margin-top:-21px; 
	opacity:0.8;
	font-size: 32px;
	color: #fff; 
	background: #000;
	display: block;
	text-align: center; 
}
#prevslide{ 
	right:60px; 
}
#nextslide{ 
	right:10px; 
}
#prevslide:active, #nextslide:active{ 
	margin-top:-19px; 
}
#prevslide:hover, #nextslide:hover{ 
	cursor:pointer; 
}

#slidecaption h2, #slidecaption p{
	text-shadow: 0 0 5px #000;
	font-weight: 700;
	font-size: 48px;
	color: #fff
}
#slidecaption h2 span{
	font-family: Arial;
	text-transform: capitalize;
	font-size: 72px;
	font-weight: 400;
}

#supersized-loader { position:absolute; top:50%; left:50%; z-index:0; width:60px; height:60px; margin:-30px 0 0 -30px; text-indent:-999em; background:url(../images/progress.gif) no-repeat center center;}

#supersized {  display:block; position:absolute; left:0; top:0; overflow:hidden; z-index:-999; height:100%; width:100%; }
#supersized img { width:auto; height:auto; position:relative; display:none; outline:none; border:none; }
#supersized.speed img { -ms-interpolation-mode:nearest-neighbor; image-rendering: -moz-crisp-edges; }	/*Speed*/
#supersized.quality img { -ms-interpolation-mode:bicubic; image-rendering: optimizeQuality; }			/*Quality*/

#supersized li { display:block; list-style:none; z-index:-30; position:absolute; overflow:hidden; top:0; left:0; width:100%; height:100%; background:#111; }
#supersized a { width:100%; height:100%; display:block; }
#supersized li.prevslide { z-index:-20; }
#supersized li.activeslide { z-index:-10; }
#supersized li.image-loading { background:#111 url(../images/progress.gif) no-repeat center center; width:100%; height:100%; }
#supersized li.image-loading img{ visibility:hidden; }
#supersized li.prevslide img, #supersized li.activeslide img{ display:inline; }


	
/*parallax
--------------------------------------------------------*/

.parallax{
	width:100%;
	height:480px; 
	padding:0;
	margin:0;
	background-attachment:fixed;
	background-repeat:no-repeat; 
	border-top:10px solid rgba(255,255,255,0.3);
	border-bottom:10px solid rgba(255,255,255,0.3);
	color:#fff;  
	position:relative;
}
.parallax .quoteWrap{
	display:table;
	width:100%;
	height:100%; 
	padding:0 !important;
	margin:0 !important;
}
.parallax.fixed{
	background-attachment:fixed;
}
.parallax.fixed-desktop{
	background-attachment:fixed !important;
}
.parallax .quoteWrap .quote{
	display: table-cell; 
	vertical-align:middle;
}
.parallax {
	text-align:center;
}
.parallax h3 span{
	text-shadow: 0px 0px 5px #222;
	color: #fff;
}	
	
		
	
/* portfolio
--------------------------------------------------------*/	
	
#folio {
	background:url(../images/gallery-quote-white.png) center 80px no-repeat #fff;
	padding-top:100px;
	clear: left;
}
.portfolio_container {
	position:relative;
	display:block;
	overflow:hidden;
	width:100%;
}
.portfolio_container .portfolio {
	position:relative;
	display:block;
	float:left;
	overflow:hidden;
	width:25%;
	height:auto;
}
.portfolio_container .portfolio .media_box figure a img {
	display:block;
	margin-left: auto;
	margin-right: auto;
}
.portfolio_container .portfolio .media_box .hover_effect {
	top:0;
	left:0;
}
.gallerySelector {
	background: #E5E5E5;
	height: 44px;
	width: 100%;
	margin-top: 20px;
}
.gallerySelectorList {
	margin:0;
	width: 100%;
}
.gallerySelectorList li {
	float: left;
	margin:0;
	list-style:none;
	width: 20%;
	text-align: center;
	padding: 0;
}
.gallerySelectorList li:hover {
	background: #83103e;
}
.gallerySelectorList li:hover a {
	color: #fff;
}

.gallerySelectorList li a {
	display:block;
	padding:11px 0;
	color: #222;
	text-decoration: none;
	margin: 0;
	transition:background-color 0.3s ease, color 0.2s ease;
}
.gallerySelectorList li.current  {
	background: #4397d1;
}
.gallerySelectorList li.current a {
	color: #fff;
}
.portfolio_container .portfolio {
    width: 20%;
}
.fullwidth {
    display: block;
    max-width: 100%;
    min-width: 100%;
}
#gallery h3  {
	margin-bottom: 20px;
}
.project-title {
	font-family: 'Oswald', sans-serif;
	font-size: 12px;
	text-transform: uppercase;
	margin-top: 7px;
}
.project-description {
	color: #868991;
	font-size: 10px;
	text-transform: uppercase;
	font-weight: 600;
	margin: 0 0 20px 0;
}
.thumbLink {
	display: block;
	width: 100%;
}
.thumbImage {
	float: left;
	position: relative;
	overflow: hidden;
	display: block;
	margin-bottom: 0px;
	box-sizing: border-box;
	text-align: center;
	width: 100%;
	height: 100%;
}
.thumbImage img{
    transition: all 0.7s ease-in-out;
}
.thumbImage .thumbText h3 {
	margin-bottom: 10px;
	padding-top: 10px;
	color: #fff;
	border-bottom: 1px solid #fff;
    transition: all 1s ease-in-out;
}
.thumbImage .thumbText p {
	margin-bottom: 10px;
	color: #fff;
    transition: all 1s ease-in-out;
}
.thumbImage .thumbTextWrap {
	position: absolute;
	top: 0;
    height: 100%;
	opacity: 0;
	max-width: 100%;
	min-width: 100%;
	background: #4397d1;
	text-align: center;
    transition: all 1s ease-in-out;
	-webkit-user-select: none;
}
.ie8 .thumbImage .thumbTextWrap {
	display:none;
}
.thumbImage .thumbTextWrap:before {
	content: '';
	display: inline-block;
	height: 100%;
	vertical-align: middle;
	margin-right: -0.5em; /* Adjusts for spacing */
}
.thumbText {
    text-align: center;
	transform: scale(0);
    transition: all 0.7s ease-in-out;
	display: inline-block;
  	vertical-align: middle;
  	width: 90%;
}
.thumbImage:hover img {
	opacity: 0;
    transform: scale(10);
}
.touch-device .thumbImage:hover img {
    transform: none;
}
.thumbImage:hover .thumbTextWrap {
	opacity: 1;
}
.ie8 .thumbImage:hover .thumbTextWrap {
	display: block;
}
.thumbImage:hover .thumbText {
	transform: scale(1);
}
.touch-device .thumbImage:hover .thumbTextWrap {
	display: block;
}
.touch-device .thumbText,
.touch-device .thumbImage img,
.touch-device .thumbImage .thumbText h3,
.touch-device .thumbImage .thumbText p,
.touch-device .thumbImage .thumbTextWrap {
    transition: none;
}
.ie8 .thumbImage:hover .thumbTextWrap {
	display: block;
}
.thumbLink {
	background:#fff;
	color: #7A133C;
	font-size: 20px;
	width: 30px;
	height: 30px;
	border-radius: 15px;
	opacity: 0.5;
	margin: 0 auto;
}
.thumbLink:hover {
	opacity: 1;
}
.portfolioBottom {
	background: #E5E5E5;
	height: 44px;
	width: 100%;
	clear: left;
}

/**** Isotope Filtering ****/

.isotope-item {
  z-index: 2;
}

.isotope-hidden.isotope-item {
  pointer-events: none;
  z-index: 1;
}

/**** Isotope CSS3 transitions ****/

.isotope,
.isotope .isotope-item {
	transition-duration: 0.8s;
}
.isotope {
	transition-property: height, width;
}
.isotope .isotope-item {
       -o-transition-property:         top, left, opacity;
          transition-property:         transform, opacity;
}
/**** disabling Isotope CSS3 transitions ****/

.isotope.no-transition,
.isotope.no-transition .isotope-item,
.isotope .isotope-item.no-transition {
	transition-duration: 0s;
}

/* End: Recommended Isotope styles */

/* disable CSS transitions for containers with infinite scrolling*/
.isotope.infinite-scrolling {
	transition: none;
}


/* About Us
--------------------------------------------------------*/
	
#about {
	padding-top: 0px;
}
.aboutContainer {
	padding-bottom: 100px;
}
.teamImage {
	margin-top: 40px;
	margin-bottom: 20px;
    cursor: default;
    overflow: hidden;
    position: relative;
    text-align: center;
}

.teamImage img {
    transform: scale(1);
    transition: all 0.7s ease-in-out 0s;
}
.teamImage .teamName {
    background-color: #4397d1;
    opacity: 0;
    transition: all 0.5s linear 0s;
	height: 100%;
    left: 0;
    overflow: hidden;
    position: absolute;
    top: 0;
    width: 100%;
	text-align: center;
	-webkit-user-select: none;
}
.touch-device .teamImage .teamName {
	display: none;
	transition: none;
}
.ie8 .teamImage .teamName {
    display: none;
}
.teamImage h2 {
    margin-top: 145px;
    opacity: 0;
    transform: scale(0);
	color: #fff;
    transition: all 0.5s linear 0s;
}
.teamImage h3 {
    opacity: 0;
    transform: scale(0);
	color: #fff;
    transition: all 0.7s linear 0s;
}
.teamImage:hover img {
    opacity: 0;
    transform: scale(10);
}
.teamImage:hover .teamName {
    opacity: 1;
}
.touch-device .teamImage:hover .teamName {
	display: block;
}
.touch-device .teamImage:hover img {
    opacity: 0;
    transform: none;
}
.ie8 .teamImage:hover .teamName {
    display: block;
}
.teamImage:hover h2, .teamImage:hover h3 {
    opacity: 1;
    transform: scale(1);
}
.teamImage:hover .socialLinksTeam {
    opacity: 1;
    transform: scale(1);
}
.socialLinksTeam  {
	text-align: center;
	width: 100%;
	opacity: 0;
    transform: scale(0);
	transition: all 0.8s linear 0s;
}
.socialLinksTeam li {
    display: inline-block;
    height: 30px;
    margin: 35px 1px 0;
    transition: all 0.3s ease-in-out 0s;
    width: 30px;
}
.socialLinksTeam li a {
	color: #FFFFFF;
    display: block;
    font-size: 16px;
    height: 16px;
    margin: 0;
    transition: all 0.3s ease-in-out 0s;
    width: 16px;
	opacity: 0.5;
}
.socialLinksTeam li:hover a {
    opacity: 1;
}

.teamSkill {
	margin-bottom: 40px;
	-webkit-user-select: none;
}
p.skill {
    clear: left;
    font-size: 11px;
    letter-spacing: 0.04em;
    margin: 0;
    text-transform: uppercase;
}
.bar {
    background-color: #4397d1;
    border-radius: 11px;
    color: #FFFFFF;
    display: inline-block;
    float: left;
    height: 22px;
    line-height: 22px;
    margin: 0 0 2px;
    transition: all 0.6s ease-in-out 0s;
	width: 22px;
}

.teamSkill:hover .percent100 {width: 100%;}
.teamSkill:hover .percent95 {width: 95%;}
.teamSkill:hover .percent90 {width: 90%;}
.teamSkill:hover .percent85 {width: 85%;}
.teamSkill:hover .percent80 {width: 80%;}
.teamSkill:hover .percent75 {width: 75%;}
.teamSkill:hover .percent70 {width: 70%;}
.teamSkill:hover .percent65 {width: 65%;}
.teamSkill:hover .percent60 {width: 60%;}
.teamSkill:hover .percent55 {width: 55%;}
.teamSkill:hover .percent50 {width: 50%;}
.teamSkill:hover .percent45 {width: 45%;}
.teamSkill:hover .percent40 {width: 40%;}
.teamSkill:hover .percent35 {width: 35%;}
.teamSkill:hover .percent30 {width: 30%;}
.teamSkill:hover .percent25 {width: 25%;}
.teamSkill:hover .percent20 {width: 20%;}

p.percent {
    float: right;
    margin-right: 6px;
    text-align: right;
	opacity: 0;
	transition: all 0.6s ease-in-out 0s;
}
.ie8 p.percent {
    display:none;
}
.teamSkill:hover p.percent {
    opacity: 1;
}
.ie8 .teamSkill:hover p.percent {
    display:block;
}
.statsWrap {
	width: 130px;
	margin: 10px;
	float: left;
}
.stats {
    display: inline-block;
    position: relative;
    width: 100%;
	transition: all 0.3s ease-in-out 0s;
	-webkit-user-select: none;
}
.statDummy {
    margin-top: 100%;
}
.statInfo {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: #4397d1;
    border-radius: 50%;
	text-align: center;
}
.statNumber {
	font-size: 60px;
	transition: all 0.5s ease-in-out 0s;
	padding-top: 24px;
	margin-bottom: 0;
	color: #fff;
}
.statNumberMedium {
	font-size: 50px;
	transition: all 0.5s ease-in-out 0s;
	padding-top: 30px;
	margin-bottom: 0;
}
.statNumberSmall {
	font-size: 36px;
	transition: all 0.5s ease-in-out 0s;
	padding-top: 38px;
	margin-bottom: 0;
}
.statText {
	transition: all 0.5s ease-in-out 0s;
	opacity: 0;
	transform: scale(0);
	padding: 0;
	margin-top: -25px;
	color: #fff;
}
.stats:hover {
    transform: scale(2);
	z-index: 10;
}
.stats:hover .statNumber {
    transform: scale(.6);
}
.stats:hover .statText {
    transform: scale(.6);
	opacity: 1;
}
	
	
	
/* Services
--------------------------------------------------------*/
	
#services {
    padding-top: 0;
}
.servicesContainer {
	padding-bottom: 100px;
}
.serviceItem {
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    cursor: default;
    height: 236px;
    position: relative;
    width: 236px;
	margin: 20px auto;
}
.serviceInfoWrap, .serviceInfo {
    height: 196px;
    position: absolute;
    width: 196px;
}
.serviceInfoWrap {
    background: #F9F9F9;
    box-shadow: 0 0 0 20px rgba(255,255,255, 0.4), 0 0 3px rgba(115, 114, 23, 0.8) inset;
    left: 20px;
    top: 20px;
}
.serviceInfo > div {
    background-position: center center;
    display: block;
    height: 100%;
    position: absolute;
    width: 100%;
	text-align: center;
}
.serviceInfo .serviceInfoFront {
    transition: all 0.6s ease-in-out 0s;
}
.serviceInfo .serviceInfoBack {
    background:#4397d1;
    opacity: 0;
    pointer-events: none;
    transform: scale(1.5);
    transition: all 0.4s ease-in-out 0.2s;
	-webkit-user-select: none;
}
.ie8 .serviceInfo .serviceInfoBack {
    display: none;
}
.copywriting, .copywriting .serviceInfoFront {background-image: url(../images/services/copywriting.jpg);}
.creativity, .creativity .serviceInfoFront {background-image: url(../images/services/creativity.jpg);}
.production, .production .serviceInfoFront {background-image: url(../images/services/production.jpg);}
.development, .development .serviceInfoFront {background-image: url(../images/services/development.jpg);}
.photography, .photography .serviceInfoFront {background-image: url(../images/services/photography.jpg);}
.strategy, .strategy .serviceInfoFront {background-image: url(../images/services/strategy.jpg);}

.serviceInfo h3 {
    color: #FFFFFF;
    font-size: 18px;
    margin: 0 15px;
    padding: 0 0 10px;
    text-align: center;
    text-transform: uppercase;
}
.serviceInfo p {
    border-top: 1px solid rgba(255, 255, 255, 0.5);
    color: #FFFFFF;
    margin: 0 20px;
    padding: 5px 10px 0;
}
.serviceIcon {
	width: 35px;
	height: 35px;
	margin: 20px auto 10px auto;
}
.serviceIcon i{
	color: #fff;
	font-size: 32px;
}

.serviceItem:hover .serviceInfoFront {
    opacity: 0;
    transform: scale(0);
}
.serviceItem:hover .serviceInfoBack {
    opacity: 1;
    pointer-events: auto;
    transform: scale(1);
}
.ie8 .serviceItem:hover .serviceInfoBack {
    display: block;
}



/* Features
--------------------------------------------------------*/

#features {
	padding-top: 0px;
}	
.featuresContainer {
	padding-bottom: 100px;
}




/* Accordion
--------------------------------------------------------*/

.accTrigger {
	cursor: pointer;
	display: block;
	margin: 10px 0;
	background: #e5e5e5;
	border-radius: 6px;
	border-left: 3px solid #4397d1;
}
.accTrigger a {
	display: block;
	color: #222;
	outline: none;
	padding: 10px;
	text-decoration: none;
	font-size: 24px;
}
.accTrigger.active a {
	cursor: default;
	color: #4397d1; 
}
.accTrigger.active a:hover {
	
}
.accTrigger a:hover {
	color: #4397d1; 
}
.accContainer .content{ 
	padding: 2px 15px 5px 15px; 
	line-height: 19px; 
}
.accContent p {
	margin-bottom: 10px;
}
.accContent {
	padding: 5px 13px 20px 13px;
}





/* Tooltip
--------------------------------------------------------*/

.tooltip {
  position: absolute;
  z-index: 1020;
  display: block;
  padding: 5px;
  font-size: 12px;
  opacity: 0;
  filter: alpha(opacity=0);
  visibility: visible;
}
.tooltip.in {
  opacity: 0.8;
  filter: alpha(opacity=80);
}
.tooltip.top {
  margin-top: -2px;
}
.tooltip.right {
  margin-left: 2px;
}
.tooltip.bottom {
  margin-top: 2px;
}
.tooltip.left {
  margin-left: -2px;
}
.tooltip.top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-top: 5px solid #555;
  border-right: 5px solid transparent;
  border-left: 5px solid transparent;
}
.tooltip.left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-left: 5px solid #555;
}
.tooltip.bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-right: 5px solid transparent;
  border-bottom: 5px solid #555;
  border-left: 5px solid transparent;
}
.tooltip.right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-top: 5px solid transparent;
  border-right: 5px solid #555;
  border-bottom: 5px solid transparent;
}

.tooltip-inner {
	max-width: 200px;
	padding: 4px 10px;
	color: #222;
	text-align: center;
	text-decoration: none;
	background-color: #555;
	border-radius: 6px;
}
.tooltip-arrow {
  	position: absolute;
  	width: 0;
  	height: 0;
}

		
	
/*contact 
--------------------------------------------------------*/

.contactContainer {
	padding-bottom: 100px;
}
.contactDetails li span {
    padding-right: 5px;
	color: #555;
	font-size: 12px;
}
.icon-spacer {
	padding-left: 12px;
}
.socialLinks {
    text-align: center;
}
.socialLinks li {
    background-color: #4397d1;
    border-radius: 50% 50% 50% 50%;
    float: left;
    height: 60px;
    margin: 10px 5px;
    transition: all 0.6s ease-in-out 0s;
    width: 60px;
}
.socialLinks li a {
    display: block;
}
.socialLinks li a i {
    color: #FFFFFF;
    display: block;
    font-size: 32px;
    height: 30px;
    margin: 15px 0 0 15px;
    width: 30px;
}
.socialLinks li:hover {
    background-color: #8A97A6;
}
	
	
/*form elements
--------------------------------------------------------*/

textarea {
	height:156px;
	padding:20px;
	margin-bottom:20px; 
	overflow:auto;
}
	
.formSecWrap {
	float: left;
	margin-right: 20px;
}
.formSecWrap2 {
	margin-right: 0px;
}
input[type="text"], input[type="password"], input[type="email"], textarea, select {
    background: #e5e5e5;
    border: none;
    border-radius: 3px;
    color: #222;
    display: block;
    margin: 0 0 10px 0;
    outline: medium none;
    padding: 4px 4px;
    width: 370px;
	font-family:'Oswald', sans-serif;
	font-size: 16px;
	font-weight: 400;
}
input[type="text"]:focus, input[type="password"]:focus, input[type="email"]:focus, textarea:focus {
    box-shadow: 0 0 7px #222;
}

.formWrap label{
	margin: 0 0 2px 0;
}
.formWrap input[type="submit"]{
	margin: 10px 0 20px 0;
	float: right;
}

a.button,
button,
input[type="submit"],
input[type="reset"],
input[type="button"] {
	background: #4397d1; 
	border: none;
	padding: 4px 12px;
	border-radius: 0;
	font-family: 'Oswald', sans-serif;
	color: #fff;
	display: inline-block;
	font-size: 13px;
	text-decoration: none;
	cursor: pointer;
	margin: 0 5px 10px 0;
	line-height: 21px;
	-webkit-appearance: none;
}
a.button:hover,
button:hover,
input[type="submit"]:hover,
input[type="reset"]:hover,
input[type="button"]:hover {
	color: #222;
	background: #ddd;  
}



/* Alert Boxes
--------------------------------------------------------*/

.alert {
	padding: 8px 35px 8px 14px;
	margin-bottom: 10px;
	margin-top: 10px;
	clear: left;
	color: #c09853;
	text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
	background-color: #fcf8e3;
	border: 1px solid #fbeed5;
 	border-radius: 3px;
}
.alert h4 {
	margin: 0;
}
.alert p {
	margin: 0;
}
.alert .close {
	position: relative;
	top: -2px;
	right: -35px;
	line-height: 20px;
}
.alert-success {
	color: #468847;
	background-color: #dff0d8;
	border-color: #d6e9c6;
}
.alert-danger,
.alert-error {
	color: #b94a48;
	background-color: #f2dede;
	border-color: #eed3d7;
}
.alert-info {
	color: #3a87ad;
	background-color: #d9edf7;
	border-color: #bce8f1;
}
button.close {
    background: none;
    border: 0 none;
    cursor: pointer;
    padding: 0;
}
.close {
    color: #000000;
    float: right;
    font-size: 20px;
    font-weight: bold;
    line-height: 20px;
    opacity: 0.2;
    text-shadow: 0 1px 0 #FFFFFF;
}

	
/*footer
--------------------------------------------------------*/	

#footer{
	position:relative; 
	overflow:hidden; 
	padding:30px 0 50px 0; 
	z-index:1;
	background:#fff;
}
#footer p.copyright{
	margin-bottom:0;
	margin-top: 20px;
	text-align: center;
	color: #888888;
}

	
		
/* MISC
--------------------------------------------------------*/		
		
	.clear{float:none;}			
	
	

/* Media Queries
--------------------------------------------------------*/

/* Smaller than standard 1199 (devices and browsers) */
@media only screen and (max-width: 1199px) {
	
	.parallax.fixed{background-attachment:scroll; background-position: center center;}
}


/* Higher than 960 (desktop devices) */
@media only screen and (min-width: 960px) and (max-width: 1199px) {
	.teamImage h2 {margin-top: 105px; font-size:40px;}
	input[type="text"], input[type="password"], input[type="email"], textarea, select {width: 290px;}
}


/* Smaller than standard 960 (devices and browsers) */
@media only screen and (max-width: 959px) {
	.small {font-size: 30px; font-weight:300;}
	.smallBold {font-size: 30px; font-weight:700;}
	.medium {font-size: 38px; text-transform: uppercase;}
	.mediumBold {font-size: 38px; font-weight:700; text-transform: uppercase;}
	.large {font-size: 50px; text-transform: uppercase;}
	.largeBold {font-size: 50px; font-weight:700; text-transform: uppercase;}
	.author {font-size: 16px; font-weight:300;}
	
}


/* Tablet Portrait size to standard 960 (devices and browsers) */
@media only screen and (min-width: 768px) and (max-width: 959px) {
	h1 {font-size: 200px;}
	.teamImage h2 {margin-top: 75px; font-size:32px;}
	input[type="text"], input[type="password"], input[type="email"], textarea, select {width: 226px;}
	.parallax.fixed{background-attachment:scroll; background-position: center center;}
	.blogTitle {margin-top: -40px;}
}


/* All Mobile Sizes (devices and browser) */
@media only screen and (max-width: 767px) {
	.dropmenu { display: block; margin-top: 5px; }
	#nav {display: none;}
	#slidecaption { display:none;}
	#prevslide, #nextslide{top:120px;}
	.parallax.fixed{background-attachment:scroll; background-position: center center;}
	.logo {margin-top: 10px; transform: scale(.5);}
	#prevslide {right: 45px; transform: scale(.5);}
	#nextslide {right: 22px; transform: scale(.5);}
	.homepage {margin-bottom: -50px;}
	.thumbImage .thumbTextWrap {padding: 0 10px;}
	.thumbImage .thumbText p {font-size: 12px;}
	.thumbImage .thumbText h3 {font-size: 21px;}
	.blogTitle {margin-top: 0px;}
}
	
	
/* Mobile Landscape Size to Tablet Portrait (devices and browsers) */
@media only screen and (min-width: 480px) and (max-width: 767px) {
	h1 {font-size: 110px;}
	h1 span{font-size: 80px;}
	input[type="text"], input[type="password"], input[type="email"], textarea, select {width: 418px;}
	
}


/* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
@media only screen and (max-width: 479px) {
	h1 {font-size: 80px;}
	h1 span{font-size: 60px;}
	.teamImage h2 {margin-top: 105px; font-size:40px;}
	input[type="text"], input[type="password"], input[type="email"], textarea, select {width: 298px;}

}