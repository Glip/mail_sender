<?
$file = "maillist.txt"; // ����, ���������� ������

error_reporting(0); // ��������� ����� ��������� � ��������� �������

function test_mail($char) // �������, ����������� ���������� ������
{
$flag = false;
if(eregi("^[_\.0-9a-z-]+@([0-9a-z][-0-9a-z\.]+)\.([a-z]{2,3}$)", $char)) $flag = true;
if ($flag) return true;
else return false;
}

$email = trim(strtolower($email)); // �������� �������� �
// ����� ����� �
// ��������� � ������ ��������

function copy_mail($char) // ���������, ���� �� ����� ����� � ����
{
$file = "maillist.txt";
$list = file($file);
for ($i = 0; $i < sizeof ($list); $i++)
if ($char == trim($list[$i])) $flag = true;

if ($flag) return true;
else return false;
}

echo "<center>";

if (is_file($file)) // ����� ��������� ����� ������������� ���������
{
$maillist = file($file);
if (!$email == '') {
if (test_mail($email)) {
if (!copy_mail($email))
{
$maillist[] = "\n$email";
print "E-mail: $email �������� ���� ��������</center>";
}
else print "E-mail: $email ��� ���� � ����</center>";
}
else print "E-mail: $email �� ����������</center>";
}
else print "</center>";
}
else print "�� ������ ���� $file ! ���������� <A HREF=\"mailto:$fromemail\">��������</a> ��� � ������.</center>";
// ������ �� ����� ����� � ������������ �������� � �������
echo "<br><center>����������� �� ��������<form method=\"post\" action=\"ras.php\" enctype=\"multipart/form-data\">";
echo "������� mail:<input type=\"text\" name=\"email\" size=\"30\"><input type=\"submit\" name=\"submit\" value=\"�����������\"></form></center>";

echo "<CENTER><br><br><form method=\"post\" action=\"ras.php\" enctype=\"multipart/form-data\">";
echo "���������� �� ��������<br>������� mail:";
echo "<input type=\"text\" name=\"delmail\" size=\"15\"><input type=\"submit\" name=\"submit\" value=\"����������\"></form></CENTER>";
// ���� ������������ ����� ���������� - ������� �������� �����
$flag = false;
$fw = fopen($file, "w");
for ($i = 0; $i < sizeof ($maillist); $i++)
if (trim(strtolower($delmail)) == trim(strtolower($maillist[$i]))) {
if (!$delmail == '')
{
print "<center>$delmail ������ �� ���� ��������</center>";
$flag = true;
}
}
else fputs($fw, $maillist[$i]); // ��������� ������ � ���� ���
fclose($fw);
if (!$delmail == '')
if (!$flag) print "<center>$delmail �� ������ � ���� ��������</center>";
?>