<?php
include_once('upload_ctrl.php');
?>
<div class="container pt-1">
    <form action="mod_upload/upload_ctrl.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-8">
                <input type="file" name="urlfile" id="urlfile" class="form-control">
            </div>
            <div class="col-md-2">
                <button type="submit" name="btnupload" class="btn btn-sm btn-primary">Simpan Upload</button>
            </div>
        </div>
    </form>
</div>
<hr>