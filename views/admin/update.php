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
        <h2>Редактировать товара</h2>

            <div class="box10">
                <?php foreach($product as $product): ?>
                <form action="#" enctype="multipart/form-data" method="post">
                    <div class="label">
                        <label for="input1"><strong>Назва товара</strong></label>
                    </div>
                    <input type="text" name="name" value="<?php echo $product['name']; ?>" id="input1"/>

                    <div class="box2">
                        <div class="label">
                            <label for="input3"><strong>Цена</strong></label>
                        </div>
                        <input  type="text" name="price" value="<?php echo $product['price']; ?>" id="input3"/>
                    </div>

                    <div class="box2">
                        <div class="label">
                            <label for="input3"><strong>Изображение</strong></label>
                        </div>
                        <input  type="file" name="image" value="<?php echo $product['price']; ?>" id="input3"/>
                    </div>

                    <p>Новинка</p>
                    <select name="is_new">
                        <option value="1" <?php if ($product['is_new'] == 1) echo 'selected="selected"'?> >Да</option>
                        <option value="0" <?php if ($product['is_new'] == 0) echo 'selected="selected"'?> >Нет</option>
                    </select>

                    <br/><br/>

                    <p>Рекомендуемые</p>
                    <select name="is_recommended">
                        <option value="1" <?php if ($product['is_recommended'] == 1) echo 'selected="selected"'?> >Да</option>
                        <option value="0" <?php if ($product['is_recommended'] == 0) echo 'selected="selected"'?> >Нет</option>
                    </select>

                    <br/><br/>

                    <p>Статус</p>
                    <select name="status">
                        <option value="1" <?php if ($product['status'] == 1) echo 'selected="selected"'?>>Отображается</option>
                        <option value="0" <?php if ($product['status'] == 0) echo 'selected="selected"'?>>Скрыт</option>
                    </select>

                    <br/><br/>
                    <p>Артикул</p>
                    <input type="text" name="code" placeholder="" value="<?php echo $product['code']; ?>">

                    <div>
                        <label for="input4"><strong>Коментарий</strong></label>
                    </div>
                    <input name="description" value="<?php echo $product['description']; ?>" id="input4">

                    <div class="box3">
                        <input type="submit" name="submit" value="Отправить">
                    </div>
                </form>
                <?php endforeach; ?>
            </div>
            <div class="bottom">
            </div>

    </div>
</div>
</body>
</html>