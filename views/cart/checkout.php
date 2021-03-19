<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>checkouts</title>
    <link href="/template/CSSfyle/style-box.css" type="text/css" rel="stylesheet" />
    <link href="/template/CSSfyle/checkouts-style.css" type="text/css" rel="stylesheet" />
    <link href="/template/CSSfyle/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
</head>
<div class="content">
    <div class="left">
        <h2>Оформить заказ</h2>
        <?php if ($result): ?>
            <p id="checkout">Заказ оформлен! Мы с вами свяжемся.</p>
            <a href="/index.php" ><p id="checkout">На главную</p></a>

        <?php else: ?>
        <?php if (!$result): ?>
            <?php if(isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach($errors as $error):  ?>
                    <li> - <?php echo $error ?> </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
            <?php endif; ?>



            <p>Выбрано товаров <?php echo $countProduct; ?> ,на сумму: <?php echo $priceTotal; ?> грн.</p>
            <p>Для оформления заказа заполните форму и менеджер свяжеться с вами:</p>
        <div class="box">
            <form action="#" method="post">
                <div class="label">
                    <label for="input1"><strong>Имя</strong></label>
                </div>
                <input type="text" name="name" value="<?php if(isset($user)) echo $user['name']; ?>" id="input1"/>

                <div class="box2">
                <div class="label">
                    <label for="input3"><strong>Номер телефона</strong></label>
                </div>
                <input  type="text" name="phone" id="input3"/>

                </div>
                <div class="box3">
                <div>
                    <label for="input4"><strong>Коментарий</strong></label>
                </div>
                <textarea name="comment" id="input4"></textarea>
                <input type="submit" name="submit" value="Отправить">
                </div>
            </form>
        </div>
        <div class="bottom">
        </div>
        <?php endif; ?>

    </div>
</div>
</body>
</html>