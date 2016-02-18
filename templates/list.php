
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

    <?php foreach ($records as $row): ?>

        <div class="entry">
            <h3>
                <a href="?act=view-entry&id=<?=$row['id']?>"><?=$row['header']?></a>
                <?php if (IS_ADMIN): ?>
                    <a href="?act=delete-entry&id=<?=$row['id']?>"><i class="icon-trash"></i></a>
                <?php endif ?>
            </h3>
            <p class="content"><?=$row['content']?></p>
            <div class="comments">
                <span class="date"><?=$row['date']?></span>
                <span class="author"><?=$row['author']?></span>
                <a href="?act=view-entry&id=<?=$row['id']?>"><?=$row['comments']?> comment(s)</a>
            </div>
        </div>
<?php endforeach ?>

    <a href="?act=edit-entry">Обратная связь</a>

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



<?php if (IS_ADMIN): ?>




<?php endif ?>

<?php require('footer.php') ?>