<?php include ROOT. '/views/layouts/header.php'  ?>
<section>
    <div class="content1">
        <div class="Content-bottom">
            <h2>Регистрация</h2>

            <div class="box5">
                <?php if ($result): ?>
                    <p>Вы зарегестрированы!</p>
                <?php else: ?>
                <?php if(isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach($errors as $error):  ?>
                            <li> - <?php echo $error ?> </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <form action="#" method="post">
                    <div class="label">
                        <label for="input1"><strong>Имя</strong></label>
                    </div>
                    <input type="text" name="name" id="input1" value=""/>
                    <div id="form2">
                        <div class="label">
                            <label for="input2"><strong>Email</strong></label>
                        </div>
                        <input type="text" name="email" id="input2" value=""/>
                    </div>
                    <div class="label">
                        <label for="input3"><strong>Пароль</strong></label>
                    </div>

                    <input  type="text" name="password" id="input3" value=""/>
                    <div>
                       <input type="submit" name="submit" value="Отправить">
                    </div>
                </form>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
<?php include ROOT. '/views/layouts/fouter.php'  ?>