<?

$subject = "�������� ����� �����"; // ���� ��������
$fromemail = "taz@hotmail.ru"; // ��� ����� (��� �������)
$file = "maillist.txt"; // ������ ������� �����������
$password = "secretpassword"; // ��� ������ ��� ��������


echo "<font size=\"-1\"><hr><form method=\"POST\" action=\"send.php\">";
echo "����� �����������<br><input type=\"text\" name=\"fromemail\" value=\"$fromemail\" size=\"25\"><br>";
echo "���� ������<br><input type=\"text\" name=\"subject\" value=\"$subject\" size=\"50\">";
echo "<br>����� ������:<br><textarea name=\"body\" rows=\"8\" cols=\"50\"></textarea>";
echo "<br><input type=\"submit\" value=\"��������� ���������\"></form></font>";
print "<i>� ����<b>". sizeof($maillist) ."</b> �������</i><br><hr>";
for ($i = 0; $i < sizeof ($maillist); $i++) print $maillist[$i]. "<br>";

?>