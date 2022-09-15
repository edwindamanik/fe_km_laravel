<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="title" content="  English Site | Actual News, The latest news around your area - Eglish-site.com">
    <meta http-equiv="cache-control" content="public, no-transform">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="canonical" href="km-fe.herokuapp.com" />
    <link rel="preconnect" href="#" crossorigin="anonymous" /> <!-- CDN LINK IMAGE -->
    <link rel="icon" type="image/png"
        href="https://cdns.klimg.com/newshub.id/fe_setting/2022/05/06/1/favicon-1-1-20220506145515.ico" />
    <meta name="description"
        content="The latest news, Local News, Business Economy, Politic, Sports, Law & Order, Agri Farming, Entertainment, Photo, Video, More">
    <meta name="keywords" content="">
    <meta property="og:site_name" content="km-fe.herokuapp.com">
    <meta property="og:url"
        content="https://hot.liputan6.com/read/4047820/7-monumen-megah-dunia-yang-ternyata-punya-makna-mengejutkan">
    <meta property="og:title" content="7 Monumen Megah Dunia yang Ternyata Punya Makna Mengejutkan">
    <meta property="og:description"
        content="Selain memiliki arti, sebuah monumen pun dibuat untuk mengenang sebuah peristiwa yang terjadi di masa lalu agar orang di kehidupan mendatang tetap ingat akan kejadian masa itu.">
    <meta property="article:modified_time" content="5 Menit Lalu">
    <meta property="og:updated_time" content="5 Menit Lalu">
    {{-- <meta property="fb:app_id" content="256994406083489"> --}}
    <meta property="og:type" content="website">
    <meta property="og:image"
        content="https://cdn1-production-images-kly.akamaized.net/Or4z-FEi94t6TYXDS38xPbF6yf0=/0x18:728x428/640x360/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2893488/original/000334100_1566877237-14980260-EN_01354483_0014-1565834858-728-40d9a7442c-1566455740.jpg">
    <meta name="twitter:site" content="@englishsitedotcom">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@englishsitedotcom">
    <meta name="adx:sections" content="website">
    <meta name="adx:keywords" content="">

    <!-- CDN LINK -->
    <link rel="preconnect" href="https://cdns.klimg.com" crossorigin />
    <link rel="preload"
        href="https://cdns.klimg.com/newshub.id/resized/production/webp/168x34/fe_setting/2022/04/11/1/fe-setting-1-rev3.png"
        as="image" />
    <noscript>
        <link rel="stylesheet"
            href="https://cdns.klimg.com/hyperlocal/static-production/defaultsite/desktop/css/font.6123b78e1a473cc71b9363044a0affa1.css" />
    </noscript>

    <link {{-- -------META DATA ENDED HERE----------- --}}
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/styles.css') }}">
    <title>@yield('title')</title>
</head>

<body>

    <div class="container w-kly">
        @yield('content-field')
    </div>

</body>
@yield('script-slider')

</html>
