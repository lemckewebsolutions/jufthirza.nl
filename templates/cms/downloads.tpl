<?php
/**
 * @var string $head
 * @var string $footer
 * @var string $newDownloadModal
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
            <h1 class="page-header">Downloads</h1>
            <?php echo $notifications?>
        </div>
        <div class="col-sm9 col-sm-offset-3 col-md-10 col-md-offset-2">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Titel</th>
                        <th>Category</th>
                        <th>Acties</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#newdownloadmodal">
                Nieuwe download
            </button>
        </div>
    </div>
</div>
<?php
echo $newDownloadModal;
echo $footer;