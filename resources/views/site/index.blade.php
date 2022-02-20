@extends('site/layouts.default')

@section('title')
@parent
@stop

@section('content')
<!--page start-->
<section class=" section_header pb-100 pt-40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 ml-auto pl-custom">
                <div class="container">
                    <div class="row reverse_mobile">
                        <div class="col-12 ">
                            <div class="row borderQuotationAll row_ul">
                                <ul class="info_ul">
                                    <li class="pbr">                                        
                                        <span class="ORdiv"></span>
                                        <span class="quotation" style="line-height:21px;">
                                            <p class="m-0">Informações <br>sobre as <br>cotações das</p>
                                            <h6 class="percentage">ORdivs</h6>
                                        </span>
                                    </li>
                                    <li class="pbr">                                        
                                        <span class="ORdiv"></span>
                                        <span class="quotation" style="line-height:21px;">
                                            <p class="m-0">Informações <br> sobre o crescimento <br> médio de nossas</p>
                                            <h6 class="percentage">ações</h6>
                                        </span> 
                                    </li>
                                    <li class="pbrd">                                        
                                        <span class="ORdiv"></span>
                                        <span class="quotation" style="line-height:21px;">
                                            <p class="m-0">Atas e pautas <br> de reuniões <br> e outros</p>
                                            <h6 class="percentage">documentos</h6>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 " >                        
                            <div class="row row_p" >                        
                                <div class="col-12">
                                    <h6 class="digitalRevolution animated fadeInRight gray_color" data-delay="1300">
                                        Milhares de clientes interessados <br> em um só propósito:
                                    </h6>
                                    <h3 class="revolution animated fadeInRight" data-delay="1500">
                                        Revolucionar <br> com o digital!
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!--site-main start-->
    <div class="site-main">
        <!-- row-top-section -->
        <section class="ttm-row row-top-section ttm-bgcolor-white clearfix section-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="featured-icon-box style6 left-icon">
                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <img src="{{ asset('assets/new/graphic_bar.png') }}" width="50px" class="align-icon">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Gráficos de <br> crescimento de ações</h5>
                                </div>
                                <div class="featured-desc">
                                    <p class="lh-22">Relatórios dos acompanhamentos <br> da evolução dos ORdivs e <br> documentos institucionais</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="featured-icon-box style6 left-icon">
                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <img src="{{ asset('assets/new/graphic.png') }}" width="50px" class="align-icon">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Receitas</h5>
                                </div>
                                <div class="featured-desc">
                                    <p class="lh-22">Principais receitas do <br> fechamento no mês</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="featured-icon-box style6 left-icon">
                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <img src="{{ asset('assets/new/open_book.png') }}" width="50px" class="align-icon align-icon_last">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Apresentação para <br> Investidores</h5>
                                </div>
                                <div class="featured-desc">
                                    <p >Estrutura e visão financeira</p>
                                </div>
                                <div class="featured-link hover-effect">
                                    <a class="hover-effect" href="" target="_blank" style="text-transform:uppercase;font-size:13px;"><b class="hover-effect"> Download</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- row-top-section end -->

        <!-- invest-section -->
        <section id="investidores" class="ttm-row about3-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="featuredbox-number animated pt-40">
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h5></h5>
                                    <h2 class="title bold">Administrativo <br> interno</h2>
                                </div>
                            </div>
                            <p class="mb-35" style="font-size: 15px;font-weight: 300;line-height:20px">
                                Todos que participam do banco <br> contribuem para o crescimento <br> dos benefícios para a comunidade <br> do banco.
                            </p>
                            <div class="featured-icon-box style4 left-icon zoom blur-v2">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-grey ttm-icon_element-color-darkgrey ttm-icon_element-size-sm ttm-icon_element-style-rounded"> 
                                        <img src="{{ asset('assets/new/available.png') }}">
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Disponíveis 24h</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-icon-box style4 left-icon zoom blur-v2">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-grey ttm-icon_element-color-darkgrey ttm-icon_element-size-sm ttm-icon_element-style-rounded"> 
                                        <img src="{{ asset('assets/new/reports.png') }}">
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Relatórios Mensais</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-icon-box style4 left-icon zoom blur-v2">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-grey ttm-icon_element-color-darkgrey ttm-icon_element-size-sm ttm-icon_element-style-rounded"> 
                                        <img src="{{ asset('assets/new/emoji.png') }}">
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Transparência total</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="ttm_single_image-wrapper text-right">
                            <img class="s3-image-1 animated fadeInRight" src="{{ asset('assets/new/administrativo.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- invest-section end -->

        <!-- agend-section s4 -->
        <section id="agenda" class="ttm-row clearfix">
            <div class="container-fluid">
                <div class="row tt-row_invert">
                    <div class="col-xl-8 col-lg-12 col-md-12">
                        <div class="row">
                            <h2 class="title-custom_ul bold">Nosso caminho <br> para sermos <br>seu banco <br>digital completo </h2>
                            <div class="col-xl-3 col-lg-3 col-md-6 mt_first_card" >
                                <h6 class="only_responsive">2020</h6>
                                <div class="row">
                                    <div class="col">
                                        <h6 class="rotate-title">estruturação</h6>
                                        <ul class="list-custom">
                                            <li>marketing</li>
                                            <li>estrutura tecnológica</li>
                                            <li>estrutura organizacional</li>
                                            <li>segurança</li>
                                            <li>design de plataformas</li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 mt_second_card">
                                <div class="row">
                                    <div class="col">
                                        <h6 class="rotate-title">sistemas e</h6>
                                        <h6 class="rotate-title rotate-sec"> plataformas</h6>
                                        <ul class="list-custom">
                                            <li>APIs gerias</li>
                                            <li>backoffices</li>
                                            <li>testes</li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 mt_third_card">
                                <div class="row">
                                    <div class="col">
                                        <h6 class="rotate-title">licença</h6>
                                        <ul class="list-custom">
                                            <li>público</li>
                                            <li>registros</li>
                                            <li>patentes</li>
                                            <li>conformidade <br> legislativa</li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 mt_fourth_card">
                                <div class="row">
                                    <div class="col">
                                        <h6 class="rotate-title rotate_white_disabled">futuramente</h6>
                                        <ul class="list-custom color_white_disabled">
                                            <li>acompanhamento</li>
                                            <li>melhorias</li>
                                            <li>rentabilidade</li>
                                            <li>segurança</li>
                                            <li>confiança</li>
                                            <li>planos</li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-xl-6 col-lg-3 col-md-6 mt_fifth_card">
                                <h6 class="only_responsive">2021</h6>
                                <div class="row">
                                    <div class="col">
                                        <h6 class="rotate-title rotate_white"> API Bacen </h6>
                                        <ul class="list-custom color_white">
                                            <li>expansão da fintech</li>
                                            <li>aumento de <br> importância</li>
                                            <li>novas fronteiras</li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-xl-6 col-lg-3 col-md-6 mt_sixth_card">
                                <div class="row">
                                    <div class="col">
                                        <h6 class="rotate-title rotate_white" >bancos e </h6>
                                        <h6 class="rotate-title rotate_white rotate-sec" >futuras</h6>
                                        <h6 class="rotate-title rotate_white rotate-third" style="">expanões</h6>
                                        <ul class="list-custom color_white">
                                            <li>novo plano <br> de negócios</li>
                                            <li>ecossistemas</li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- events-section end -->

        <!-- invest-section -->
        <section id="investidores" class="ttm-row about3-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="featuredbox-number pt-40">
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h1 class="title">Transparência</h1>
                                </div>
                            </div>
                            <p class="mb-35" style="font-size: 17px;font-weight: 300;">Pessoas investem não apenas pelo objetivo de retorno, mas pela habilidade de ver crescer a partir do conhecimento e experiência agregados ao negócio, e com isso gerar valor.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5 class="title_box">Controle financeiro</h5>
                                            <p class="pl-4 pb-50">Sua liberdade cresce <br> conforme investe</p>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5 class="title_box">Controle de vida</h5>
                                            <p class="pl-4">Seus investimentos <br> determinam seu caminho</p>
                                        </div>
                                    </div>
                                </div>
                            </div>     
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="ttm_single_image-wrapper text-right">
                            <img class="s3-image-1 animated fadeInRight" src="{{ asset('assets/new/transparencia.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- invest-section end -->

        <!--site-main start-->
        <section class="ttm-row pb-80 res-991-pb-100 clearfix register-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 pr-60 res-767-pr-15">
                        <!-- section title -->
                        <div class="section-title with-desc clearfix">
                            <div class="">
                                <!-- <h5></h5> -->
                                <h6 class="mb-0"><b>Receba conteúdos exclusivos</b></h6>
                            </div>
                            <div class="title-desc">
                                <p style="margin: 5% 0 0;color:#000;font-weight:300;font-size: 14px;line-height: 22px;">Cadastre-se em nossa newsletter e receba conteúdos exclusivos sobre investimentos e novidades do bank</p>
                            </div>
                        </div><!-- section title end -->
                        <form id="ttm-contactform" class="ttm-contactform wrap-form clearfix" method="post" action="/subscribeNewsletter">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>
                                        <span class="text-input">
                                            <input id="inputName" name="inputName" type="text" value="" placeholder="Nome" required="required">
                                        </span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label>
                                        <span class="text-input"></i>
                                            <input id="inputEmail" name="inputEmail" type="email" value="" placeholder="E-mail" required="required">
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <input name="submit" type="submit" id="submit" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black btn-register" value="Enviar">
                        </form>
                    </div>
                    <div class="col-md-5 ml-auto" >
                        <div class="pl-50 res-767-mt-40 clearfix">
                            <div class="title-desc mg5p">
                                <p class="custom">Para saber mais sobre nossos planos de investimentos entre em contato, temos um atendimento exclusivo para você! <br> Acreditamos que ao unir um grande propósito e as pessoas certas, podemos impactar positivamente o mundo.</p>
                            </div>
                            <h6><b>contato@bank.com.br</b></h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>

</div><!-- page end -->
@endsection

@section('styles')
<style type="text/css">
    .ORdiv{font-size: 21px;color: black;font-weight: 900;}
    .quotation{color: black;font-weight: 200;}
    .percentage{color: #000;font-size: 20px;font-weight: 700;margin-bottom:0px;}
    .borderQuotationAll{border-top: 1px solid lightgray;border-left: 1px solid lightgray;border-bottom: 1px solid lightgray;border-right: 1px solid lightgray;}
    .verticalLine{height: 80px;background: lightgray;float: right;width: 1px;margin-top: 16px;}
    .digitalRevolution{color: black;font-weight: 300;}
    .revolution{margin-top:5%;font-size: 40px;line-height: 40px;color: #000;font-weight: 900;font-family: 'Poppins', sans-serif;}
    .ttm-row.multi-content-section {padding: 90px 0 50px;}
    .featured-title h5 {font-size: 20px;line-height: 23px;margin-bottom: 10px;font-weight: 900;color: #000000;}
    .rotate-title{position: absolute;bottom: 0px;left: 0px;margin-left: 0px;transform-origin: 0 0;transform: rotate(270deg);background-color: #000;color: #fff;padding: 7px 10px;font-weight: 700;}
    .rotate_white{background-color: #fff!important;color: #000;font-weight: 900;}
    .color_white{color:#fff!important}
    .list-custom li{font-weight:200;font-size: 12px;line-height: 20px;}
    .title-custom_ul{display:flex;position:absolute;left: 16%;}
    .pbr{padding: 0 30px;border-right: 1px solid lightgray;}
    .pbrd{padding: 0 30px;}
    .ptb-50{padding:50px 0;}
    .info_ul{display:grid;grid-template-columns:0.8fr 1fr 1fr;padding-inline-start: unset;}
    .row_ul{width:72%;}
    .gray_color{color:#8D9297}
    .row_p{padding: 15% 0 15% 5%;}
    .tt-row_invert{padding:0 90px}
    .mt_first_card{margin-top:35%;}
    .mt_second_card{margin-top:30%;}
    .mt_third_card{margin-top:20%;}
    .mt_fourth_card{margin-top:15%;}
    .mt_fifth_card{margin-top:10%;}
    .mt_sixth_card{margin-top:5%;}
    .mt_first_card .rotate-title{margin-left:5px;bottom:-25px}
    .mt_second_card .rotate-title{bottom: -45px;left: -10px; white-space:nowrap;}
    .mt_second_card .rotate-sec{bottom: -45px!important;left: 12px!important;}
    .mt_third_card .rotate-title{bottom:-25px}
    .mt_fourth_card .rotate-title{margin-left:5px;bottom:-25px}
    .mt_fifth_card .rotate-title{margin-left:5px;bottom:-25px; white-space:nowrap;}
    .mt_sixth_card .rotate-title{bottom:-35px;left:-45px;padding: 5px 10px;white-space:nowrap;}
    .mt_sixth_card .rotate-sec{bottom:-35px!important;left:-15px!important;padding: 5px 10px!important;}
    .mt_sixth_card .rotate-third{bottom:-35px!important;left:15px!important;padding: 5px 10px!important;}
    .list-custom{list-style: outside;padding-left: 50px;}
    .register-section .title-desc .custom{margin:0 0;color:#000;font-weight:300;line-height: 22px;" style="margin: 45% 0px;color:#000;font-weight:300;line-height: 22px;}
    #agenda{padding:190px 0}
    .align-icon_last{padding-top:100%;}
@media ( max-width:1440px){
    .row_ul {width: 85%;}
    .s3-image-1 {width: 100%;}
}
@media ( min-width:1280px){
    .only_responsive{display:none}
}

@media ( max-width:1024px) and (min-width:900px){
    .tt-row_invert {padding: 0 30px;}
    .mt_second_card{margin-top:35%;}
    .mt_third_card{margin-top:23%;}
    .mt_fourth_card{margin-top:18%;}
    .mt_fifth_card{margin-top:23%;}
    .mt_sixth_card{margin-top:40%;}
}
@media ( max-width:1280px) and (min-width:768px){
    .row_ul {width: 90%;}
    .s3-image-1 {width: 90%;}
    #agenda {background: none;}
    .rotate_white {background-color: #000!important;color: #fff;-webkit-box-shadow: none!important;-moz-box-shadow:none!important;box-shadow: none!important;}
    .color_white{color:#000!important}
    .only_responsive{display: block;font-size: 40px;font-weight: 900;margin-bottom: 50px;position: absolute;margin-top: -50%;}
    .mt_fifth_card .only_responsive{margin-top: -50%;}
    .mt_sixth_card {margin-top: 20%;}
}
@media ( min-width:768px) and (max-width:899px){
    .only_responsive{margin-top: -30%;}
    .mt_first_card {margin-top: 50%;}
    .mt_second_card {margin-top: 53%;}
    .mt_third_card {margin-top: 3%;}
    .mt_fourth_card {margin-top: 0%;}
    .mt_fifth_card .only_responsive {margin-top: -20%;}
    .mt_fifth_card {margin-top: 20%;}
    .mt_sixth_card .rotate-title {bottom: -40px!important;}
    .mt_sixth_card .rotate-sec {bottom: -40px!important;}
    .mt_sixth_card .rotate-third {bottom: -40px!important;}
    .title-custom_ul {left: -8%;}

}
@media ( max-width:767px){

    .only_responsive{display: block;font-size: 20px;font-weight: 900;margin-bottom:50px;}
    .section_header {height: 920px;}
    .reverse_mobile{flex-flow: column-reverse;}
    .section-title .title-header {padding-left: 10px;}
    .section-title .title-header .title{font-size:34px;}
    .info_ul{grid-template-columns:1fr;text-align:center;padding:7px;margin: 0;}
    .pbr {padding:15px 30px;border-bottom: 1px solid lightgray;border-right: none;}
    .pbrd {padding: 30px;}
    .row_ul {width: 55%;margin: 0 auto 0 0;}
    .row_p {padding: 0 0 5%;}
    .gray_color{color:#000;font-weight: 400;}
    #agenda {background-position: bottom;padding:0px!important}
    .tt-row_invert{padding:0px 30px }
    .rotate-title {margin-left: 5px;transform: rotate(0deg);bottom:unset!important}
    .mt_first_card{margin-top:60%;}
    .mt_second_card{margin-top:20%;}
    .mt_third_card{margin-top:15%;}
    .mt_fourth_card{margin-top:15%;}
    .mt_fifth_card{margin-top:10%;}
    .mt_sixth_card{margin-top:5%;}
    .list-custom{list-style: outside;padding-left: 20px;color:#000!important;}
    .mt_first_card .rotate-title{top:-20px;}
    .mt_second_card .rotate-title{left:0; white-space:nowrap;top: -45px;}
    .mt_second_card .rotate-sec{left: 0!important;bottom: unset!important;top:-20px;}
    .mt_third_card .rotate-title{top:-20px;}
    .mt_fourth_card .rotate-title{top: -20px;}
    .mt_fifth_card .rotate-title{white-space:nowrap;-webkit-box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.75);-moz-box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.75);box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.75);}
    .mt_sixth_card .rotate-title{padding: 5px 10px;white-space:nowrap;-webkit-box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.75);-moz-box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.75);box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.75);left:0px!important;padding: 5px 10px!important;top: -5px;bottom: unset!important;}
    .mt_sixth_card .rotate-sec{left: 0px!important;padding: 5px 10px!important;bottom: unset!important;top: 20px;}
    .mt_sixth_card .rotate-third{left:0px!important;padding: 5px 10px!important;top: 45px;bottom: unset!important;}
    .footer {text-align: center;}
    .register-section .pl-50 {padding-left:0!important}
    .register-section .title-desc .custom {margin: 15% 0px;}
    #agenda {background: none;}
    .title-custom_ul {left: 5%;}
    .rotate_white {background-color: #000!important;color: #fff;-webkit-box-shadow: none!important;-moz-box-shadow:none!important;box-shadow: none!important;}
    .mt_fifth_card .list-custom {padding-top: 7%!important; }
    .mt_sixth_card .list-custom {padding-top: 20%!important; }
}
@media ( max-width:375px){
    .row_ul {width: 62%;}
}
@media ( max-width:320px){
    .row_ul {width: 72%;}
    .mt_first_card {margin-top: 100%;}


}


</style>
@stop