<?php require('header.php') ?>
<?php if (IS_ADMIN): ?>

    <div style='background-color: #dff0d8; padding: 15px; border-radius: 15px; width: 500px;  margin: 50px auto;' class='bs-callout bs-callout-info' align='center'>
        <h2>Написать сообщение</h2>
        <form action="?act=do-new-entry" method="post">
            <div class="form-group">

                <label>Имя:<br></label>
                <input name="author" type="text" required>

                <label>Ваш e-mail:<br></label>
                <input name="mail" type="email"required>

                <label>Сообщение<br></label>
                <textarea name="content" rows="5"></textarea>

                <h3>Проверчный код</h3>
                <a href="?act=edit-entry"><img src = "captcha.php" /></a>
                <input type = "text" name = "kapcha" /></br></br>
                <input class="btn btn-large btn-success" type="submit" name="submit" value="Отправить">
        </form>
    </div>

<?php endif ?>

<?php require('footer.php') ?>