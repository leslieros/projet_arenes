<?= $this->assign('title', 'Flêche dans le genou');?>
<?php
echo "Il vous reste ".$ap." points d'actions";
echo "<br>";
?>
<div id = "jeu"><?php for ($row = 0; $row < $largeur; $row++) {
    for ($col = 0; $col < $longueur; $col++) {
            echo "<section id=\"arene\"";
        if($mask[$row][$col] == "#"){
            echo "class=\"backgroundSight\">";
            if($arena[$row][$col] == "_")
                echo " ";
            else
                echo $arena[$row][$col];
        }else {
            echo "class=\"backgroundFog\">";
        }
            echo "</section>";
    }
    echo "<div style=\"clear: both\"></div>";
}?></div>
<div id = "bselection" ><?php
echo $this->Form->create();
$options = ['N' => 'North', 'W' => 'West', 'S' => 'South', 'E' => 'East'];
echo $this->Form->select('direction', $options);
echo $this->Form->button('GO!');
echo $this->Form->end();
?></div>
    <div id="evensight">
 <a href="<?php echo $this->Url->build([
                'controller' => 'Arenas',
                'action' => 'diary'
            ]); ?>" class="btn btn-lg btn-primary">JOURNAL DES EVENEMENTS</a>

</div>