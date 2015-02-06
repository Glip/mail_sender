<?

$subject = "Рассылка моего сайта"; // тема рассылки
$fromemail = "taz@hotmail.ru"; // ваш адрес (для ответов)
$file = "maillist.txt"; // список адресов подписчиков
$password = "secretpassword"; // ваш пароль для рассылки


echo "<font size=\"-1\"><hr><form method=\"POST\" action=\"send.php\">";
echo "адрес отправителя<br><input type=\"text\" name=\"fromemail\" value=\"$fromemail\" size=\"25\"><br>";
echo "тема письма<br><input type=\"text\" name=\"subject\" value=\"$subject\" size=\"50\">";
echo "<br>текст письма:<br><textarea name=\"body\" rows=\"8\" cols=\"50\"></textarea>";
echo "<br><input type=\"submit\" value=\"Отправить сообщение\"></form></font>";
print "<i>В базе<b>". sizeof($maillist) ."</b> адресов</i><br><hr>";
for ($i = 0; $i < sizeof ($maillist); $i++) print $maillist[$i]. "<br>";

?>