<?php include ROOT . '/views/layouts/header_admin.php';?>

<div class="content_admin">
    <div>
         <p> ID заказа: <?php echo $product['id'] ?></p>
         <p> Имя заказчика : <?php echo $product['name'] ?></p>
         <p> Номер телефона заказчика: <?php echo $product['phone'] ?></p>
         <p> Коментарий к заказу : <?php echo $product['comment'] ?></p>
         <p> ID пользователя : <?php echo $product['user_id'] ?></p>
         <p> Статус : <?php echo Order::getTextStatus($status) ?> </p>
         <p> Общее количество товаров : <?php foreach($productQuantity as $qty) ?>
            <?php echo $qty['qty']; ?></p>
    </div>

        <table border="1">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>price (грн)</th>
                <th>code</th>
            </tr>
            <?php foreach($products as $product): ?>
                <tr>
                    <td><?php echo $product['id'] ?></td>
                    <td><?php echo $product['name'] ?></td>
                    <td><?php echo $product['price'] ?></td>
                    <td><?php echo $product['code'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

</div>