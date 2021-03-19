<?php include ROOT . '/views/layouts/header.php'; ?>

    <div class="content">
        <div class="content-h1">
            <h1><strong><?php echo $productDetail['name']; ?></strong></h1>
        </div>
        <div class="images">
            <img src="/unpload/images/product/<?php echo $productDetail['id']; ?>.jpg" alt="Картинка1">
            <p><?php echo $productDetail['description']; ?></p>
        </div>
        <div class="images-right">
        </div>
        <div class="pole">
            <form action="/index.php/cart/add" method="post">
                <input type="hidden" name="id" value="<?php echo $productDetail['id']; ?>">
                <label for="quantity"><strong>Количество</strong></label>
                <input type="number" name="quantity" id="quantity" value="1" min="1" max="100"/>
                <button type="submit" name="submit"><span><strong>Добавить в корзину</strong></span></button>
            </form>
            <p><strong>$<?php echo $productDetail['price']; ?></strong></p>
        </div>

<?php include ROOT . '/views/layouts/fouter.php'; ?>