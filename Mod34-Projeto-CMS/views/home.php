<!-- <h1>home</h1> -->
<div class='home-banner' style="background-image: url(<?=BASE;?>assets/images/<?=$this->config['home_banner'];?>);"></div>
<div class="home-welcome">
    <?=$this->config['home_welcome'] ;?>
</div>
<div class="home-depoimentos">
    <h3>Depoimentos</h3>
    
    <?php foreach($depoimentos as $depItem): ?>
        <p>
            <strong><?=$depItem['nome'];?></strong>
            <br>
            <?=$depItem['texto'];?>
            <hr>
        </p>
    <?php endforeach; ?>

</div>
<div class="home-cta">
    Deseja conhecer nossos serviços?
    <a href="<?=BASE.'servicos';?>"><div>Clique aqui, conheça.</div></a>
</div>