<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>150 anos do Metodismo no Brasil | 1867 - 2017</title>
    <meta name="title" content="150 anos do Metodismo no Brasil | 1867 - 2017">
    <meta name="description" content="Anunciando o evangelho, discipulando, educando e promovendo vida.">
    <meta name="audience" content="all">
    <meta name="rating" content="general">
    <meta name="robots" content="index, follow">
    <meta name="distribution" content="global">
    <meta name="author" content="AWSoft! - www.awsoft.com.br">

    <link rel="shortcut icon" href="images/favicon.png">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="js/swiper/swiper.min.css">
    <style>
    .swiper-container {
        width: 100%;
        height: 263px;
        margin: 20px auto;
    }
    .navbar-default {
        background: transparent;
    }
    #main-content {
        margin-top: 43%;
    }
    @media screen and (max-width: 768px) {
        #main-content {margin-top: 28%;}
    }
    </style>
</head>
<body>


<?php include 'includes/header.php'; ?>

<img src="images/bg-home.jpg" alt="" style="position: absolute; top: 0; width: 100%;">

<div id="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2 class="title-main">Apresentação</h2>
                <p style="padding-right: 10px;">Em 2017 a Igreja Metodista celebra 150 anos de missão permanente no Brasil. O site lançado especialmente para data reúne todas as informações, vídeos, fotos e materiais de apoio para celebração, além de trazer informações de eventos que acontecem nas nossas igrejas em todo o país. Conheça a nossa história, origens, pilares e muito mais. Esperamos que essa plataforma consiga te apresentar um pouco sobre a vida e missão de uma igreja construída através do compromisso de milhares com essa história.</p><br>
                <p>Clique no vídeo e conheça um pouco sobre a história da Igreja Metodista.</p>
            </div>
            <div class="col-md-5 text-center" style="padding-top: 20px;">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="img-thumbnail embed-responsive-item" src="https://www.youtube.com/embed/fhhWO2pYDZw" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="row" style="padding-top: 20px;">
            <div class="col-md-12">
                <hr><br>
                <h2 class="title-main">Pilares</h2>
            </div>
            <div class="col-md-4 text-center">
                <a href="pilares#acao-social"><img src="images/thumb-pilares-acao-social.jpg" class="img-circle img-thumbnail" style="width: 248px;" alt=""></a>
                <h3><a href="pilares#acao-social"><strong>Ação Social</strong></a></h3>
            </div>
            <div class="col-md-4 text-center">
                <a href="pilares#missao"><img src="images/thumb-pilares-missao.jpg" class="img-circle img-thumbnail" style="width: 248px;" alt=""></a>
                <h3><a href="pilares#missao"><strong>Missão</strong></a></h3>
            </div>
            <div class="col-md-4 text-center">
                <a href="pilares#educacao"><img src="images/thumb-pilares-educacao.jpg" class="img-circle img-thumbnail" style="width: 248px;" alt=""></a>
                <h3><a href="pilares#educacao"><strong>Educação</strong></a></h3>
            </div>
        </div>

        <div class="row" style="padding-top: 20px;">
            <div class="col-md-12">
                <hr><br>
                <h2 class="title-main">Galeria</h2>

                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="images/img-galeria.jpg" class="img-thumbnail" alt=""></div>
                        <div class="swiper-slide"><img src="images/img-galeria.jpg" class="img-thumbnail" alt=""></div>
                        <div class="swiper-slide"><img src="images/img-galeria.jpg" class="img-thumbnail" alt=""></div>
                        <div class="swiper-slide"><img src="images/img-galeria.jpg" class="img-thumbnail" alt=""></div>
                        <div class="swiper-slide"><img src="images/img-galeria.jpg" class="img-thumbnail" alt=""></div>
                        <div class="swiper-slide"><img src="images/img-galeria.jpg" class="img-thumbnail" alt=""></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>

        <div class="row" style="padding-top: 20px;">
            <div class="col-md-12">
                <hr><br>
            </div>
            <div class="col-md-5 text-center" style="padding-top: 20px;">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="img-thumbnail embed-responsive-item" src="https://www.youtube.com/embed/37GKHz_4soI" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-7">
                <h2 class="title-main">Testemunho</h2>
                <p style="padding-right: 10px;">Conheça os testemunhos registrados pelo Jornal Expositor Cristão de maio de 2017. Ambas centenárias metodistas, compartilham suas histórias de vida junto à instituição.</p><br>
                <p><a href="http://www.expositorcristao.com.br/2017/07/testemunho-de-duas-centenarias/" target="_blank"><strong>Clique aqui</strong></a> e leia a matéria completa no site do Jornal Expositor Cristão.</p><br>
                <p><a href="testemunhos" class="btn btn-primary" style="font-weight: bold;">+ Testemunhos</a></p>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<!-- Swiper JS -->
<script src="js/swiper/swiper.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 3,
        paginationClickable: true,
        spaceBetween: 30,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        freeMode: true,
        grabCursor: true,
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            320: {
                slidesPerView: 1,
                spaceBetween: 10
            }
        }
    });
</script>

</body>
</html>