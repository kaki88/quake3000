<table border="1">
    <th>Offre n°</th>
    <th>Type d'offre</th>
    <th>Prix</th>
    <th>Surface</th>
    <th>Code postal</th>
    <th>Ville</th>

    <?php
foreach($ads as $ad){
 $type = $ad->type_ad;
        $town = $ad->town;
echo "<tr><td>$ad->id</td>
        <td>$type->type_name</td>
        <td>$ad->price €</td>
        <td>$ad->surface m²</td>
        <td>$town->town_zip_code</td>
        <td>$town->town_name</td></tr>
        ";
}
?>

    </table>