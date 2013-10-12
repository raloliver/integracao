<?	
	#PARA LIMPAR POSSIVEIS CACHES DE SESSAO
	ob_start();
	#INICIAR SESSAO
	session_start();
	#CONECTAR BANCO DE DADOS
	include "../../lib/config.php";
	#VERIFICAR PARAMETROS ADICIONADOS AO CARRINHO
	if (isset($_GET['op']) AND $_GET['op']=='add' AND isset($_GET['produto_id'])){
		$sql = mysql_query("SELECT preco FROM produtos WHERE produto_id = '".$_GET['produto_id']."'");
		#VERIFICAR SE A CONSULTA RETORNOU VERDADEIRA
		if (mysql_num_rows($sql)==TRUE) {
			#WHILE PARA ARMAZENAR PREÇO DO PRODUTO EM UMA VARIAVEL
			while ($row = mysql_fetch_assoc($sql)) {
				$preco = $row['preco'];
			}
		}
		#VERIFICAR QUANTIDADE DE PRODUTOS E ALTERAR APENAS A QUANTIDADE SEM ADICIONAR O PRODUTO NOVAMENTE
		#E NECESSARIO VERIFICAR PRIMEIRO SE O PRODUTO ADICIONADO JA EXISTE NO CARRINHO
		$cp = mysql_query("SELECT * FROM carrinho WHERE user_id = '".$_SESSION['user_id']."' AND produto_id =  '".$_GET['produto_id']."'");
		#SE NAO ESTIVER, ADICIONE O MESMO
		if (mysql_num_rows($cp)==FALSE) {				
			#AO IDENTIFICAR O PRECO DO PRODUTO, O MESMO DEVE SER ADICIONADO AO CARRINHO
			mysql_query("INSERT INTO carrinho (user_id, produto_id, quantidade, total) VALUES ('".$_SESSION['user_id']."', '".$_GET['produto_id']."',1,'".$preco."')");
			#METODO PARA AUMENTAR A QUANTIDADE AO ADICIONAR O MESMO ITEM NO CARRINHO			
			}else{
				#ALEM DISSO, PRECISAMOS VERIFICAR A QUANTIDADE DO PRODUTO NO CARRINHO
				while ($row = mysql_fetch_assoc($cp)) {
					#1: VERIFICAR A QUANTIDADE DE ITENS NO CARRINHO
					#2: ADICIONA MAIS 1 AO CLICAR
					#3: MULTIPLA O PRECO PELA QUANTIDADE ATUALIZADA
					$quant = $row['quantidade']+1;
					$total = $preco*$quant;
					#ATUALIZAR QUANTIDADE NO BD DO CARRINHO
					mysql_query("UPDATE carrinho SET quantidade = '".$quant."', total = '".$total."' 
								 WHERE user_id = '".$_SESSION['user_id']."' 
								 AND produto_id = '".$_GET['produto_id']."' ");
				}

			}

			#APOS SELECIONAR O PRODUTO, O CLIENTE DEVE SER REDIRECIONADO PARA A PÁGINA DO CARRINHO
			header("Location: ../../index.php?mod=carrinho");
		}

	if (isset($_GET['op']) AND $_GET['op']=='remove' AND isset($_GET['carrinho_id'])){
		mysql_query("DELETE FROM carrinho WHERE carrinho_id = '".$_GET['carrinho_id']."' AND user_id = '".$_SESSION['user_id']."' ");
		#APOS VERIFICAR SE O USER QUE DESEJA DELETAR O PRODUTO E O MESMO LOGADO, ENTAO VOLTE A PAGINA
			header("Location: ../../index.php?mod=carrinho");
	}

	#GERENCIAR QUANTIDADE DE ITENS POR PRODUTO NO CARRINHO
	if (isset($_GET['op']) AND $_GET['op']=='quant' AND isset($_GET['carrinho_id'])){
	#UTILIZAMOS A QUERY UPDATE POIS VAMOS ALTERAR UM VALOR QUE JA EXISTE		
	#E NECESSARIO MULTIPLAR O PRECO DO PRODUTO PELA QUANTIDADE INFORMADA NO CARRINHO
	#E TAMBEM DEFINIR O LOCAL, ALEM DE SEMPRE VERIFICAR O USER LOGADO
	mysql_query("UPDATE carrinho SET quantidade ='".$_POST['quantidade']."', total = '".$_POST['preco']*$_POST['quantidade']."' 
					 WHERE carrinho_id = '".$_GET['carrinho_id']."' AND user_id = '".$_SESSION['user_id']."'
					");
		#APOS ATUALIZAR A QUANTIDADE, O USUARIO DEVE SER REDIRECIONADO PARA O CARRINHO
		header("Location: ../../index.php?mod=carrinho");
	}
  
  if(isset($_GET['metodo']) and $_GET['metodo']=='pagseguro'){
	  
	 echo "Pagando com Pagseguro";
	 
	 
	 
  }else if(isset($_GET['metodo']) and $_GET['metodo']=='paypal'){
	  
	echo "Pagando com Paypal";
	
  }
?>