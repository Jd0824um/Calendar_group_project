<!-- Modal -->
<div style="padding-top: 400px;" class="modal" id="uploadImgModal" data-backdrop="" role="dialog" aria-labelledby="uploadImageModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="uploadImageModal">Upload new picture:</h4>
            </div>
            <div class="modal-body">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    Select image to upload:
                    <input type="submit" value="Upload Image" name="submit">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </div>
</div>