<table class="table table-success table-striped table-bordered">
    <thead>

    <tr>
        <th scope="col"><u>Exposition</u></th>
        <th scope="col"><u>Permanent</u></th>
        <th scope="col"><u>Tarif Enfant</u></th>
        <th scope="col"><u>Tarif Adultes</u></th>
        <th scope="col"><u>Active</u></th>

    </tr>
    </thead>
    <?php for ($i=0; $i< count($expo); $i++){?>
    <tbody>
    <tr>
        <th scope="row"><?= $expo[$i]["nom"] ?></th>
        <td><?php if( $expo[$i]["permanent"] == 1){ echo "OUI";} else{echo "NON";} ?></td>
        <td><?= $expo[$i]["tarif_enfant"] ?></td>
        <td><?= $expo[$i]["tarif_adulte"] ?></td>
        <td><?php if( $expo[$i]["active"] == 1){ echo "OUI";} else{echo "NON";} ?></td>
    </tr>
    </tbody>
    <?php } ?>
</table>







