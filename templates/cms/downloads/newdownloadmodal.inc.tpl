<?php
/**
 * @var string $appKey
 */
?>
<script type="text/javascript"
        src="https://www.dropbox.com/static/api/2/dropins.js"
        id="dropboxjs"
        data-app-key="<?php echo $appKey?>"></script>
<div id="newdownloadmodal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Nieuwe download</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo \LWS\JufThirza\CMS\Url::DOWNLOADS_PAGE?>">
                    <div class="form-group" id="downloadForm">
                        <label for="exampleInputEmail1">Titel</label>
                        <input type="text" class="form-control" id="titleInput" name="title">
                    </div>
                    <div class="form-group" id="downloadForm">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<script>
    options = {

        // Required. Called when a user selects an item in the Chooser.
        success: function(files) {
            alert("Here's the file link: " + files[0].link)
        },

        // Optional. Called when the user closes the dialog without selecting a file
        // and does not include any parameters.
        cancel: function() {

        },

        // Optional. "preview" (default) is a preview link to the document for sharing,
        // "direct" is an expiring link to download the contents of the file. For more
        // information about link types, see Link types below.
        linkType: "preview", // or "direct"

        // Optional. A value of false (default) limits selection to a single file, while
        // true enables multiple file selection.
        multiselect: false, // or true

        // Optional. This is a list of file extensions. If specified, the user will
        // only be able to select files with these extensions. You may also specify
        // file types, such as "video" or "images" in the list. For more information,
        // see File types below. By default, all extensions are allowed.
        extensions: ['.pdf', '.doc', '.docx', 'images'],
    };

    var button = Dropbox.createChooseButton(options);
    document.getElementById("downloadForm").appendChild(button);
</script>