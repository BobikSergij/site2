<?php include ROOT. '/views/layouts/header.php'  ?>
    <section>
        <div class="content1">
            <div class="Content-bottom">
                <h2>Вход</h2>

                <div class="box5">

                        <?php if(isset($errors) && is_array($errors)): ?>
                            <ul>
                                <?php foreach($errors as $error):  ?>
                                    <li> - <?php echo $error ?> </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        <form action="#" method="post">
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

                </div>
            </div>
        </div>
    </section>
<?php include ROOT. '/views/layouts/fouter.php'  ?>