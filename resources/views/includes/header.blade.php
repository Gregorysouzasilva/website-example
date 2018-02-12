<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <meta charset="iso-8859-1" />
    <title>{{$pagina['titulopag'] or $principal['titulopagina']}} @isset($item['titulo']){{$item['titulo']}}@endisset</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta property="fb:app_id" content="{{$principal['appid']}}"/>
    <meta property="fb:admins" content="{{$principal['fbadminid']}}" />
    <link rel="apple-touch-icon" href="{{$principal['icone']}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{$principal['icone']}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{$principal['icone']}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{$principal['icone']}}">
    <link rel="icon" type="image/x-icon" href="{{$principal['icone']}}" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="{{$pagina['descricao'] or $principal['descricao']}}" name="description" />
    <meta content="{{$pagina['titulopag'] or $principal['titulopagina']}}" name="author" />
    <meta name="keywords" content="{{$pagina['tag'] or ''}}">
    <meta name="google-site-verification" content="{{ $principal['googleverificationcode']}}" />
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="{{ $item['titulo'] or $principal['titulopagina']}}" />
    <meta property="og:site_name" content="{{ $pagina['titulopag'] or $principal['titulopagina']}}" />
    <meta property="og:description" content="{{ $pagina['descricao'] or $principal['descricao']}}" />
    @if(!empty($item['id']))
      <meta property="og:image" content="{{ $item['itemimagem']}}" />
      <meta property="og:image:type" content="image/png" />
      <meta property="og:image:width" content="800" />
      <meta property="og:image:height" content="600" />
      <meta property="og:type" content="website" />
    @else
        <meta property="og:type" content="website" />
    @endif
<meta property="og:url" content="{{ $item['linkmateria'] or url('/') }}" />
    <!-- BEGIN PLUGINS -->
    <link href="/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/swiper/css/swiper.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/assets/plugins/text-rotate/simpletextrotator.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- END PLUGINS -->
    <!-- BEGIN PAGES CSS -->
    <link class="main-stylesheet" href="/css/pages.css" rel="stylesheet" type="text/css" />
    <link class="main-stylesheet" href="/css/pages-icons.css" rel="stylesheet" type="text/css" />
    <style>
    .videoWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.videoWrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
body {
    font-family: 'Open Sans', Arial, sans-serif;
}
  </style>
    <!-- BEGIN PAGES CSS -->
    <link rel="alternate" href="{{ $principal['sitelink']}}" hreflang="pt-br" />
    {{ $pagina['scriptadicional'] or ''}}
  </head>
  <body class="pace-dark">
  <div id="fb-root"></div>
  <script type="text/javascript" src="/js/jquery.js"></script>
<script src="/js/jquery.maskedinput.js" type="text/javascript"></script>
<script src="https://apis.google.com/js/platform.js"></script>

<script type = "text/javascript">
$.noConflict( ) 
jQuery(function($){ 
 
 $(".data").mask("99/99/9999");
	   $(".datahora").mask("99/99/9999 99:99");
	   $(".cnpj").mask("99.999.999/9999-99");
	   $(".cpf").mask("999.999.999-99"); 
	   $(".periodo").mask("99/99/9999 99/99/9999"); 
	   $(".cep").mask("99999-999");
	   //jQuery(".telefone").mask("(99)99999-999?9"); 
	   $(".hora").mask("99:99");
	   $(".base").mask("99/9999");
	   //jQuery(".data" ).datepicker();
	$('.telefone').mask("(99)9999-9999?9")  
            .live('focusout', function (event) { 
				
                var target, phone, element;  
                target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
                phone = target.value.replace(/\D/g, '');  
                element = $(target);  
                element.unmask();  
                if(phone.length > 10) {  
                    element.mask("(99)99999-999?9");  
                } else {  
                    element.mask("(99)9999-9999?9");  
                } 

            });  
}); 
  </script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9&appId={{ $principal['appid'] or ''}}";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
    <!-- BEGIN HEADER -->
    <nav class="header bg-header transparent-white" data-pages="header" data-pages-header="autoresize" data-pages-resize-class="white">
      <div class="container relative">
        <!-- BEGIN LEFT CONTENT -->
        <div class="pull-left">
          <!-- .header-inner Allows to vertically Align elements to the Center-->
          <div class="header-inner">
            <!-- BEGIN LOGO -->
            <img src="{{ $principal['logo']}}" data-src-retina="{{ $principal['logo']}}" class="logo" alt="" height="70px">
            <img src="{{ $principal['logo']}}" data-src-retina="{{ $principal['logo']}}" class="alt" alt=""  height="55px">
          </div>
        </div>
        <!-- BEGIN HEADER TOGGLE FOR MOBILE & TABLET -->
        <div class="pull-right">
          <div class="header-inner">
<!--            <a href="#" class="search-toggle visible-sm-inline visible-xs-inline p-r-10" data-toggle="search">?</a>-->
            <div class="visible-sm-inline visible-xs-inline menu-toggler pull-right p-l-10" data-pages="header-toggle" data-pages-element="#header">
              <div class="one"></div>
              <div class="two"></div>
              <div class="three"></div>
            </div>
          </div>
        </div>
        <!-- END HEADER TOGGLE FOR MOBILE & TABLET -->
        <!-- BEGIN RIGHT CONTENT -->
        <div class="menu-content mobile-dark pull-right clearfix" data-pages-direction="slideRight" id="header">
          <!-- BEGIN HEADER CLOSE TOGGLE FOR MOBILE -->
          <div class="pull-right">
            <a href="#" class="padding-10 visible-xs-inline visible-sm-inline pull-right m-t-10 m-b-10 m-r-10" data-pages="header-toggle" data-pages-element="#header">
              x
            </a>
          </div>
          <!-- END HEADER CLOSE TOGGLE FOR MOBILE -->
          @include('includes.menu')
        </div>
      </div>
    </nav>
    <!-- END HEADER -->