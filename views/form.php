<!DOCTYPE html>
<html>
<head>
    <title>Add contact and lead</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <style type="text/css"><? include "assets/css/main.css" ?></style>
</head>
<body>
<div id="wrapper">
        <h1>Add contact and lead</h1>
    <div id="contact_form">
        <form action="sendAmo" method="post">
            <div class="field">
                <label for="contact_name">Имя</label><input id="contact_name" type="text" name="name" required>
            </div>
            <div class="field">
                <label for="contact_phone">Телефон</label><input id="contact_phone" type="tel" name="phone" required>
            </div>
            <div class="field">
                <label for="contact_email">Почта</label><input id="contact_email" type="email" name="email" required>
            </div>
            <div class="field">
                <label for="contact_comment">Комментарий</label>
                <textarea cols="35" rows="5" id="contact_comment" name="comment"></textarea>
            </div>
            <div>
                <button type="submit">Создать контакт и сделку</button>
                <button type="reset">Очистить форму</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>

