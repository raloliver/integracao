<h1>Carrinho de Compras</h1>
<table width="100%" class="table lis_carrinho">
	<thead>
    	<tr>
        	<th colspan="2">
	        <div class="text-left">
            	Produto
	        </div>
            </th>
	    	<th width="100">
		        <div class="text-center">
	            	Quantidade
		        </div>
            </th>
	    	<th width="100">
		        <div class="text-center">
	            	Valor
	            </div>
	        </th>
            <th width="100">
		        <div class="text-center">
	            	Remover
	            </div>
	        </th>
        </tr>
    </thead>
    <tbody>
    	<tr>
        	<td width="160">
            	<div class="text-center">
                	<a href="">
	                    <img src="<?=URL?>/lib/rdmc.php?src=<?=URL?>/img/loja/tenis2.jpg&q=100&h=120&w=120" alt="">
	                </a>
                </div>
            </td>
        	<td>
            	<div class="text-left">
                	Titulo Produto
                </div>
            </td>
        	<td align="center">
	            <div class="text-center">
	            	1
	            </div>
            </td>
        	<td align="center">
            	<div class="text-center">
            		R$ 29,90
                </div>
            </td>
            <td align="center">
            	<div class="text-center">
                	<a href=""><i class="icon-remove"></i></a>
                </div>
            </td>
        </tr>
        <tr>
            <td width="160">
                <div class="text-center">
                    <a href="">
                        <img src="<?=URL?>/lib/rdmc.php?src=<?=URL?>/img/loja/tenis4.jpg&q=100&h=120&w=120" alt="">
                    </a>
                </div>
            </td>
            <td>
                <div class="text-left">
                    Titulo Produto
                </div>
            </td>
            <td align="center">
                <div class="text-center">
                    1
                </div>
            </td>
            <td align="center">
                <div class="text-center">
                    R$ 29,90
                </div>
            </td>
            <td align="center">
                <div class="text-center">
                    <a href=""><i class="icon-remove"></i></a>
                </div>
            </td>
        </tr>
    </tbody>
    <tfoot>
    	<tr>
        	<td colspan="5" class="total">
            	<div class="text-right total">
                	TOTAL: R$ 309,90
                </div>
            </td>
        </tr>
        <tr>
        	<td colspan="2">
            	<a href="index.php" class="finalizar"><i class="icon-chevron-left"></i> Continuar Comprando</a>
            </td>
            <td colspan="3">
                <a href="#carrinho" class="concluir pull-right accordion-toggle" data-toggle="collapse" data-parent="#accordion"><i class="icon-ok"></i> Concluir Pedido</a>
            </td>
        </tr>
    </tfoot>
</table>

<div class="accordion dados" id="accordion">
    <div id="carrinho" class="accordion-body collapse <? if(isset($_GET['metodo'])){?>in<? }?>">
      <div class="accordion-inner">
        <h1><span class="badge badge-success val_top">1</span> Primeiro passo</h1>
        <h2>Escolha abaixo a forma de Pagamento!</h2>
        <br />
        <div class="row">
            <div class="span4">
                <a href="index.php?mod=carrinho&metodo=paypal#finalizar" class="pague">Pague com <br /> <span class="paypal"></span></a>
            </div>
            <div class="span4">
                <a href="index.php?mod=carrinho&metodo=pagseguro#finalizar" class="pague">Pague com <br /> <span class="pagseguro"></span></a>
            </div>
        </div>
        <? if(isset($_GET['metodo'])){ ?>
        <div class="row" id="finalizar">
            <div class="span5 form">
                <h1><span class="badge badge-success val_top">2</span> Segundo passo</h1>
                <h2>Preencha seus dados para entrega!</h2>
                <?
                	if($_GET['metodo']=='paypal'){
				?>
	                <form name="pedido" method="post" action="modulos/loja/funLoja.php?metodo=paypal">
		                <label for="email">E-mail</label>
		                <input type="email" name="email" id="email" class="input-xlarge" required />
		                <label for="nome">Nome</label>
		                <input type="text" name="nome" id="nome" class="input-xlarge" required />
		                <label for="cep">CEP:</label>
		                <input type="text" name="cep" id="cep" pattern="[0-9]{5}[\-]?[0-9]{3}" class="input-small" required />
		                <label for="rua">Endereço:</label>
		                <input type="text" name="rua" id="rua" class="input-xlarge" required />
		                <label for="num">Número:</label>
		                <input type="text" name="num" id="num" class="input-small" />
		                <label for="comp">Complemento:</label>
		                <input type="text" name="comp" id="comp" class="input-xlarge" />
		                <label for="bairro">Bairro:</label>
		                <input type="text" name="bairro" id="bairro" class="input-xlarge" required />
		                <label for="cidade">Cidade:</label>
		                <input type="text" name="cidade" id="cidade" class="input-xlarge" required />
		                <label for="uf">Estado:</label>
		                <input type="text" name="uf" id="uf" class="input-mini" maxlength="2" required />
                        <button type="submit" class="pague"><i class="icon-ok"></i> Finalizar Compra</button>
	                </form>
                <? }elseif($_GET['metodo']=='pagseguro'){ ?>
                	<form name="pedido" method="post" action="modulos/loja/funLoja.php?metodo=pagseguro">
		                <label for="email">E-mail</label>
		                <input type="email" name="email" id="email" class="input-xlarge" required />
		                <label for="nome">Nome</label>
		                <input type="text" name="nome" id="nome" class="input-xlarge" required />
		                <label for="cep">CEP:</label>
		                <input type="text" name="cep" id="cep" pattern="[0-9]{5}[\-]?[0-9]{3}" class="input-small" required />
		                <label for="rua">Endereço:</label>
		                <input type="text" name="rua" id="rua" class="input-xlarge" required />
		                <label for="num">Número:</label>
		                <input type="text" name="num" id="num" class="input-small" />
		                <label for="comp">Complemento:</label>
		                <input type="text" name="comp" id="comp" class="input-xlarge" />
		                <label for="bairro">Bairro:</label>
		                <input type="text" name="bairro" id="bairro" class="input-xlarge" required />
		                <label for="cidade">Cidade:</label>
		                <input type="text" name="cidade" id="cidade" class="input-xlarge" required />
		                <label for="uf">Estado:</label>
		                <input type="text" name="uf" id="uf" class="input-mini" maxlength="2" required />
                        <button type="submit" class="pague"><i class="icon-ok"></i> Finalizar Compra</button>
	                </form>
                <? } ?>
            </div>
            <div class="span6">
	            <br />
	            <br />
	            <br />
            	<h1><i class="icon-usd"></i> Formas de Pagamento</h1>
                <img src="img/outras/formas.png" alt="Formas de pagamento Paypal e Pagseguro" />
                <br />
                <br />
                <h1><i class="icon-map-marker"></i> Sua localização</h1>
                <div class="map" id="map1"></div>
            </div>
        </div>
        <? } ?>
      </div>
    </div>
</div>