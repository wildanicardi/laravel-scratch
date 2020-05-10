<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="/css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="/css/app.css">

@yield('head')
</head>
<body>
    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="/">SimpleWork</a></h1>
            </div>
            <div id="menu">
                <ul>
                <li class="{{Request::path() === '/' ? 'current_page_item':''}}"><a href="/" accesskey="1" title="">Homepage</a></li>
                <li class="{{Request::path() === 'contact' ? 'current_page_item':''}}"><a href="#" accesskey="5" title="">Contact Us</a></li>
                    <li class="{{Request::path() === 'about' ? 'current_page_item':''}}"><a href="/about" accesskey="3" title="">About Us</a></li>
                    <li class="{{Request::path() === 'articles' ? 'current_page_item':''}}"><a href="/articles" accesskey="4" title="">Articles</a></li>
                <li class="{{Request::path() === 'login' ? 'current_page_item':''}}"><a href="{{route('login')}}" accesskey="5" title="">Login</a></li>

                </ul>
            </div>
        </div>
        @yield('header')
    </div>
@yield('content')
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
<script src="js/app.js"></script>
</body>
</html>
