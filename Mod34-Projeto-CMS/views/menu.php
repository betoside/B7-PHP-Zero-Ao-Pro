<ul>
    <?php foreach($menu as $menuItem): ?>
    <li><a href="<?=BASE.$menuItem['url'];?>"><?=$menuItem['nome'];?></a></li>
    <?php endforeach ?>
</ul>
