<?php 

if (isset($_POST['login']) and $_POST['login'] == 'vdo' and isset($_POST['pass']) and md5($_POST['pass']) == '7e1b665cee96b023b4da4ee742d273c0') {
	include('../index.html');
} else {
 ?>
 <form action="#" method="post">
 	<input type="text" name="login">
 	<input type="password" name="pass">
 	<input type="submit">
 </form>
 <?php 
 }
  ?>