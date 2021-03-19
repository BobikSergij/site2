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
        <h2>Редактировать заказ</h2>

        <div class="box10">
                <form action="#" enctype="multipart/form-data" method="post">
                    <div class="label">
                        <label for="input1"><strong>Имя клиента</strong></label>
                    </div>
                    <input type="text" name="name" value="<?php echo $product['name']; ?>" id="input1"/>

                    <div class="box2">
                        <div class="label">
                            <label for="input3"><strong>Телефон клиента</strong></label>
                        </div>
                        <input  type="text" name="phone" value="<?php echo $product['phone']; ?>" id="input3"/>
                    </div>

                    <br/><br/>

                    <p>Статус</p>
                    <select name="status">
                        <option value="1" <?php if ($product['status'] == 1) echo 'selected="selected"'?>>Новый заказ</option>
                        <option value="2" <?php if ($product['status'] == 2) echo 'selected="selected"'?>>В обробке</option>
                        <option value="3" <?php if ($product['status'] == 3) echo 'selected="selected"'?>>Доставляеться</option>
                        <option value="4" <?php if ($product['status'] == 4) echo 'selected="selected"'?>>Закрыт</option>
                    </select>
                    <div class="box3">
                        <input type="submit" name="submit" value="Отправить">
                    </div>
                </form>
        </div>
        <div class="bottom">
        </div>

    </div>
</div>
</body>
</html>