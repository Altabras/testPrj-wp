<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/all.css">

    <?php wp_head();?>
</head>
<body>

<header class="header">
    <div class="container">
        <div class="header-top">
            <div class="header_logo">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/modus_logo.svg" alt=""></a>
            </div>
            <ul class="nav_list_top">
                <li class="nav_item_top">
                    <div class="nav_info_header">
                        <div class="info_header">
                            <div class="icon-location"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons8-маркер-24.png" alt=""></div>
                            <span class="nav_info_city">Киев,</span>
                            <span class="nav_info_city_grey">Офис</span>
                            <div class="nav_info_number"><a href="">(044) 492-91-91</a></div>
                        </div>
                    </div>
                </li>
                <li class="nav_item_top">
                    <div class="nav_info_header">
                        <div class="info_header">
                            <div class="icon-location"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons8-маркер-24.png" alt=""></div>
                            <span class="nav_info_city">Киев,</span>
                            <span class="nav_info_city_grey">Салон</span>
                            <div class="nav_info_number"><a href="">(044) 492-91-91</a></div>
                        </div>
                    </div>
                </li>
                <li class="nav_item_top">
                    <div class="nav_info_header">
                        <div class="info_header">
                            <div class="icon-location"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons8-маркер-24.png" alt=""></div>
                            <span class="nav_info_city">Харьков,</span>
                            <span class="nav_info_city_grey">Салон</span>
                            <div class="nav_info_number"><a href="">(044) 492-91-91</a></div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="search_icon"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group%20160.svg" alt=""></a></div>
        </div>
    </div>


    <div class="header-down">
        <div class="container nav_block">
            <ul class="nav_list_down">
                <a href="">
                    <li class="nav_item_down">Продукция</li>
                </a>
                <a href="">
                    <li class="nav_item_down">Покупателю</li>
                </a>
                <a href="">
                    <li class="nav_item_down">Про нас</li>
                </a>
                <a href="">
                    <li class="nav_item_down">Новости</li>
                </a>
                <a href="">
                    <li class="nav_item_down">Контакты</li>
                </a>
            </ul>

            <div class="message_icon">
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/inst.svg" alt=""></a>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt=""></a>
            </div>
        </div>
    </div>

</header>
