<!DOCTYPE html>
<html lang="[lang]" prefix="og: http://ogp.me/ns#">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content='true' name='HandheldFriendly'/>
	<meta content='width' name='MobileOptimized'/>
	<meta content='yes' name='apple-mobile-web-app-capable'/>
	<meta name="csrf-token" content="{{ csrf_token() }}"/>
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&subset=cyrillic&display=swap">
	@yield('styles')

	@yield('seo_tags')
</head>

<body>
<div id="preloader" class="visible"></div>

<div class="main-container">
	<div class="main-container_wrapper content-container">
		@include('front.layouts.templates.header')
		<div id="left-menu">
			<!-- vue component left-menu.vue -->
			<!-- Example: <left_menu :menu='Array'
									 facebook-link='url'
									 instagram-link='url'
									 telegram-link='url'
									 youtube-link='url'/> -->
			<left_menu/>
		</div>
	</div>
</div>

<main>
	@yield('main')
</main>

<div class="main-container">
	<div class="content-container">
		<div class="main-container_wrapper footer">
			@include('front.layouts.templates.footer')
		</div>
	</div>
</div>

@yield('popups')
@yield('scripts')

<!-- async loading for font-awesome -->
<script type="text/javascript">
    (function() {
        let createStylesheet = function(link) {
            var css = document.createElement('link');
            css.href = link;
            css.rel = 'stylesheet';
            css.type = 'text/css';
            document.getElementsByTagName('head')[0].appendChild(css);
        }
        createStylesheet('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')
    })();
</script>

</body>

</html>
