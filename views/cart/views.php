<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="content">

    <h1><strong>Корзина</strong></h1>
    <p class="center"><?php if(isset($str)): echo $str ?> </p>

    <?php else: ?>
    <?php if($products):?>
        <div class="product-box1">
            <p>Товары</p>
            <p id="quantity">Количество</p>
            <p id="right-total">Сумма</p>
        </div>
    <?php  foreach($products as $product): ?>

    <div class="product-box2">
            <div class="box1">
                <a href="#"><?php echo $product['name']; ?></a>
                <div>
                    <a href="/index.php/delete/<?php echo $product['id']; ?>"><span>Удалить</span></a>
                </div>
            </div>
            <div class="box2">
                <img src="/unpload/images/product/<?php echo $product['id']; ?>.jpg" alt="<?php echo $product['name']; ?>">
            </div>

            <div class="box3">
                <form action="#" method="post">

                    <input type="text" value="<?php echo $product['qty']; ?>"/>
                </form>
            </div>

            <div class="box4">
                <p><?php echo $product['price']; ?></p>
            </div>

        </div>
    <?php endforeach; ?>

    <div class="product-box3">
            <div class="total">
                <p><strong>Сумма товаров</strong></p>
                <p><strong>$<?php echo $total; ?></strong></p>
            </div>
            <p>Доставка и скидки рассчитываются при оформлении заказа</p>
            <form action="/index.php/checkout" method="post">

                <input type="submit" name="checkout" class="btn" value="Отправить">
            </form>
        </div>
    </div>
<?php endif; ?>
<?php endif; ?>


<?php include ROOT . '/views/layouts/fouter.php'; ?>
