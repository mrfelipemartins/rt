<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Home - RT Multiserv</title>
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

<body class="front-page no-sidebar site-layout-full-width header-style-5 header-sticky">
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


            <header id="site-header" class="header-front-page style-5">
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

<!-- Hero Background SlideShow -->
<div id="hero-section" data-number="3" data-image-1="http://rtmultiserv.com.br/storage/app/media/27836419_366790997118504_216062469_o.jpg" data-effect="fade">
    <div class="hero-content">
        <div class="hero-title scroll" data-min="18px" data-max="48px">
            <h1>{{\App\Config::where('key', 'frase_home_1')->first()->value}}</h1>
            <h1>{{\App\Config::where('key', 'frase_home_2')->first()->value}}</h1>
            <h1>{{\App\Config::where('key', 'frase_home_3')->first()->value}}</h1>
        </div>

        <div class="hero-text">
            <p class="font-weight-600 letter-spacing-1px">{!! \App\Config::where('key', 'frase_home_4')->first()->value !!}</p>
        </div>

        <a class="arrow-2 bounce scroll-target" href="#services-section"><span class="fa fa-angle-down"></span></a><!-- change href value to ID of section you want to scroll down -->
    </div><!-- /.hero-content -->
</div>

<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">

                    <!-- DIVISION -->
                    <section id="divisions-section" class="wprt-section divisions">
                        <div class="container">
                            <div class="row">
                              @foreach(\App\Block::where('id', 3)->first()->items as $item)
                              <div class="col-md-4">
                                <div class="wprt-spacer" data-desktop="0" data-mobi="60" data-smobi="60"></div>

                                  <div class="wprt-content-box style-1">
                                      <div class="wprt-icon-box icon-effect-2 icon-left">
                                          <div class="icon-wrap">
                                              <img src="/storage/{{str_replace('images/', '', $item->image)}}" alt="">
                                          </div>
                                          <div class="content-wrap">
                                              <h3 class="dd-title text-white font-size-19" style="text-transform:uppercase;"><a href="{{$item->url}}">{{$item->title}}</a></h3>
                                              <div class="dd-link"><a href="{{$item->url}}">VER MAIS</a></div>
                                          </div>
                                      </div>
                                  </div>
                              </div><!-- /.col-md-4 -->
                              @endforeach
                            </div>
                        </div>
                    </section>

                    <!-- SERVICES -->
                    <section id="services-section" class="wprt-section services-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                    <h2 class="text-center margin-bottom-10" style="text-transform:uppercase">{{\App\Block::find(1)->name}}</h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="32" data-mobi="32" data-smobi="32"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-6">
                                    <div class="wprt-image-box left clearfix">
                                        <div class="image-wrap">
                                            <img src="/storage/{{str_replace('images/', '', \App\BlockItem::find(1)->image)}}" alt="image" />
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="{{\App\BlockItem::find(1)->url}}">{{\App\BlockItem::find(1)->title}}</a></h3>
                                            <p>{{\App\BlockItem::find(1)->description}}</p>
                                            <div class="dd-link"><a href="{{\App\BlockItem::find(1)->url}}">VER MAIS</a></div>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="30" data-mobi="20" data-smobi="20"></div>

                                    <div class="wprt-image-box left clearfix">
                                        <div class="image-wrap">
                                            <img src="/storage/{{str_replace('images/', '', \App\BlockItem::find(2)->image)}}" alt="image" />
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="{{\App\BlockItem::find(2)->url}}">{{\App\BlockItem::find(2)->title}}</a></h3>
                                            <p>{{\App\BlockItem::find(2)->description}}</p>
                                            <div class="dd-link"><a href="{{\App\BlockItem::find(2)->url}}">VER MAIS</a></div>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="20" data-smobi="20"></div>
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">
                                  <div class="wprt-image-box left clearfix">
                                      <div class="image-wrap">
                                          <img src="/storage/{{str_replace('images/', '', \App\BlockItem::find(3)->image)}}" alt="image" />
                                      </div>
                                      <div class="content-wrap">
                                          <h3 class="dd-title font-size-18"><a href="{{\App\BlockItem::find(1)->url}}">{{\App\BlockItem::find(3)->title}}</a></h3>
                                          <p>{{\App\BlockItem::find(3)->description}}</p>
                                          <div class="dd-link"><a href="{{\App\BlockItem::find(3)->url}}">VER MAIS</a></div>
                                      </div>
                                  </div>

                                    <div class="wprt-spacer" data-desktop="30" data-mobi="20" data-smobi="20"></div>

                                    <div class="wprt-image-box left clearfix">
                                        <div class="image-wrap">
                                            <img src="/storage/{{str_replace('images/', '', \App\BlockItem::find(4)->image)}}" alt="image" />
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="{{\App\BlockItem::find(4)->url}}">{{\App\BlockItem::find(4)->title}}</a></h3>
                                            <p>{{\App\BlockItem::find(4)->description}}</p>
                                            <div class="dd-link"><a href="{{\App\BlockItem::find(4)->url}}">VER MAIS</a></div>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="20" data-smobi="20"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>

                    <section id="features" class="wprt-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                    <h2 class="text-center margin-bottom-10">{{\App\Block::find(2)->title}}</h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-4">
                                    <div class="wprt-icon-box outline icon-effect-3 icon-left">
                                        <div class="icon-wrap font-size-45">
                                            <img src="storage/{{str_replace('images/', '', \App\BlockItem::find(5)->image)}}" alt="">
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="{{\App\BlockItem::find(5)->url}}">{{\App\BlockItem::find(5)->title}}</a></h3>
                                            <p>{{\App\BlockItem::find(5)->description}}</p>
                                            <div class="dd-link dark"><a href="{{\App\BlockItem::find(5)->url}}">VER MAIS</a></div>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="45" data-mobi="30" data-smobi="30"></div>

                                    <div class="wprt-icon-box outline icon-effect-3 icon-left">
                                        <div class="icon-wrap font-size-35">
                                              <img src="storage/{{str_replace('images/', '', \App\BlockItem::find(6)->image)}}" alt="">
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="{{\App\BlockItem::find(6)->url}}">{{\App\BlockItem::find(6)->title}}</a></h3>
                                            <p>{{\App\BlockItem::find(6)->description}}</p>
                                            <div class="dd-link dark"><a href="{{\App\BlockItem::find(6)->url}}">VER MAIS</a></div>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="wprt-icon-box outline icon-effect-3 icon-left">
                                        <div class="icon-wrap font-size-35">
                                              <img src="storage/{{str_replace('images/', '', \App\BlockItem::find(7)->image)}}" alt="">
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="{{\App\BlockItem::find(7)->url}}">{{\App\BlockItem::find(7)->title}}</a></h3>
                                            <p>{{\App\BlockItem::find(7)->description}}</p>
                                            <div class="dd-link dark"><a href="{{\App\BlockItem::find(7)->url}}">VER MAIS</a></div>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="45" data-mobi="30" data-smobi="30"></div>

                                    <div class="wprt-icon-box outline icon-effect-3 icon-left">
                                        <div class="icon-wrap font-size-35">
                                              <img src="storage/{{str_replace('images/', '', \App\BlockItem::find(8)->image)}}" alt="">
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="{{\App\BlockItem::find(8)->url}}">{{\App\BlockItem::find(8)->title}}</a></h3>
                                            <p>{{\App\BlockItem::find(8)->description}}</p>
                                            <div class="dd-link dark"><a href="{{\App\BlockItem::find(8)->url}}">VER MAIS</a></div>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="wprt-icon-box outline icon-effect-3 icon-left">
                                        <div class="icon-wrap font-size-35">
                                              <img src="storage/{{str_replace('images/', '', \App\BlockItem::find(9)->image)}}" alt="">
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="{{\App\BlockItem::find(9)->url}}">{{\App\BlockItem::find(9)->title}}</a></h3>
                                            <p>{{\App\BlockItem::find(9)->description}}</p>
                                            <div class="dd-link dark"><a href="{{\App\BlockItem::find(9)->url}}">VER MAIS</a></div>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="45" data-mobi="30" data-smobi="30"></div>

                                    <div class="wprt-icon-box outline icon-effect-3 icon-left">
                                        <div class="icon-wrap font-size-35">
                                              <img src="storage/{{str_replace('images/', '', \App\BlockItem::find(10)->image)}}" alt="">
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="{{\App\BlockItem::find(10)->url}}">{{\App\BlockItem::find(10)->title}}</a></h3>
                                            <p>{{\App\BlockItem::find(10)->description}}</p>
                                            <div class="dd-link dark"><a href="{{\App\BlockItem::find(10)->url}}">VER MAIS</a></div>
                                        </div>
                                    </div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="50"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>

                    <!-- Promotion -->
                    <section class="wprt-section promotion">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="wprt-spacer" data-desktop="8" data-mobi="8" data-smobi="8"></div>
                                    <h2 class="text-white text-center-mobile font-size-20 margin-bottom-0">Sinta-se a vontade para entrar em contato para qualquer projeto.</h2>
                                    <div class="wprt-spacer" data-desktop="0" data-mobi="20" data-smobi="20"></div>
                                </div><!-- /.col-md-8 -->

                                <div class="col-md-4">
                                    <div class="text-right text-center-mobile"><a href="contato.html" class="wprt-button white rounded-3px">FALE CONOSCO</a></div>
                                    <div class="wprt-spacer" data-desktop="0" data-mobi="15" data-smobi="15"></div>
                                </div><!-- /.col-md-4 -->

                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>


                </div><!-- /.page-content -->
            </div>
        </div>
    </div>
</div>
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
                            <span class="text">{{\App\Config::where('key', 'endereco')->first()->value}}</span>
                        </li>
                        <li class="phone clearfix">
                            <span class="hl">Telefone:</span>
                            <span class="text">{{\App\Config::where('key', 'telefone')->first()->value}}</span>
                        </li>
                        <li class="email clearfix">
                            <span class="hl">E-mail:</span>
                            <span class="text">{{\App\Config::where('key', 'email')->first()->value}}</span>
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

</body>
</html>
