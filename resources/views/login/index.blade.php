<!--继承父模板-->
@extends('layouts.master')

<!--设置title-->
@section('title' , '圆圆 · 嘟嘟')

<!--设置head-->
@section('head')
<link rel="stylesheet" href="/css/login/index.css" />
@endsection
<!--设置header-->
@section('header')

@endsection
<!--设置content-->
@section('content')
<div class="webkit-main">
    <div class="webkit-login-block">
        <div class="head-image">
            <img src="http://img.zcool.cn/community/05e5e1554af04100000115a8236351.jpg"/>
        </div>
        <div class="login">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <input type="text" placeholder="username" name="user"><br>
            <input type="password" placeholder="password" name="password"><br>
            <input type="button" value="Login" name="login">
        </div>
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
<script>
    $('[name="login"]').on("click" , function () {
         $.ajax({
             type: "POST",
             url: "/admin/activeLogin" ,
             data:{
                 username: $('[name="user"]').val(),
                 password: $('[name="password"]').val()
             },
             dataType:'json',
             success: function (result) {
                 console.log(result);
                 if(result.code === 0){
                     location.href = '/admin';
                 }else{
                    alert(result.message);
                 }
             }
         });
    });
</script>
@endsection