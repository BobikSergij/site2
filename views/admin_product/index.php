<?php include ROOT . '/views/layouts/header_admin.php';?>

<div class="content_admin">

<table border="1">
   <tr>
        <th>id</th>
        <th>name</th>
        <th>price (грн)</th>
        <th>code</th>
        <th></th>
        <th></th>

   </tr>
    <?php foreach($products as $product): ?>
    <tr>
        <td><?php echo $product['id'] ?></td>
        <td><?php echo $product['name'] ?></td>
        <td><?php echo $product['price'] ?></td>
        <td><?php echo $product['code'] ?></td>
        <td><a href="/index.php/admin/product/update/<?php echo $product['id'] ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
        <td><a href="/index.php/admin/product/delete/<?php echo $product['id'] ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
    </tr>
    <?php endforeach; ?>
</table>
    <div class="submit" >
        <div>
            <a href="/index.php/admin/create">Добавить товар</a>
        </div>
    </div>
</div>