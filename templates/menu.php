
<?php require('header.php') ?>

<style type="text/css">
    .comments {
        font-size: 0.8em;
        margin-bottom: 20px;
    }
    .date, .author {
        margin-right: 10px;
    }
    .content {
        padding-top: 5px;
        padding-left: 15px;
    }
    .entry {
        padding-left: 20px;
    }
    h1 {
        margin-bottom: 10px;
    }
    .pages {
        margin-bottom: 20px;
    }
</style>

<?php if (IS_ADMIN): ?>

    Погода в ЗП

<?php endif ?>
</br></br></br>
<?php if (IS_ADMIN): ?>

    <a href="?act=edit-entry">Написать</a></br>
    <a href="?act=list">Прочитать</a>

<?php else: ?>

    <form action="?act=do-login" method="POST" class="well">
        <label>Login</label>
        <input name="login" type="text" />
        <label>Password</label>
        <input name="password" type="password" />
        <div style="padding-top: 10px;">
            <button type="submit" class="btn">
                Login
            </button>
        </div>
    </form>

<?php endif ?>



<?php require('footer.php') ?>