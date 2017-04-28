<!DOCTYPE HTML>
<html>
<head>
	<title>
		@yield('title' , '圆圆嘟嘟')
	</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	//js css meta setting
	@section('head')
	@show
	<style>a:hover,.top-menu a:hover,.show-more span,.cat-box .icon-cat,.single-content a,.single-content a:visited,#site-nav .down-menu>.current-menu-item>a,.entry-meta a,#site-nav .down-menu>.current-menu-item>a:hover,#site-nav .down-menu>li>a:hover,#site-nav .down-menu>li.sfHover>a,.cat-title .fa-bars,.widget-title .fa-bars,.at,.at a,#user-profile a:hover,#comments .fa-exclamation-circle,#comments .fa-check-square,#comments .fa-spinner,#comments .fa-pencil-square-o,.zm-tabs-nav .current .fa,.tab-recent .fa{color:#3a90f2;}.sf-arrows>li>.sf-with-ul:focus:after,.sf-arrows>li:hover>.sf-with-ul:after,.sf-arrows>.sfHover>.sf-with-ul:after{border-top-color:#3a90f2;}.thumbnail .cat,.format-cat,.format-img-cat{background:#3a90f2;opacity:0.8;}#login h1 a,.format-aside .post-format a,#searchform button,.li-icon-1,.li-icon-2,.li-icon-3,.new-icon,.title-l,.buttons a,.li-number,.post-format,.searchbar button{background:#3a90f2;}.entry-more a,.qqonline a,#login input[type='submit'],.log-zd{background:#3a90f2;}.entry-more a{right:-1px;}.entry-more a:hover{color:#fff;background:#595959;}.entry-direct a:hover,#respond input[type='text']:focus,#respond textarea:focus{border:1px solid #3a90f2;}#down a,.page-links span,.reply a:hover,.widget_categories a:hover,.widget_links a:hover,#respond #submit:hover,.callbacks_tabs .callbacks_here a,#gallery .callbacks_here a,#fontsize:hover,.single-meta li a:hover,.meta-nav:hover,.nav-single i:hover,.widget_categories a:hover,.widget_links a:hover,.tagcloud a:hover,#sidebar .widget_nav_menu a:hover,.gr-cat-title a,.group-tab-hd .group-current,.img-tab-hd .img-current{background:#3a90f2;border:1px solid #3a90f2;}.comment-tool a,.link-all a:hover,.link-f a:hover,.ias-trigger-next a:hover,.type-cat a:hover,.type-cat a:hover,.child-cat a:hover{background:#3a90f2;border:1px solid #3a90f2;}#site-nav .down-menu>.current-menu-item>a,#site-nav .down-menu>.current-menu-item>a:hover,.deanm .deanm-main a{background:#3a90f2;}.entry-header h1{border-left:5px solid #3a90f2;border-right:5px solid #3a90f2;}.slider-caption,.grid,icon-zan,.grid-cat,.entry-title-img,.header-sub h1{background:#3a90f2;opacity:0.9;}@media screen and (min-width: 900px) {#scroll li a:hover,.nav-search{background:#3a90f2;border:1px solid #3a90f2;}.custom-more a,.cat-more a,.author-m a{background:#3a90f2;}}@media screen and (max-width: 900px) {#navigation-toggle:hover,.nav-search:hover,.mobile-login a:hover,.nav-mobile:hover,{color:#3a90f2;}}@media screen and (min-width: 550px) {.pagination span.current,.pagination a:hover{background:#3a90f2;border:1px solid #3a90f2;}}@media screen and (max-width: 550px) {.pagination .prev,.pagination .next{background:#3a90f2;}}.single-content h3,.single-content .directory{border-left:5px solid #3a90f2;}.resp-vtabs li.resp-tab-active{border-left:2px solid #3a90f2!important;}.page-links a:hover span{background:#a3a3a3;border:1px solid #a3a3a3;}.single-content a:hover{color:#555;}.format-aside .post-format a:hover,.cat-more a:hover,.custom-more a:hover{color:#fff;}</style><style>.single-content p{text-indent:0;}#sc_notice{color:#7da33c;background:#ecf2d6 url('images/sc_notice.png') -1px -1px no-repeat;border:1px solid #aac66d;overflow:hidden;margin:10px 0;padding:15px 15px 15px 35px;}#sc_warn,.post-password-form{color:#ad9948;background:#fff4b9 url('images/sc_warn.png') -1px -1px no-repeat;border:1px solid #eac946;overflow:hidden;margin:10px 0;padding:15px 15px 15px 35px;}#sc_error{color:#c66;background:#ffecea url('images/sc_error.png') -1px -1px no-repeat;border:1px solid #ebb1b1;overflow:hidden;margin:10px 0;padding:15px 15px 15px 35px;}#sc_tips{color:#777;background:#eaeaea url('images/sc_tips.png') -1px -1px no-repeat;border:1px solid #ccc;overflow:hidden;margin:10px 0;padding:15px 15px 15px 35px;}</style>
	<style>.theiaStickySidebar:after {content: ""; display: table; clear: both;}</style>
</head>
<body class="loading">
<!-- header 头部-->
	<div class="header">
		@section('header')
		@show
	</div>
<!-- header 头部-->
<!-- content 主体-->
	<div class="content">
		@yield('content')
	</div>
<!-- content 主体-->
<!-- footer 尾部-->
	<div class="footer">
		@section('footer')

		@show
	</div>
<!-- footer 尾部-->
<!-- main 基础背景 start-->
<script type="text/javascript" src="/js/global/canvas.min.js"></script>
<canvas id="c_n12" width="1383" height="911" style="position: fixed; top: 0px; left: 0px; z-index: -1; opacity: 0.5;"></canvas>
<!-- main 基础背景 end-->

<!-- js css meta setting-->
@section('foot')
@show
</body>
</html>