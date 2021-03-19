<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Wildfire</title>
    <link href="<?php echo URL::getHeaderUrl(); ?>/template/CSSfyle/style.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo URL::getHeaderUrl(); ?>/template/CSSfyle/style-box.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo URL::getHeaderUrl(); ?>/template/CSSfyle/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo URL::getHeaderUrl(); ?>/template/CSSfyle/product-style.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo URL::getHeaderUrl(); ?>/template/CSSfyle/Contact-style.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo URL::getHeaderUrl(); ?>/template/CSSfyle/checkouts-style.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo URL::getHeaderUrl(); ?>/template/CSSfyle/Cart-style.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo URL::getHeaderUrl(); ?>/template/owlCarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo URL::getHeaderUrl(); ?>/template/owlCarousel/assets/owl.theme.default.min.css">
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="aria" class="box">
            <a href="/index.php/login"><strong>Вход</strong><i class="fa fa-user-o" aria-hidden="true"></i></a>
            <a href="/index.php/logout"><i class="fa fa-unlock"></i><strong>Выход</strong></a>
            <a href="/index.php/register"><strong>Регистрация</strong></a>
        </div>
        <div class="logo" class="box">
            <a href="/index.php"><img src="/template/Image/logo.png" alt="Логотип"></a>
        </div>
        <div class="cart" class="box">
            <a href="/index.php/cart"><i class="fa fa-shopping-cart" aria-hidden="true">
                    <strong>Корзина(<?php echo Cart::countItems(); ?>)</strong></i></a>
        </div>
    </header>
    <div class="menu">
        <div class="menu-1">
            <ul>
                <li class="item"><a href="#">Коллекции</a>
                    <ul>
                        <li><a href="#">Аксессуары</a></li>
                        <li><a href="#">Настройки</a></li>
                    </ul>
                </li>
                <li><a href="/index.php/product/index">Товари</a></li>
                <li><a href="#">Блог</a></li>
                <li><a href="/index.php/contact">Контакт</a></li>
            </ul>
        </div>
    </div>