<?php

return array(
    'admin/product/delete/([0-9]+)'=>'adminProduct/delete/$1',
    'admin/product/update/([0-9]+)'=>'adminProduct/update/$1',
    'admin/order/delete/([0-9]+)'=>'adminOrder/delete/$1',
    'admin/order/update/([0-9]+)'=>'adminOrder/update/$1',
    'admin/order/view/([0-9]+)'=>'adminOrder/view/$1',
    'admin/create'=>'adminProduct/create',
    'admin/product'=>'adminProduct/index',
    'admin/order'=>'adminOrder/index',
    'admin'=>'admin/index',

    'product/index'=>'product/index',

    'cart/add'=>'cart/add',

    'delete/([0-9]+)'=>'cart/delete/$1',

    'product/detail/([0-9]+)'=>'product/detail/$1',

    'cart'=>'cart/index',

    'checkout'=>'cart/checkout',

    'logout'=>'user/logout',

    'login'=>'user/login',

    'register'=>'user/register',

    'contact'=>'site/contact',

    ''=>'site/index/1'

);