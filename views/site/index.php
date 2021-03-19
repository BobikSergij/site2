<?php

include ROOT . '/views/layouts/header.php';

?>

<div class="content">
    <div class="content-h1">
        <h1><strong><?php echo $product['name']; ?></strong></h1>
    </div>
    <div class="images">
        <img src="/unpload/images/product/<?php echo $product['id']; ?>.jpg" alt="Картинка1">
        <p><?php echo $product['description']; ?></p>
    </div>
    <div class="images-right">

    </div>
    <div class="pole">
        <form action="/index.php/cart/add" method="post">
            <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
            <label for="quantity"><strong>Количество</strong></label>
            <input type="number" name="quantity" id="quantity" value="1" min="1" max="100"/>
            <button type="submit" name="submit"><span><strong>Добавить в корзину</strong></span></button>
        </form>
        <p><strong><?php echo $product['price']; ?></strong></p>
    </div>
    <div class="icon">
        <div id="icon">
            <div class="facebook">
                <i class="fa fa-facebook" aria-hidden="true"><span>Facebook</span></i>
            </div>
            <div class="twitter">
                <i class="fa fa-twitter" aria-hidden="true"><span>Tweeter</span></i>
            </div>
            <div class="pinterest">
                <i class="fa fa-pinterest" aria-hidden="true"><span>Pinterest</span></i>
            </div>
        </div>
    </div>
    <div class="content-bottom" >
        <h2>Рекомендации</h2>
        <div class="owl-carousel owl-theme">
        <?php foreach($recommended as $producte): ?>
        <div class="images-1">
            <a href="/index.php/product/detail/<?php echo $producte['id'] ?>">
                <img src="/unpload/images/product/<?php echo $producte['id']; ?>.jpg" alt="Картинка 1">
                <h3><?php echo $producte['name']; ?></h3>
                <p><?php echo $producte['price']; ?> грн.</p>
            </a>
        </div>
        <?php endforeach; ?>
        </div>

    </div>
</div>

<?php

include ROOT . '/views/layouts/fouter.php';

?>