<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>RT Multiservice</title>
    <meta name="description" content="">
    <meta name="title" content="">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'|theme }}"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js'|theme }}"></script>
    <![endif]-->
</head>

<body class="page no-sidebar header-style-1">
<div id="wrapper" class="animsition">
<div id="page" class="clearfix">

<div id="site-header-wrap">
    <!-- Top Bar -->
    <div id="top-bar" class="style-2">
        <div id="top-bar-inner" class="container">
            <div class="top-bar-inner-wrap">

                <div class="top-bar-socials">
                    <div class="inner">
                        <span class="icons">
                            <a href="{{\App\Config::where('key', 'instagram_link')->first()->value}}" target="_blank" title="Instagram"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                            <a href="{{\App\Config::where('key', 'facebook_link')->first()->value}}" target="_blank" title="Facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                        </span>
                    </div>
                </div><!-- /.top-bar-socials -->

                <div class="top-bar-content">
                    <span id="top-bar-text">
                        <i class="fa fa-phone-square"></i>{{\App\Config::where('key', 'telefone')->first()->value}}
                        <i class="fa fa-envelope"></i>{{\App\Config::where('key', 'email')->first()->value}}
                        <i class="fa fa-clock-o"></i>{{\App\Config::where('key', 'horario')->first()->value}}
                    </span><!-- /#top-bar-text -->
                </div><!-- /.top-bar-content -->
            </div>
        </div>
    </div><!-- /#top-bar -->

    <!-- Header -->


            <header id="site-header" class="header-front-page style-1">
              <div id="site-header-inner" class="container">
            <div class="wrap-inner">
                <div id="site-logo" class="clearfix">
                    <div id="site-logo-inner">
                        <a href="index.html" title="RT Multiserv" rel="home" class="main-logo">
                            <img src="/img/logo_rt.png" width="100" alt="">
                        </a>
                    </div>
                </div><!-- /#site-logo -->

                <div class="mobile-button"><span></span></div><!-- //mobile menu button -->

                <nav id="main-nav" class="main-nav">
                  <ul class="menu">
                    @foreach(\App\Menu::where('name', 'Menu Principal')->first()->links()->whereNull('parent_id')->orderBy('order')->get() as $menu)
                    @if($menu->child()->count() > 0)
                    <li class="menu-item menu-item-has-children"><a href="#">{{$menu->name}}</a>
                      <ul class="sub-menu">
                        @foreach($menu->child as $menu)
                          <li class="menu-item"><a href="{{$menu->url}}">{{$menu->name}}</a></li>
                        @endforeach
                      </ul>
                    </li>
                    @else
                      <li class="menu-item "><a href="{{$menu->url}}">{{$menu->name}}</a></li>
                    @endif
                    @endforeach
                  </ul>
                </nav><!-- /#main-nav -->
            </div>
        </div><!-- /#site-header-inner -->
    </header><!-- /#site-header -->
</div><!-- /#site-header-wrap -->
@yield('content')
<!-- Footer -->
<footer id="footer">
    <div id="footer-widgets" class="container style-1">
        <div class="row">
            <div class="col-md-4">
                <div class="widget widget_text">
                    <h2 class="widget-title"><span>SOBRE NÓS</span></h2>
                    <div class="textwidget">
                        <img src="/img/logo_rt.png" width="100"  alt="image" class="margin-top-5 margin-bottom-25" />
                        <p>Nossa missão é de suprir as necessidades dos clientes, transportar as mercadorias com agilidade e segurança, confeccionar e reparar produtos que atendam as necessidades dos nossos parceiros, garantindo a total satisfação.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="widget widget_links">
                    <h2 class="widget-title"><span>LINKS</span></h2>
                    <ul class="wprt-links clearfix col2">
                    <li class="style-2"><a href="index.html">Home</a></li>
                        <li class="style-2"><a href="quem-somos.html">Sobre Nós</a></li>
                        <li class="style-2"><a href="orcamento.html">Orçamento</a></li>
                        <li class="style-2"><a href="contato.html">Localização</a></li>
                        <li class="style-2"><a href="trabalhe-conosco.html">Trabalhe Conosco</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="widget widget_information">
                    <h2 class="widget-title"><span>INFORMAÇÕES DE CONTATO</span></h2>
                    <ul class="style-2">
                        <li class="address clearfix">
                            <span class="hl">Endereço:</span>
                            <span class="text">Rua Capitão Manuel Torres, 1233, - Piraí - RJ</span>
                        </li>
                        <li class="phone clearfix">
                            <span class="hl">Telefone:</span>
                            <span class="text">(24) 2431-3698</span>
                        </li>
                        <li class="email clearfix">
                            <span class="hl">E-mail:</span>
                            <span class="text">contato@rtmultiserv.com.br</span>
                        </li>
                    </ul>
                </div>

                <div class="widget widget_spacer">
                    <div class="wprt-spacer clearfix" data-desktop="10" data-mobi="10" data-smobi="10"></div>
                </div>

                <div class="widget widget_socials">
                    <div class="socials">
                        <a target="_blank" href="https://www.instagram.com/rtmultiserv/"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="https://www.facebook.com/RT-Multi-Serv-861364837357116/"><i class="fa fa-facebook"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Bottom -->
<div id="bottom" class="clearfix style-1">
    <div id="bottom-bar-inner" class="wprt-container">
        <div class="bottom-bar-inner-wrap">

            <div class="bottom-bar-content">
                <div id="copyright">RT Multiservice &copy; 2018 - <a href="https://www.facebook.com/aponpublicidade/" target="_blank">Desenvolvido por APON Publicidade</a>
                </div><!-- /#copyright -->
            </div><!-- /.bottom-bar-content -->

        </div>
    </div>
</div>
</div><!-- /#page -->
</div><!-- /#wrapper -->

<a id="scroll-top"></a>

<!-- Javascript -->
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/animsition.js"></script>
<script type="text/javascript" src="/js/plugins.js"></script>
<script type="text/javascript" src="/js/countTo.js"></script>
<script type="text/javascript" src="/js/fitText.js"></script>
<script type="text/javascript" src="/js/flexslider.js"></script>
<script type="text/javascript" src="/js/vegas.js"></script>
<script type="text/javascript" src="/js/cube.portfolio.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
<script src="modules/system/assets/js/framework.js"></script>
<script src="modules/system/assets/js/framework.extras.js"></script>
<link rel="stylesheet" property="stylesheet" href="modules/system/assets/css/framework.extras.css">
@yield('scripts')

</body>
</html>
