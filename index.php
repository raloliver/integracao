<?
	ob_start();
	session_start();
	include "lib/config.php";
	include "lib/funReal.php";
	define("URL", "http://".$_SERVER['HTTP_HOST']."/integracao");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>DIY Loja</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header class="topo">
    	<div class="container">
        	<div class="row">
            	<div class="span3">
                	<a href="index.php" class="logo">DIY Loja</a>
                </div>
                <div class="span9">
                	<ul class="unstyled pull-right">
                      	<li class="menu">
                        	<a href="index.php">
                            	<i class="icon-home"></i>
                                <br>
	                    		<span class="tit_menu">Home</span>
                            </a>
                        </li>
                        <li class="menu">
                        	<a href="index.php?mod=login">
                            	<i class="icon-signin"></i>
                                <br>
	                    		<span class="tit_menu">Login</span>
                            </a>
                        </li>
                    	<li class="menu">
                        	<a href="index.php?mod=vendas">
                            	<i class="icon-ok-sign"></i>
                                <br>
	                    		<span class="tit_menu">Pedidos</span>
                            </a>
                        </li>
                        <li class="carrinho">
                        	<i class="icon-shopping-cart"></i> <span class="badge badge-success val_top">2</span>
	                    	<br>
	                    	<span class="tit_menu">Carrinho</span>
                            <div class="itens_carrinho">
	                        	<table width="100%">
	                            	<thead>
	                                	<tr>
		                                	<th colspan="2" align="left">
		                                    	Produto
		                                    </th>
		                                    <th>
		                                    	Quant.
		                                    </th>
		                                    <th>
		                                    	Valor
		                                    </th>
		                                </tr>
	                                </thead>
	                                <tbody>
	                                	
	                                    <tr>
		                                	<td width="90" align="center">
		                                    	<a href="index.php?mod=carrinho">
	                                            	<img src="<?=URL?>/lib/rdmc.php?src=<?=URL?>/img/loja/tenis4.jpg&q=100&h=60&w=60" alt="">
	                                            </a>
		                                    </td>
		                                    <td width="200" align="left">
		                                    	Chuteira Nike Laranja
		                                    </td>
		                                	<td width="30">
		                                    	1
		                                    </td>
		                                	<td width="80">
		                                    	R$ 69,90
		                                    </td>
		                                </tr>
	                                </tbody>
	                                <tfoot>
	                                	<tr>
	                                        <td colspan="4" align="right">TOTAL: R$ 380,00</td>
	                                    </tr>
	                                    <tr>
	                                    	<td colspan="4" align="center">
	                                        	<a href="index.php?mod=carrinho" class="finalizar"><i class="icon-share-alt"></i> Finalizar <span>(Ir para o Carrinho)</span></a>
	                                        </td>
	                                    </tr>
	                                </tfoot>
	                            </table>
	                        </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    
    <main class="conteudo">
    	<div class="container">
        	<div class="row">
            	<div class="span12">
                	<?
                    	include "lisPaginas.php";
					?>
                </div>
            </div>
        </div>
    </main>
    
    <footer class="rodape">
    	<div class="container">
        	<div class="row">
            	<div class="span4"></div>
            	<div class="span4"></div>
	         	<div class="span4 siga">
                	<h1>Siga Nos</h1>
                	<a href=""><i class="icon-facebook-sign"></i></a>
                    <a href=""><i class="icon-twitter-sign"></i></a>
                    <a href=""><i class="icon-google-plus-sign"></i></a>
                    <br>
                    <br>
                    <div id="fb-root"></div>
					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) {return;}
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>
					
					<div class="fb-wrap">
					  
						<div class="fb-like-box" data-href="http://www.facebook.com/fabiogoodoy" data-width="292" data-show-faces="true" data-colorscheme="light" data-stream="false" data-header="false"></div>
                	</div>
            	</div>
            </div>
        </div>
    </footer>
    <script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="js/gmaps.js" type="text/javascript"></script>
    <script src="js/cep.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/site.js"></script>
    <script>
		$(function(){
			wscep({map: 'map1',auto:true});
		})
	</script>
</body>
</html>