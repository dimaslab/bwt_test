<?php require('header.php') ?>

<?php
$mysqli = new mysqli('localhost', 'root', '') or die('Cannot connect to database');
$mysqli->select_db('blog') or die('Cannot find database');
$mysqli->set_charset('utf8');
mb_internal_encoding('UTF-8');

if (isset($_POST['login_name'])) { $login = $_POST['login_name']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['pass'])) { $password=$_POST['pass']; if ($password =='') { unset($password);} }
//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}
$login = $_POST['login_name'];
$pass = $_POST['pass'];
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$mail = $_POST['mail'];
$sex = $_POST['sex'];
$b_date = $_POST['b_date'];

//если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$login = stripslashes($login);
$pass = htmlspecialchars($pass);
$f_name = stripslashes($f_name);
$l_name = htmlspecialchars($l_name);
$mail = stripslashes($mail);
//удаляем лишние пробелы
$login = trim($login);
$pass = trim($pass);
$f_name = trim($f_name);
$l_name = trim($l_name);
$mail = trim($mail);

$pass = md5($pass);

$result = $mysqli->query("SELECT id FROM users WHERE login_name = '$login'")->fetch_assoc();
if (!empty($result['id'])) {
    exit ("<div style='background-color: #dff0d8; padding: 15px; border-radius: 15px; width: 500px;  margin: 150px auto;' class='bs-callout bs-callout-info' align='center'><p class='lead'>Извините, введённый вами логин уже зарегистрирован. Введите другой логин.</p><a class='btn btn-large btn-success' href='?act=reg'>Регистрация</a></div></p>");
}

$stmt = $mysqli->prepare("INSERT INTO users(login_name,pass,f_name,l_name,sex,mail,b_date) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param('sssssss', $login, $pass, $f_name, $l_name, $sex, $mail, $b_date);
$stmt->execute();

echo "<div style='background-color: #dff0d8; padding: 15px; border-radius: 15px; width: 500px;  margin: 150px auto;' class='bs-callout bs-callout-info' align='center'><h1>Вы успешно зарегистрированы!</h1><p class='lead'>Теперь вы можете зайти на сайт.</p><a class='btn btn-large btn-success' href='?'>Главная страница</a></div></p>";

/* закрываем подключение */
$mysqli->close();
?>


<?php require('footer.php') ?>