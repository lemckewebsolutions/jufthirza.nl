<table class="table table-striped">
    <thead>
        <tr>
            <th>Categorie</th>
            <th>Acties</th>
        </tr>
    </thead>
    <tbody>
<?php
    foreach ($categories as $categoryId => $category) {
?>
        <tr>
            <td><?php echo $category?></td>
            <td></td>
        </tr>
<?php } ?>
    </tbody>
</table>
