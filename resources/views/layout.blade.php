<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--        <link rel="stylesheet" href="/css/app.css">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <title>@yield('title', 'Blog')</title>
</head>
<body>
<div class="wrapper">
<nav class="navbar is-dark">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="/" style="font-weight:bold;">
                OOPBlog
            </a>
            <span class="navbar-burger burger" data-target="navMenu">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navMenu" class="navbar-menu">
            <div class="navbar-end">
                <a href="/" class="navbar-item">Home</a>
                <a href="/posts" class="navbar-item">Posts</a>
                <a href="/contact" class="navbar-item">Contact us</a>
                <a href="/posts/create" class="navbar-item">Create a new blog post</a>
            </div>
        </div>
    </div>
</nav>
</div>
@yield('content')
<script type="text/javascript">
    (function() {
        var burger = document.querySelector('.burger');
        var nav = document.querySelector('#'+burger.dataset.target);
        burger.addEventListener('click', function(){
            burger.classList.toggle('is-active');
            nav.classList.toggle('is-active');
        });
    })();
</script>
</body>
</html>