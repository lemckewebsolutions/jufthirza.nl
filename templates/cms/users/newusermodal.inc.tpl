<div id="newusermodal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Nieuwe gebruiker</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo \LWS\JufThirza\CMS\Url::USERS?>"
                      method="POST"
                >
                    <div class="form-group">
                        <label for="usernameInput">Naam</label>
                        <input type="text" class="form-control" id="usernameInput" placeholder="Gebruikersnaam" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="passwordInput">Wachtwoord</label>
                        <input type="password" class="form-control" id="passwordInput" placeholder="Wachtwoord" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Verstuur</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>