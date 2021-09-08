<h1>Configurações</h1>
<?php
// echo '<pre>';
// print_r($this->config);
// Array
// (
//     [site_title] => Site de teste CMS
//     [site_color] => red
//     [site_template] => default
//     [home_banner] => surf.jpg
//     [home_welcome] => Seja bem-vindo
// )

?>
<form action="" method="post">
    Título do site: <br>
    <input type="text" name="site_title" value="<?=$this->config['site_title'];?>"><br><br>

    Texto de boas-vindas: <br>
    <input type="text" name="home_welcome" value="<?=$this->config['home_welcome'];?>"><br><br>

    Template do site: <br>
    <select name="site_template">
        <option value="default" <?=( $this->config['site_template'] == 'default' )?'selected="selected"':'';?>>Padrão</option>
        <option value="exemplo" <?=( $this->config['site_template'] == 'exemplo' )?'selected="selected"':'';?>>Versão de natal</option>
    </select>
    <br><br>


    <input type="submit" value="Salvar">


</form>