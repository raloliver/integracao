<h1>Nossos Produtos</h1>
<ul class="unstyled lis_produtos">
    <?
        $sql = mysql_query("SELECT * FROM produtos ORDER BY produto_id DESC");
        if (mysql_num_rows($sql)==TRUE) {
            while ($row = mysql_fetch_assoc($sql)) {
    ?>
    <li>
        <a <?if (isset($_SESSION['user_id'])){?>href="modulos/loja/funLoja.php?op=add&produto_id=<?=$row['produto_id']?>"<?}else{?>href="#login" data-toggle="modal" <? }?> title="<?=$row['titulo']?>">
            <span class="img">
                <img src="<?=URL?>/lib/rdmc.php?src=<?=URL?>/img/loja/<?=$row['imagem']?>&q=160&h=100&w=160" alt="<?=$row['titulo']?>">
            </span>
            <span class="titulo">
                <?=$row['titulo']?>
                <span class="paragraph-end"></span>
            </span>
            <span class="subtitulo">
                <?=$row['subtitulo']?>
                 <span class="paragraph-end"></span>
            </span>
            <span class="preco">
                R$ <?=Real($row['preco'])?>
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