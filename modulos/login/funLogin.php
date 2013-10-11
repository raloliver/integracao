<?
	ob_start();
	session_start();

	include "../../lib/config.php";

	echo '<meta charset="utf-8" />';

	$sql = mysql_query("SELECT * FROM usuarios WHERE email = '".addslashes($_POST['email'])."' AND senha = '".addslashes(md5($_POST['senha']))."'");

	if (mysql_num_rows($sql)==TRUE) {
		while ($ln = mysql_fetch_assoc($sql)) {
			$_SESSION['user_id'] = $ln['user_id'];
			header("Location: ../../");
		}
	}else{
		echo "Usuário não cadastrado";
	}
?>