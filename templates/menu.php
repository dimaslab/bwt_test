
<?php require('header.php') ?>


<?php if (IS_ADMIN):

    require('weather.php');
    echo "</br></br></br><a href='?act=edit-entry'>Написать</a></br><a href='?act=list'>Прочитать</a>";

else:
    echo "<div style='background-color: #dff0d8; padding: 15px; border-radius: 15px; width: 500px;  margin: 150px auto;' class='bs-callout bs-callout-info' align='center'><h1>Hello!</h1><p class='lead'>Информация доступна только авторизированным пользователям.</p><a class='btn btn-large btn-success' href='?act=reg'>Зарегистрироватся</a></div></p>";

endif;
?>

<?php require('footer.php') ?>