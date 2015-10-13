<?php
/**
 * @var string $categories
 * @var string $head
 * @var string $footer
 * @var string $notifications
 * @var string $sideBar
 * @var string $text
 * @var string $title
 */
echo $head;
?>
<div class="container-fluid">
        <div class="row">
            <?php echo $sideBar?>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Download categorieen</h1>
                <?php echo $notifications?>
            </div>
            <div class="col-sm9 col-sm-offset-3 col-md-10 col-md-offset-2">
                <?php echo $categories?>
            </div>
            <div class="col-sm9 col-sm-offset-3 col-md-10 col-md-offset-2">
                <h2>Nieuwe categorie invoeren</h2>
                <form class="form-inline" method="POST" action="<?php echo \LWS\JufThirza\CMS\Url::DOWNLOAD_CATEGORIES_PAGE?>">
                    <input type="hidden" name="action" value="add">
                    <div class="form-group">
                        <label for="categoryInput">Categorie</label>
                        <input type="text" class="form-control" id="categoryInput" name="category">
                    </div>
                    <button type="submit" class="btn btn-default">Toevoegen</button>
                </form>
            </div>
    </div>
</div>
<?php
echo $footer;
