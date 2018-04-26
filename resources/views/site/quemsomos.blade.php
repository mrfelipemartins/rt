@extends('layouts.main')
@section('content')

<div id="featured-title" class="clearfix featured-title-left">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">Quem Somos</h1>
            </div>
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="#" title="Construction" rel="home" class="trail-begin">Home</a>
                        <span class="sep">/</span>
                        <span class="trail-end">Quem Somos</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
                    <!-- GALLERY -->
                    <section class="wprt-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-6">
                                    <h2 class="line-height-normal margin-bottom-10">NOSSA HISTÓRIA</h2>
                                    <div class="wprt-lines style-1 custom-3">
                                        <div class="line-1"></div>
                                        <div class="line-2"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                                    <p class="margin-bottom-25">{!! base64_decode($page->content) !!}</p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="wprt-counter text-center has-plus">
                                                <div class="number" data-speed="5000" data-to="13691" data-in-viewport="yes">{{\App\Config::where('key', 'projetos_concluidos')->first()->value}}</div>
                                                <div class="text">PROJETOS CONCLUIDOS</div>
                                            </div>

                                            <div class="wprt-spacer" data-desktop="0" data-mobi="35" data-smobi="35"></div>
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-4">
                                            <div class="wprt-counter text-center has-plus">
                                                <div class="number" data-speed="5000" data-to="725" data-in-viewport="yes">{{\App\Config::where('key', 'clientes_satisfeitos')->first()->value}}</div>
                                                <div class="text">CLIENTES SATISFEITOS</div>
                                            </div>

                                            <div class="wprt-spacer" data-desktop="0" data-mobi="35" data-smobi="35"></div>
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-4">
                                            <div class="wprt-counter text-center has-plus">
                                                <div class="number" data-speed="5000" data-to="184" data-in-viewport="yes">{{\App\Config::where('key', 'funcionarios')->first()->value}}</div>
                                                <div class="text">FUNCIONÁRIOS</div>
                                            </div>

                                            <div class="wprt-spacer" data-desktop="0" data-mobi="35" data-smobi="35"></div>
                                        </div><!-- /.col-md-4 -->
                                    </div>
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">
                                    <div class="wprt-galleries galleries w-570px" data-width="135" data-margin="10">
                                        <div id="wprt-slider" class="flexslider">
                                            <ul class="slides">
                                                <li class="flex-active-slide">
                                                    <a class="zoom" href="storage/app/media/27906691_367057973758473_1190186785_o.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="storage/app/media/27906691_367057973758473_1190186785_o.jpg" style="height:430px !important;" alt="image" />
                                                </li>

                                                <li class="flex-active-slide">
                                                    <a class="zoom" href="storage/app/media/27946676_367057957091808_122434229_o.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="storage/app/media/27946676_367057957091808_122434229_o.jpg" style="height:430px !important;"  alt="image" />
                                                </li>

                                                <li class="flex-active-slide">
                                                    <a class="zoom" href="storage/app/media/27906642_367057980425139_336992832_o.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="storage/app/media/27906642_367057980425139_336992832_o.jpg" style="height:430px !important;"  alt="image" />
                                                </li>

                                                <li class="flex-active-slide">
                                                    <a class="zoom" href="storage/app/media/27846102_367058007091803_1479407856_o.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="storage/app/media/27846102_367058007091803_1479407856_o.jpg" style="height:430px !important;"  alt="image" />
                                                </li>
                                            </ul>
                                        </div>

                                        <div id="wprt-carousel" class="flexslider">
                                            <ul class="slides">
                                                <li><img src="storage/app/media/27906691_367057973758473_1190186785_o.jpg" style="height:77px !important;"  alt="image"></li>
                                                <li><img src="storage/app/media/27946676_367057957091808_122434229_o.jpg" style="height:77px !important;" alt="image"></li>
                                                <li><img src="storage/app/media/27906642_367057980425139_336992832_o.jpg" style="height:77px !important;" alt="image"></li>
                                                <li><img src="storage/app/media/27846102_367058007091803_1479407856_o.jpg" style="height:77px !important;" alt="image"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>


                </div>
            </div>
        </div>
    </div>
</div>

@stop
