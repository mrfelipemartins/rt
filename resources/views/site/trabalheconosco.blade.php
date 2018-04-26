@extends('layouts.main')
@section('content')

<!-- Featured Title -->
<div id="featured-title" class="clearfix featured-title-left">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">Trabalhe Conosco</h1>
            </div>
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="#" title="Construction" rel="home" class="trail-begin">Home</a>
                        <span class="sep">/</span>
                        <span class="trail-end">Trabalhe Conosco</span>
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
            <div id="inner-content" class="inner-content-wrap"><br>
                <div class="page-content">
                    <section class="wprt-section">
                        <div class="container">
                            <p>{!! base64_decode($page->content) !!}</p>
                            <div class="row">
			                    <div class="col-md-12">
									<form action="#" method="post" class="contact-form wpcf7-form">
										<div class="wprt-contact-form-1">
											<span class="wpcf7-form-control-wrap name">
												<input type="text" tabindex="1" id="name" name="name" value="" class="wpcf7-form-control" placeholder="Nome *" required>
											</span>
											<span class="wpcf7-form-control-wrap email">
												<input type="email" tabindex="2" id="email" name="email" value="" class="wpcf7-form-control" placeholder="E-mail *" required>
											</span>
											<span class="wpcf7-form-control-wrap phone">
												<input type="text" tabindex="3" id="phone" name="phone" value="" class="wpcf7-form-control" placeholder="Telefone">
											</span>
											<span class="wpcf7-form-control-wrap subject">
											<label>Anexar Curriculo</label>
												<input type="file" tabindex="3" id="phone" name="file" value="" class="wpcf7-form-control">
											</span>
											<span class="wpcf7-form-control-wrap message">
												<textarea name="message" tabindex="5" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Mensagem" required></textarea>
											</span>
											<div class="wrap-submit">
												<input type="submit" value="ENVIAR" class="submit wpcf7-form-control wpcf7-submit" id="submit" name="submit">
											</div>
											<input type="hidden" tabindex="4" id="subject" name="subject" value="Curriculo" class="wpcf7-form-control" placeholder="Assunto *" required>
										</div>
									</form>
			                    </div><!-- /.col-md-8 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
