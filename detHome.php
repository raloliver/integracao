<h1>Nossos Produtos</h1>
<ul class="unstyled lis_produtos">
    <?
        $sql = mysql_query("SELECT * FROM produtos ORDER BY produto_id DESC");
        if (mysql_num_rows($sql)==TRUE) {
            while ($ln = mysql_fetch_assoc($sql)) {
    ?>
    <li>
        <a href="index.php?mod=carrinho" title="<?=$ln['titulo']?>">
            <span class="img">
                <img src="<?=URL?>/lib/rdmc.php?src=<?=URL?>/img/loja/<?=$ln['imagem']?>&q=160&h=100&w=160" alt="<?=$ln['titulo']?>">
            </span>
            <span class="titulo">
                <?=$ln['titulo']?>
                <span class="paragraph-end"></span>
            </span>
            <span class="subtitulo">
                <?=$ln['subtitulo']?>
                 <span class="paragraph-end"></span>
            </span>
            <span class="preco">
                R$ <?=Real($ln['preco'])?>
            </span>
            <span class="comprar">
                <i class="icon-shopping-cart"></i> Comprar
            </span>
        </a>
    </li>  
    <?
                }
        }
    ?>  
</ul>