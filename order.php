<?php
	if (isset($_POST['create'])) {
		include "head.php";
		include "connect.php";

		$name = $_POST['name'];
		$email = $_POST['email'];
		$telefon = $_POST['telefon'];
		$message = $_POST['message'];
		$s_id = $_POST['s_id'] === "0" ? 'NULL' : $_POST['s_id'];
		$query = "INSERT INTO otzivi VALUES (NULL, '$name', '$email', '$telefon', '$message', $s_id)";
		mysql_query($query);
		echo "
<div class='container py-5'>
    <h2>Успешно отправлено</h2>
</div>";
		include "footer.php";
	} else {
		echo '
<form action="/order.php" method="post" style="display: flex; flex-direction: column">
    <label>Имя</label>
    <input type="text" class="form-control mb-2" name="name" required>
    <label>E-Mail</label>
    <input type="email" class="form-control mb-2" name="email">
    <label>Телефон</label>
    <input type="text" class="form-control mb-2" name="telefon" required>
    <label>Сообщение</label>
    <textarea name="message" cols="30" rows="10" class="form-control mb-2"></textarea>
    <label>Выбираете страховку?</label>
    <select name="s_id" class="form-control mb-2">
        <option value="0">Выберете...</option>
        <option value="1">Каско</option>
        <option value="2">Осаго</option>
        <option value="3">Путешествие заграницу</option>
    </select>
    <button class="btn btn-info btn-lg" type="submit">Отправить</button>
</form>';
	}
?>