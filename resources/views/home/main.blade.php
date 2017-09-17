<!--继承父模板-->
@extends('layouts.master')

<!--设置title-->
@section('title' , '圆圆 · 嘟嘟')

<!--设置head-->
@section('head')
	<link rel="stylesheet" href="/css/home/main.css" />
@endsection
<!--设置header-->
@section('header')

@endsection
<!--设置content-->
@section('content')
	<div id="wrapper">
		<div id="bg"></div>
		<div id="overlay"></div>
		<div id="main">
			<header id="header">
				<h1>圆圆 · 嘟嘟</h1>
				<p>欢迎光临ss</p>
				<nav>
					<ul>
						<li><a href="javascript:;" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="javascript:;" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="javascript:;" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="javascript:;" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="javascript:;" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</nav>
			</header>
			<footer id="footer">
			</footer>
		</div>
	</div>
@endsection
<!--设置footer-->
@section('footer')

@endsection

<!--设置foot-->
@section('foot')
	<script>
		window.onload = function() { document.body.className = ''; }
		window.ontouchmove = function() { return false; }
		window.onorientationchange = function() { document.body.scrollTop = 0; }
	</script>
@endsection