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
                <h1 class="page-header">Home page</h1>
                <?php echo $notifications?>
                <form action="<?php echo \LWS\JufThirza\CMS\Url::HOME_PAGE_MANAGE_PAGE?>"
                      class="form-horizontal"
                      method="POST"
                >
                    <div class="form-group">
                        <label for="titel" class="col-sm-2 control-label">Titel</label>
                        <div class="col-sm-10">
                            <input class="form-control"
                                   id="titel"
                                   placeholder="Titel"
                                   name="title"
                                   type="text"
                                   value="<?php echo $title?>"
                            >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="introText" class="col-sm-2 control-label">Intro text</label>
                        <div class="col-sm-10">
                            <textarea class="form-control"
                                      id="introText"
                                      name="text"
                                      placeholder="Intro text"
                                      rows="5"><?php echo $text?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Sla op</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
echo $footer;