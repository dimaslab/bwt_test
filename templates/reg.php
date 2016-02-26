<?php require('header.php') ?>

<div style='background-color: #dff0d8; padding: 15px; border-radius: 15px; width: 500px;  margin: 50px auto;' class='bs-callout bs-callout-info' align='center'>
    <h2>Регистрация</h2>
    <form action="?act=save-user" method="post">
<div class="form-group">
    <label>Ваш логин:<br></label>
    <input name="login_name" type="text" required>
</div>

<p>
    <label>Ваш пароль:<br></label>
    <input class="form-control" name="pass" type="password" required>
</p>
<p>
     <label>Имя:<br></label>
     <input name="f_name" type="text" size="15" required>
</p>
<p>
      <label>Фамилия:<br></label>
      <input name="l_name" type="text" size="15" required>
</p>
<p>
     Укажите ваш пол:<br><br>
    <input type="radio" name="sex" value="man" checked="">мужской
    <input type="radio" name="sex" value="woman">женский
    <br><br>
</p>
<p>
      <label>Ваш e-mail:<br></label>
      <input name="mail" type="email" size="15" required>

</p>
<p>
       <label>Дата рождения<br></label>
       <input name="b_date" type="date" size="15">
</p>

<p>
    <input class="btn btn-large btn-success" type="submit" name="submit" value="Зарегистрироваться">

</p></form>
    </div>
<?php require('footer.php') ?>