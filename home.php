<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="home.php" method="POST"></form>
  <input type="text" name="firstname" placeholder="Имя" required>
  <input type="text" name="lastname" placeholder="Фамилия" required>
  <input type="text" name="email" placeholder="E-mail" required>
  <input type="text" name="phone" placeholder="Телефон" required>
<p>О себе</p>
  <textarea name="about" id="about" cols="30" rows="10"></textarea>
<p>Пол</p>
  <input type="radio" name="gender" value="male" >
  <input type="radio" name="gender" value="female">
<p>Возраст</p>
  <input type="number" name="age">
<p>Хобби</p>
  <select name="hobby" id="hobby">
    <option value="sport">Спорт</option>
    <option value="photos">Фотографии</option>
    <option value="programming">Программирование</option>
  </select>
  <input type="submit" value="Отправить">
</body>
</html>