<h2>Регистрация</h2>
    <form action="?act=save-user" method="post">
<p>
    <label>Ваш логин:<br></label>
    <input name="login_name" type="text" size="15" maxlength="15" required>
</p>

<p>
    <label>Ваш пароль:<br></label>
    <input name="pass" type="password" size="15" maxlength="15" required>
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
    <input type="submit" name="submit" value="Зарегистрироваться">

</p></form>