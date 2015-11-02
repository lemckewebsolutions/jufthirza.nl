<?php
/**
 * @var string $appKey
 * @var string[] $downloadCategories
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
                <form action="<?php echo \LWS\JufThirza\CMS\Url::DOWNLOADS_PAGE?>"
                      method="POST"
                >
                    <div class="form-group">
                        <label for="titleInput">Titel</label>
                        <input type="text" class="form-control" id="titleInput" placeholder="Titel" name="title" required>
                    </div>
                    <div class="form-group" id="downloadForm">
                        <label for="fileInputName">Bestand</label>
                        <input type="hidden" class="form-control" id="fileThumpnail" name="fileThumbnail">
                        <input type="hidden" class="form-control" id="fileInput" name="file">
                        <input type="text" class="form-control" id="fileInputName" name="fileName" readonly>
                    </div>
                    <div class="form-group">
                        <label for="categoryInput">Category</label>
                        <select class="form-control" id="categoryInput" name="categoryid">
                            <?php foreach ($downloadCategories as $categoryId => $category) { ?>
                                <option value="<?php echo $categoryId?>"><?php echo $category?></option>
                            <?php } ?>
                        </select>
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
<script>
    options = {

        // Required. Called when a user selects an item in the Chooser.
        success: function(files) {
            document.getElementById("fileInput").value = files[0].link;
            document.getElementById("fileInputName").value = files[0].name;
            document.getElementById("fileThumpnail").value = files[0].thumbnailLink;
        },

        // Optional. "preview" (default) is a preview link to the document for sharing,
        // "direct" is an expiring link to download the contents of the file. For more
        // information about link types, see Link types below.
        linkType: "direct", // or "direct"

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