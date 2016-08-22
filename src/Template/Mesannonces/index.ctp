<table class="table">
    <thead>
    <tr>

        <th >Type bien</th>
        <th >Ville</th>
        <th>Code postal</th>
        <th >A vendre</th>
        <th >A louer</th>
        <th >Surface</th>
        <th >Divisible</th>
        <th >Prix</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach($ads as $ad){
    $type = $ad->type_ad;
    $id = $ad->id;
    $town = $ad->town;
    ?>
        <tr>
            <td><?= $type->type_name ?></td>
            <td><?= $town->town_name ?></td>
            <td><?= $town->town_zip_code ?></td>
            <td><?= $ad->for_sale ? 'oui' : 'non'?></td>
            <td><?= $ad->for_rent ? 'oui' : 'non'?></td>
            <td><?= $ad->surface ?> m&sup2;</td>
            <td><?= $ad->is_divisible ? 'oui' : 'non' ?></td>
            <td><?= $ad->price ?> €</td>
            <td><?=$this->Html->link('Editer','/editer/'.$ad->id.'')."  /  ".$this->Html->link('supprimer', ['controller'=>'Offres','action' => 'supprimer',$id])?> </td>

        </tr>
        <?php
    }
    ?>
    </tbody>
</table>


