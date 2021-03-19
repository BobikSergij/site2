<?php include ROOT . '/views/layouts/header.php';?>

<div class="content">
    <h1>Товары</h1>
    <div class="product-box">
        <?php foreach($productList as $product): ?>
            <div class="box">
                <div class="img-inner">
                    <img src="/unpload/images/product/<?php echo $product['id'] ?>.jpg" alt="Cowhide Pillow">
                </div>
                <a href="/index.php/product/detail/<?php echo $product['id'] ?>"><strong> <?php echo $product['name'] ?></strong></a>
                <p><span></span> <?php echo $product['price'] ?> грн.</p>
            </div>
        <?php endforeach; ?>
    </div>


    <div class="list">
        <?php echo $pagination->get(); ?>

<!--        <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>-->
<!--        <a href="#">1</a>-->
<!--        <a href="#">2</a>-->
<!--        <span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>-->
    </div>
</div>

<?php include ROOT . '/views/layouts/fouter.php'; ?>