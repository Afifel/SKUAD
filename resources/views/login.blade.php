<?php
 
$server = "localhost" ;
 
$username = "root" ;
 
$password = "" ;
 
$database = "simp";
 
//Koneksi dan memilih database di server
 
mysql_connect($server,$username,$password) or die ("Koneksi database gagal");
 
mysql_select_db($database) or die ("Database tidak tersedia");
 
error_reporting(0);
 
include "koneksi/koneksi.php";
 
function antiinjection($data){
 
$filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
 
return $filter_sql;
 
}
 
&nbsp;
 
$username = antiinjection($_POST[username]);
 
$pass     = antiinjection(md5($_POST[password]));
 
&nbsp;
 
$login = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$pass'");
 
$ketemu= mysql_num_rows($login);
 
$r = mysql_fetch_array($login);
 
&nbsp;
 
// Apabila username dan password ditemukan
 
if ($ketemu > 0){
 
session_start();
 
session_register("username");
 
session_register("password");
 
$_SESSION[Username]     = $r[username];
 
$_SESSION[Password]     = $r[password];
 
header('location: master.php?module=home');
 
}
 
else{
 
echo "$pass";
 
echo "<link href=../css/login.css rel=stylesheet type=text/css>";
 
echo "<center>LOGIN GAGAL! <br>
 
Username atau Password Anda tidak benar.<br>";
 
echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
 
}
 
?>