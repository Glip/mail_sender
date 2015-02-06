<?

$odr = "\n\n\n Для отказа от подписки воспользуйтесь ссылкой\n";
$homepage = "http://адрес.сайта/ras.php";

$headers = 'From: westnetltd@gmail.com' . "\r\n" .
    'Reply-To: westnetltd@gmail.com' . "\r\n" .
	'Content-type: text/html; charset=cp1251' . "\r\n";
	
$message = '
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>русский языкin August!</p>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';	
error_reporting(0);
$subject = $HTTP_POST_VARS["subject"];
$body = $HTTP_POST_VARS["body"];
$subject = stripslashes($subject);
$body = stripslashes($body);

$file = "maillist.txt";
$maillist = file($file);

print "В базе". sizeof($maillist) ." адресов<br>";

for ($i = 0; $i < sizeof ($maillist); $i++)
{
#echo($maillist[$i]."<br>");
mail($maillist[$i], 'Тут тема письма',
$message, $headers);
}
echo "Готово!";

?>