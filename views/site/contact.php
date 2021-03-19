<?php include ROOT. '/views/layouts/header.php'  ?>

<div class="content1">
    <h1>Контакт</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
    <div class="image">
        <img src="/template/Image/contact.jpg" alt="images">
    </div>
    <div class="border"></div>
    <div class="Content-bottom">
        <h2>Связаться</h2>
        <div class="box4">
            <form action="#" method="post">
                <div class="label">
                    <label for="input1"><strong>Имя</strong></label>
                </div>
                <input id="input1" type="text" name="your name" value="Your Name"/>
            </form>
            <form id="form2" action="#" method="post">
                <div class="label">
                    <label for="input2"><strong>Email</strong></label>
                </div>
                <input id="input2" type="text" name="youremail" value="Your@email.com"/>
            </form>
        </div>
        <div class="box2">
            <form action="#" method="post">
                <div class="label">
                    <label for="input3"><strong>Номер телефона</strong></label>
                </div>
                <input id="input3" type="text" name="your name"/>
            </form>
        </div>
        <div class="box3">
            <label for="input4"><strong>Сообщение</strong></label>
            <textarea id="input4" name="comment"></textarea>
            <input type="submit" value="Отправить">
            </form>
        </div>
    </div>
</div>

<?php include ROOT. '/views/layouts/fouter.php'  ?>