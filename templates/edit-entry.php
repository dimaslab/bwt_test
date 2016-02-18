<?php require('header.php') ?>

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

<?php require('footer.php') ?>