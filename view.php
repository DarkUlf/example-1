<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="/images/favicon.png?1">

    <meta name="viewport" content="width=device-width">

    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/plugins/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
    <link href="/css/base.css" type="text/css" rel="stylesheet">
    <link href="/css/style.css" type="text/css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="http://phpbbex.com/oldies/oldies.js" charset="utf-8"></script>
    <![endif]-->

    <title><?= config('title') ?></title>
</head>

<body class="animate">

<div id="transparent-layout" style="opacity: 0">
    <?php
    require_once '_page.php';
    require_once '_widgets.php';
    ?>
</div>

<div id="pelican">
    <div class="container">
        <a href="http://pelican.bz/">Разработано компанией "Pelican"</a>
    </div>
</div>

<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/plugins.js"></script>
<script type="text/javascript" src="/plugins/swiper/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/plugins/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="/js/script.js"></script>

</body>
</html>