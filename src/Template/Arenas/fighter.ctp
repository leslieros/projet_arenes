<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <h1>Combattant</h1>

    <?php
    if ($hasFighter) {
        ?>
    <h2>Votre combattant</h2>
        <?php
        pr($combattant);

        if ($mayLevelUp == TRUE) {
            echo "Vous pouvez passer au niveau suivant. Quelle caractéristique souhaitez-vous améliorer ?";
        } else {
            echo "Encore quelques points à gagner !";
        }
        $parametres = array("combattant" => $combattant, "mayLevelUp" => $mayLevelUp);
        //echo $this->element('selection', $parametres);
    }
    
    
    else {//s'il n'y a pas de combattant associé à ce joueur
        ?>
    <h2>Créez votre combattant</h2>
        <?php
        echo $this->Form->create('Fighters');
        echo $this->Form->input('name');
        echo $this->Form->hidden('idform', ['value' => 'creation']);
        echo $this->Form->button('Valider');
        echo $this->Form->end();
        //echo $this->element('creation');
    }
    ?>
</html>