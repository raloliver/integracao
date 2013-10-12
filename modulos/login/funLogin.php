<?
	ob_start();
	session_start();

	include "../../lib/config.php";

	echo '<meta charset="utf-8" />';

	if (isset($_GET['op']) AND $_GET['op']=='login') {
		$sql = mysql_query("SELECT * FROM usuarios WHERE email = '".addslashes($_POST['email'])."' AND senha = '".addslashes(md5($_POST['senha']))."'");

		if (mysql_num_rows($sql)==TRUE) {
			while ($row = mysql_fetch_assoc($sql)) {
				$_SESSION['user_id'] = $row['user_id'];
				header("Location: ../../");
			}
		}else{
			echo "Usuário não cadastrado";
		}
	}

	if (isset($_GET['op']) AND $_GET['op']=='sair') {
		unset($_SESSION['user_id']);
		header("Location: ../../");
	}
?>