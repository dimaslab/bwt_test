
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
<?php require('weather.php') ?>
<?php echo $res;?>

</br></br></br>

<a href="?act=edit-entry">Написать</a></br>
<a href="?act=list">Прочитать</a>

<?php else: ?>

<?php require('login.php') ?>
<?php require('reg.php') ?>

<?php endif ?>



<?php require('footer.php') ?>