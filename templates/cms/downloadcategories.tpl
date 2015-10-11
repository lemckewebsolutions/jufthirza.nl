<?php
/**
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
    </div>
</div>
<?php
echo $footer;
