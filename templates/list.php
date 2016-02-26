
<?php require('header.php') ?>


<?php if (IS_ADMIN): ?>
<div style="width:700px; color: #777777;margin: auto 15px;" ><h3>Cписок фидбеков</h3></div>
    <?php foreach ($records as $row): ?>

        <div style="width:700px;margin: auto 15px;" >
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><?=$row['author']?></h3></br>
                    <span class="date"><?=$row['date']?></span>
                </div>
                <div class="panel-body">
                    <?=$row['content']?>
                </div>
            </div>
        </div>

<?php endforeach ?>


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