<?php require('header.php') ?>
<?php if (IS_ADMIN): ?>
    <h1>Add new entry</h1>

    <form action="?act=do-new-entry" method="POST" class="well">
        <label>Author</label>
        <input name="author" type="text" />
        <label>Header</label>
        <input name="header" type="text" />
        <label>Content</label>
        <textarea name="content"></textarea>
        <div style="padding-top: 10px;">
            <button type="submit" class="btn">
                Post
            </button>
        </div>
    </form>

    <a href="?act=list">Прочитать</a>
<?php endif ?>

<?php require('footer.php') ?>