<?php
/**
 * @var \LWS\CMS\User[] $users
 * @var string $newUserModal
 * @var string $head
 * @var string $footer
 * @var string $notifications
 * @var string $sideBar
 */
echo $head;
?>
    <div class="container-fluid">
        <div class="row">
            <?php echo $sideBar?>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Gebruikers</h1>
                <?php echo $notifications?>
            </div>
            <div class="col-sm9 col-sm-offset-3 col-md-10 col-md-offset-2">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Gebruiker</th>
                        <th>Acties</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $user) { ?>
                        <tr>
                            <td><?php echo $user->getUserName()?></td>
                            <td>
                                <form action="<?php echo \LWS\CMS\Url::USERS?>" method="GET">
                                    <input type="hidden" name="action" value="del">
                                    <input type="hidden" name="userid" value="<?php echo $user->getUserId()?>">
                                    <button class="btn btn-danger" type="submit">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true">
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#newusermodal">
                    Nieuwe gebruiker
                </button>
            </div>
        </div>
    </div>
<?php
echo $newUserModal;
echo $footer;