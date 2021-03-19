<?php include ROOT . '/views/layouts/header_admin.php';?>

<div class="content_admin">

    <table border="1">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>phone</th>
            <th>comment</th>
            <th></th>
            <th></th>
            <th></th>

        </tr>
        <?php foreach($products as $product): ?>
            <tr>
                <td><?php echo $product['id'] ?></td>
                <td><?php echo $product['name'] ?></td>
                <td><?php echo $product['phone'] ?></td>
                <td><?php echo $product['comment'] ?></td>
                <td><a href="/index.php/admin/order/view/<?php echo $product['id'] ?>" title="Просмотреть">
                        <i class="fa fa-eye" aria-hidden="true"></i></a></td>
                <td><a href="/index.php/admin/order/update/<?php echo $product['id'] ?>" title="Редактировать">
                        <i class="fa fa-pencil-square-o"></i></a></td>
                <td><a href="/index.php/admin/order/delete/<?php echo $product['id'] ?>" title="Удалить">
                        <i class="fa fa-times"></i></a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>