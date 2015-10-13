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
            <td>
                <form action="<?php echo \LWS\JufThirza\CMS\Url::DOWNLOAD_CATEGORIES_PAGE?>"
                      id="del<?php echo $categoryId?>"
                      method="POST">
                    <input type="hidden" name="action" value="del">
                    <input type="hidden" name="categoryid" value="<?php echo $categoryId?>">
                    <button class="btn btn-danger" type="submit" form="del<?php echo $categoryId?>">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true">
                    </button>
                </form>
            </td>
        </tr>
<?php } ?>
    </tbody>
</table>
